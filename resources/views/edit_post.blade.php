@extends('frontlayout')
@section('title','Save Post')
@section('content')
		<div class="row">
			<div class="col-md-10 mb-5 ml-5">
				<h3>Edit Post</h3>
				<div class="table-responsive">

                @if($errors)
                  @foreach($errors->all() as $error)
                    <p class="text-danger">{{$error}}</p>
                  @endforeach
                @endif

                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif

                <form method="post" action="{{url('update-post/'.$post->id)}}"  enctype="multipart/form-data">
                  @csrf
                  <table class="table table-bordered">
                    <tr>
                          <th>Category<span class="text-danger">*</span></th>
                          <td>
                            <select class="form-control" name="category">
                              @foreach($cats as $cat)
                                @if($cat->id==$post->cat_id)
                                <option selected value="{{$cat->id}}">{{$cat->title}}</option>
                                @else
                                <option value="{{$cat->id}}">{{$cat->title}}</option>
                                @endif
                              @endforeach
                            </select>
                          </td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td><input type="text" value="{{$post->title}}" name="title" class="form-control" /></td>
                    </tr>
                    <tr>
                        <th>Thumb</th>
                        <td>
                          <p class="my-2"><img width="80" src="{{asset('imgs/thumb')}}/{{$post->thumb}}" /></p>
                          <input type="hidden" value="{{$post->thumb}}" name="post_thumb" />
                          <input type="file" name="post_thumb" />
                        </td>
                    </tr>
                    <tr>
                        <th>Full Image</th>
                        <td>
                          <p class="my-2"><img width="80" src="{{asset('imgs/full')}}/{{$post->full_img}}" /></p>
                          <input type="hidden" value="{{$post->full_img}}" name="post_image" />
                          <input type="file" name="post_image" />
                        </td>
                    </tr>
                    <tr>
                        <th>Detail<span class="text-danger">*</span></th>
                        <td>
                          <textarea class="form-control" id="summary" name="detail">{{$post->detail}}</textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>Tags</th>
                        <td>
                          <textarea class="form-control" name="tags">{{$post->tags}}</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" >
                            <button  type="submit" class="btn btn-success col-md-12">Update</button>
                        </td>
                    </tr>
                </table>
                </form>
              </div>
			</div>
           
		</div>
@endsection('content')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>


<script type="text/javascript">
   
      $(document).ready(function() {
        $('#summary').summernote();
      });
</script>
        