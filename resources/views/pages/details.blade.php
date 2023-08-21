@extends('pages.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>{{ $blog->blog_title }}</h2>
	 <img src="{{ asset('images/' . $blog->filename) }}" alt="Blog Image">          
  <p>{!! $blog->descripion !!}</p>
          
        </div>
    </div>
</div>
@endsection
