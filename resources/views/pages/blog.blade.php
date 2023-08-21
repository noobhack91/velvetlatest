@extends('pages.master')

@section('content')
<section class="ds section_padding_top_100 section_padding_bottom_50 columns_padding_25">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-push-1">
                @if($blogs->count() > 0)
                    @foreach($blogs as $blog)
                        <article class="vertical-item post format-standard with_background">
                            <div class="item-media entry-thumbnail">
                                <div class="entry-meta-corner">
                                    <span class="date">
                                        <time datetime="{{ $blog->created_at->toIso8601String() }}" class="entry-date">
                                            <strong>{{ $blog->created_at->format('d') }}</strong>
                                            {{ $blog->created_at->format('M') }}
                                        </time>
                                    </span>
                                </div>
                                <a href="{{ route('blog.show', ['title' => Str::slug($blog->blog_title)]) }}">
                                    @if($blog->filename)
                                        <img src="{{ asset('images/'.$blog->filename) }}" alt="">
                                    @else
                                        <img src="{{ asset('images/no-image.png') }}" alt="">
                                    @endif
                                </a>
                            </div>

                            <div class="item-content entry-content">
                                <header class="entry-header">
                                    <h4 class="entry-title">
<a href="{{ route('blog.show', ['title' => Str::slug($blog->blog_title)]) }}">
                                            {{ $blog->blog_title ?: 'Untitled Blog' }}
                                        </a>
                                    </h4>
                                </header>
                                <p>{!! $blog->descripion ? $blog->descripion:'' !!}</p>
                            </div>
                        </article>
                    @endforeach
                @else
                    <p>No blog posts available.</p>
                @endif

                <div class="row topmargin_60">
                    <div class="col-sm-12 text-center">
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
