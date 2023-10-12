@extends("layouts.app",['title'=>$post->gen_seo_title()])

@section("content")

    @if(config("binshopsblog.reading_progress_bar"))
        <div id="scrollbar">
            <div id="scrollbar-bg"></div>
        </div>
    @endif

    {{--https://github.com/binshops/laravel-blog--}}

            @include("binshopsblog::partials.show_errors")
            @include("binshopsblog::partials.full_post_details")


            @if(config("binshopsblog.comments.type_of_comments_to_show","built_in") !== 'disabled')
                <div class="" id='maincommentscontainer'>
                    <h2 class='text-center' id='binshopsblogcomments'>Comments</h2>
                    @include("binshopsblog::partials.show_comments")
                </div>
            @else
                {{--Comments are disabled--}}
            @endif



@endsection
