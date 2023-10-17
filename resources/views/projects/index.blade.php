@extends('layouts.app')
@section('content')
   <!-- property grid start -->
   <section wire:id="QKSO8K4MCpbUnJr7nMm8" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;QKSO8K4MCpbUnJr7nMm8&quot;,&quot;name&quot;:&quot;projects&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;projects&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;d70f5ba9&quot;,&quot;data&quot;:{&quot;location&quot;:&quot;&quot;,&quot;description&quot;:null},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;b9b649999f46f129ca38158ac0002408884c93ed5dc34c07a08a1f5d8f1fd884&quot;}}" class="property-section">
   <div class="container">
      <div class="row ratio_63">
         <div class="col-xl-3 col-lg-4 mb-3">
            <div class="left-sidebar">
               <div class="filter-cards">
                  <div class="advance-card">
                     <div class="back-btn d-lg-none d-block">
                           Back
                     </div>
                     <h5 class="mb-0 advance-title">Advance search </h5>
                  </div>
                  <div class="advance-card">
                     <h6>Property Location</h6>
                     <div class="row gx-2">
                        <div class="col-12">
                           <div class="form-group">
                              <select wire:model="location" class="form-control">
                                 <option value="">All Properties</option>
                                 <option value="Birmingham">Birmingham</option>
                                 <option value="Manchester">Manchester</option>
                                 <option value="Leeds">Leeds</option>
                                 <option value="Liverpool">Liverpool</option>
                                 <option value="Cambridge">Cambridge</option>
                                 <option value="Coventry">Coventry</option>
                                 <option value="Nottingham">Nottingham</option>
                                 <option value="London">London</option>
                                 <option value="Bracknell">Bracknell</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
                     </div>
         <div class="col-xl-9 col-lg-8 property-grid-3" style="background-color: white;padding: 25px;">
            <div class="filter-panel">
               <div class="top-panel">
                  <div>
                     <h2 class="text-center">Properties Listing | <i class="fal fa-map-marker-alt"></i> </h2>
                  </div>
               </div>
            </div>
            <div class="property-wrapper-grid">
               <div class="property-2 row column-sm zoom-gallery property-label property-grid">
                  <div class="col-xl-12 col-md-12 description">

                  </div>
                  @foreach ($projects as $project )
                  <div class="col-xl-4 col-md-6 wow fadeInUp">
                    <div class="property-box">
                       <div class="property-image">
                          <div class="property-slider">
                             <a href="{{route('projects.show',$project->slug)}}">
                                                                                                           <img src="https://cms.baroncabot.com/media/products/Cr0zu0Screenshot_2023-08-08_091151.png" class="bg-img" alt="The Muller Yard" style="height: 256px">
                                                                 </a>
                          </div>

                       </div>
                       <div class="property-details" style="min-height: 251px;">
                          <span class="font-roboto">{{$project->title}}</span>
                          <a href="{{route('projects.show',$project->slug)}}">
                             <h3>{{$project->location}}</h3>
                          </a>
                          <h6>{{$project->starting_price}}</h6>
                          <h5><b>Completion :</b> <span class="text-primary">{{$project->completion}}</span></h5>


                          <div class="property-btn d-flex">

                             <button type="button"  onclick="document.location='{{route('projects.show',$project->slug)}}'" class="btn btn-dashed btn-pill  btn-block color-2 mt-3">Details</button>
                          </div>
                       </div>
                    </div>
                 </div>
                  @endforeach
                                 </div>
            </div>

            <!-- Get in touch section start -->
            <section class="small-section get-in-touch mt-5">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="log-in">
                           <div class="mb-4 text-start text-center">
                              <h2>Let's Get In Touch</h2>
                              <p>Find out more about our latest UK property opportunities get in touch with our team.</p>
                           </div>
                           <form class="row gx-3" action="https://baroncabot.com/save/website/inquiry" method="POST" >
                              <input type="hidden" name="_token" value="vjAz3Bu0DeJxB6kMxwVQ35TLJyWZLzJ2s2cdIyg0">                              <div class="col-md-6">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="first_name" placeholder="Enter your name" required="">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="last_name" placeholder="Enter Last name" required="">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="email address" required="">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <input type="tel" name="phone_number" id="phone2" class="form-control" required>
                                    <span id="valid-msg2" class="hide">✓ Valid</span>
                                    <span id="error-msg2" class="hide"></span>
                                 </div>
                              </div>
                              <script src="https://www.google.com/recaptcha/api.js?" async defer></script>

                              <div data-sitekey="6LfqNxEiAAAAAG_0YC_kwiF2tWAwY7Rx_FOJWu4G" class="g-recaptcha"></div>
                                                            <div class="col-md-12 submit-btn">
                                 <center><button type="submit" class="btn btn-warning hide" id="submitForm2">Submit Information</button></center>
                                 <center><small class="text-danger hide" id="phone_valid2">Your Phone Number is invalid</small></center>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Get in touch section end -->
         </div>
      </div>
   </div>
</section>
@endsection
