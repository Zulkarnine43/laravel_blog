@extends('frontlayout')
@section('title','Manage Posts')
@section('content')
		<div class="row" style="padding-top:50px;">
			<div class="col-md-8 mb-5">
						@if(Session::has('success'))
							<p class="text-success">{{session('success')}}</p>
						@endif
						<h3 class="mb-4">Manage Posts</h3>
					<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
									<th>#</th>
									<th>Category</th>
									<th>Title</th>
									<th>Image</th>
									<th>Full</th>
									<th>Action</th>

									</tr>
								</thead>
								<tfoot>
									<tr>
									<th>#</th>
									<th>Category</th>
									<th>Title</th>
									<th>Image</th>
									<th>Full</th>
									</tr>
								</tfoot>
								<tbody>
									@foreach($posts as $post)
									<tr>
										<td>{{$post->id}}</td>
										<td>{{$post->category->title}}</td>
										<td>{{$post->title}}</td>
										<td><img src="{{ asset('imgs/thumb').'/'.$post->thumb }}" width="100" /></td>
										<td><img src="{{ asset('imgs/full').'/'.$post->full_img }}" width="100" /></td>
										<td>
											<a class="btn btn-info btn-sm" href="{{route('editPost',$post->id)}}"><span class="fa fa-pencil"></span></a>
											<a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm" href="{{route('deletePost',$post->id)}}"><span class="fa fa-trash"></span></a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
			</div>
			<!-- Right SIdebar -->
			<div class="col-md-4 pt-5">
				<!-- Search -->
				{{-- <div class="card mb-4">
					<h5 class="card-header">Search</h5>
					<div class="card-body">
						<form action="{{url('/')}}">
							<div class="input-group">
							  <input type="text" name="q" class="form-control" />
							  <div class="input-group-append">
							    <button class="btn btn-dark" type="button" id="button-addon2">Search</button>
							  </div>
							</div>
						</form>
					</div>
				</div> --}}
				<!-- Recent Posts -->
				<div class="card mb-4">
					<h5 class="card-header">Recent Posts</h5>
					<div class="list-group list-group-flush">
						@if($recent_posts)
							@foreach($recent_posts as $post)
								<a href="{{route('single.post',$post->id)}}" class="list-group-item">{{$post->title}}</a>
							@endforeach
						@endif
					</div>
				</div>
				<!-- Popular Posts -->
				<div class="card mb-4">
					<h5 class="card-header">Popular Posts</h5>
					<div class="list-group list-group-flush">
						@if ($popular_posts)
						@foreach($popular_posts as $post)
					     	<a href="{{route('single.post',$post->id)}}" class="list-group-item float-left">{{$post->title}} <span class="badge badge-success float-right">{{$post->views}}</span></a> 
					    @endforeach
						@endif()
					</div>
				</div>
			</div>
		</div>
<!-- Page level plugin CSS-->
<link href="{{asset('backend')}}/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<script src="{{asset('backend')}}/vendor/datatables/jquery.dataTables.js"></script>
<script src="{{asset('backend')}}/vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="{{asset('backend')}}/js/demo/datatables-demo.js"></script>
@endsection('content')

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>


<script type="text/javascript">
   
      $(document).ready(function() {
        $('#summary').summernote();
      });
</script>
        