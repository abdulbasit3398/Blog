@extends('user/app')

@section('bg-img',Storage::disk('local')->url($post->image))

@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('user/css/prism.css')}}">
@endsection


@section('title',$post->title)
@section('sub-heading',$post->subtitle)

@section('main-content')
	
	<article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <small>Created at {{$post->created_at->diffForHumans()}} </small>

          @foreach($post->categories as $category)
            <small style="float: right;margin-right: 20px"><a href="category/{{$category->slug }}">{{$category->name }} </a></small>
          @endforeach
          {!! htmlspecialchars_decode($post->body) !!}

          @foreach($post->tags as $tag)
            <a href="tag/{{$tag->slug }}"><small style="float: left;margin-right: 20px;border: 1px solid grey;border-radius: 5px;padding: 5px">{{$tag->name }} </small></a>
          @endforeach
        </div>
      </div>
    </div>
  </article>

  <hr>

@endsection

@section('footer')
  <script src="{{asset('user/js/prism.js')}}"></script>
@endsection