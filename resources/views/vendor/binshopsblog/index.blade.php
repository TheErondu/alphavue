@extends('layouts.app')
@section('content')
   <!-- blog section start-->
   <section class="ratio_landscape blog-list-section">
      <div class="container">
         <div wire:id="lMrZctW4ogwi2T8TWOpM" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;lMrZctW4ogwi2T8TWOpM&quot;,&quot;name&quot;:&quot;blog&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;blog&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;37e991ae&quot;,&quot;data&quot;:{&quot;search&quot;:null},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;567142a1f4b42e9dac12ce5f72eb3e9e693289828848832161be8ea7b5c31322&quot;}}" class="row">
   <div class="col-xl-9 col-lg-8">
      <div class="blog-grid row mt-0">
        @forelse($posts as $post)
                     <div class="col-md-6">
               <div class="blog-wrap wow fadeInUp">
                  <div class="blog-image">
                    <?=$post->image_tag("medium", true, ''); ?>
                     <div class="blog-label">
                        <div>
                           <h3>{{date('d', strtotime($post->posted_at))}}</h3>
                           <span>{{date('M', strtotime($post->posted_at))}}</span>
                        </div>
                     </div>
                  </div>
                  <div class="blog-details">
                                          <div>
                        <h3>
                           <a  href="{{$post->url()}}" rel="canonical" >{{$post->title}}</a>
                        </h3>
                        @if (config('binshopsblog.show_full_text_at_list'))
                        <p class="font-roboto">{!! $post->post_body_output() !!}</p>
                    @else
                        <p class="font-roboto">{!! mb_strimwidth($post->post_body_output(), 0, 400, "...") !!}</p>
                    @endif
                        <a  href="{{$post->url()}}" rel="canonical" >read more</a>
                     </div>
                  </div>
               </div>
            </div>
            @empty
            <div class="col-md-12">
                <div class='alert alert-danger'>No posts!</div>
            </div>
        @endforelse

               </div>

   </div>
   <div class="col-xl-3 col-lg-4">
      <div class="sticky-cls blog-sidebar blog-right">
         <div class="filter-cards">
            <div class="advance-card mb-5">
               <div class="search-bar">
                  <input type="text" placeholder="Search here.." wire:model="search">
                  <i class="fas fa-search"></i>
               </div>
            </div>

            <div class="advance-card mb-5">
               <h6>Category</h6>
               <div class="category-property">
                  <ul>
                                             <li>
                           <a href="https://baroncabot.com/blog/insights/category">
                              <i class="fas fa-arrow-right me-2"></i>Insights

                           </a>
                        </li>
                                             <li>
                           <a href="https://baroncabot.com/blog/news/category">
                              <i class="fas fa-arrow-right me-2"></i>News

                           </a>
                        </li>
                                       </ul>
               </div>
            </div>


         </div>
      </div>
   </div>
</div>

<!-- Livewire Component wire-end:lMrZctW4ogwi2T8TWOpM -->      </div>
   </section>
   <!-- blog section end-->
@endsection
