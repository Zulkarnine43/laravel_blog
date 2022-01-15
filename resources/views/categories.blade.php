@extends('frontlayout')
@section('title','All Categories')
@section('content')
		<div class="row " style="padding-top:60px; padding-bottom:20px;">
			<div class="col-md-12">
				<h5 class="text-center pb-5">All Categories</h5>
				<div class="row mb-5"> 
					@if(count($categories)>0)
						@foreach($categories as $category)
						<div class="col-md-4">
							<div class="card">
							  <a href="{{url('category/'.Str::slug($category->title).'/'.$category->id)}}"><img src="{{asset('imgs/'.$category->image)}}" class="card-img-top" alt="{{$category->title}}" height="250px;" /></a>
							  <div class="card-body">
							    <h5 class="card-title"><a href="{{url('category/'.Str::slug($category->title).'/'.$category->id)}}">{{$category->title}}</a></h5>
							  </div>
							</div>
						</div>
						@endforeach
					@else
					<p class="alert alert-danger">No Category Found</p>
					@endif
				</div>
				<!-- Pagination -->
				{{$categories->links()}}
			</div>
			<!-- Right SIdebar -->
			
		</div>
@endsection('content')