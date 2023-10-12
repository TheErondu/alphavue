<!-- blog details section start-->
<section class="ratio_40">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="blog-single-detail theme-card" style="background-color: white;">
                    <center>
                        <img src="https://cms.baroncabot.com/media/posts/PnvKdm.jpg" class="img-responsive"
                            alt="The Top 10 UK Investment Property Books: Complete 2023 Guide" style="width:100%">
                    </center>
                    <div class="blog-title">
                        <ul class="post-detail">
                            <li>{{ \Carbon\Carbon::parse($post->posted_at)->format('F jS, Y') }}</li>
                            @if (\Auth::check() && \Auth::user()->canManageBinshopsBlogPosts())
                                <li><a href="{{ $post->edit_url() }}">Edit
                                        Post</a></li>
                            @endif

                        </ul>
                        <h3>{{ $post->title }}</h3>
                    </div>
                    <div class="details-property description">
                        <div class="row">
                            {!! $post->post_body_output() !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="sticky-cls blog-sidebar blog-right">
                    <div class="filter-cards">


                        <div class="advance-card mb-5">
                            <h6>Category</h6>
                            <div class="category-property">
                                <ul>
                                    <li>
                                        <a href="https://baroncabot.com/blog/insights/category"><i
                                                class="fas fa-arrow-right me-2"></i>Insights

                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://baroncabot.com/blog/news/category"><i
                                                class="fas fa-arrow-right me-2"></i>News

                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
