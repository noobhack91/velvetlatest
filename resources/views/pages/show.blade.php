<!-- resources/views/blog/show.blade.php -->

@extends('pages.master')

@section('content')
<section class="ds section_padding_top_100 section_padding_bottom_50">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-push-1">
                <article class="vertical-item post format-standard with_background">
                    <!-- Display the details of the blog post -->
                    <div class="item-media entry-thumbnail">
                        <!-- Display the blog post image here -->
                    </div>

                    <div class="item-content entry-content">
                        <header class="entry-header">
                            <h2 class="entry-title">{{ $blog->blog_title }}</h2>
                        </header>
                        <p>{!! $blog->description !!}</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection
