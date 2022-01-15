@extends('frontend.layouts.master')

@section('main_content')
<div class="latest-news " style="background: black">
    <marquee  behavior="" direction="">Global education calls for effective leadership and coordination now more than ever <strong class="text-warning">***</strong>Early moments matter in co-parenting: A letter from a new mother to her son<strong class="text-warning">***</strong>Time to care – supporting parents and families through family-friendly policies<strong class="text-warning">***</strong></marquee>

</div>

<div class="latest-news pt-50 pb-150">

    <div class="container">

        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">	
                    <h3><span class="orange-text">Features</span> News</h3>
                    <p></p>
                </div>
            </div>
        </div>

        <div class="row">
        
            @foreach ($posts as $post)
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-news">
                    <a  href="{{route('single.post',$post->id)}}"><div class="latest-news-bg news-bg-1 mb-5 "><img src="{{asset('imgs/full/'.$post->full_img)}}" alt="" height="250" width="360" style="margin-bottom: 100px;"></div></a>
                    <div class="news-text-box">
                        <h3><a  href="{{route('single.post',$post->id)}}">{!! Str::limit("$post->title", 25) !!}</a></h3>
                        <p class="blog-meta">
                         @if ($post->user)
                         <span class="author"><i class="fas fa-user">{{$post->user->name}}</i></span>
                         @else
                         <span class="author"><i class="fas fa-user">Admin</i></span>

                         @endif
                  
                            <span class="date"><i class="fas fa-calendar"></i> {{$post->created_at->diffForHumans()}}</span>
                        </p>
                        <p class="excerpt"> {!! Str::limit("$post->detail", 240) !!}

                        </p>
                        <a  href="{{route('single.post',$post->id)}}" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
           
            @endforeach
           
          
        </div>
        {{-- <div class="row">
            <div class="col-lg-12 text-center">
                <a href="news.html" class="boxed-btn">More News</a>
            </div>
        </div> --}}
    </div>
</div>
@endsection