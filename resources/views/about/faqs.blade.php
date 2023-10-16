@extends('layouts.app')
@section('content')
 <!-- section start -->
 <section class="faq-section log-in">
    <div class="container">
       <div class="row">
          <div class="col-lg-6 mb-5">
             <div class="faq-questions">

                <div id="accordion" class="accordion">
                   <div class="card">
                      <div class="card-header">
                      <a class="card-link" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true">
                         Why should I use a company like you and not direct to developer?
                      </a>
                      </div>
                      <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                         <div class="card-body">
                            <p>Baron & Cabot have the benefit of being able to offer full market coverage to advise to our clients the best development for you without being restricted to particular developers.</p>
                            <p>In addition to full market cover as we tend to purchase large volumes in each development we are able to negotiate for you using the volume of the company (as an when this is possible).</p>
                            <p>Finally, developers are generally not client focussing and require companies like us to go to the market. As such most developers will be unable to offer discounts which we can negotiate, this is because they cannot be seen to be undercutting the market.</p>
                         </div>
                      </div>
                   </div>
                   <div class="card">
                      <div class="card-header">
                      <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseTwo"> How do I know my money is protected?</a>
                      </div>
                      <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                      <div class="card-body">
                         <p>One of the great questions is protection on your investment. While no investment (in anything) is completely without risk, there are many ways we help protect you.</p>
                         <p>Speak to our staff about the due diligence conducted on each development and developer, all is available for you when needed.</p>
                         <p>In addition it’s likely that part or all of your money is protected with insurnace and other additional protection.</p>
                         <p>Each project is different so please feel free to request this information.</p>
                      </div>
                      </div>
                   </div>
                   <div class="card">
                      <div class="card-header">
                      <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseThree">
                         Why do you advise speaking to me before sharing projects?
                      </a>
                      </div>
                      <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                         <div class="card-body">
                            <p>At Baron & Cabot we have in excess of 11,000 investment properties we have access to. We also have many projects which cannot be advertised due to being owned by our clients who are not actively selling but would be open to offers, or it may be properties we are due to release soon or may even be small developements we will sell to existing clients as there is no need to do a lot of marketing (as they will sell immidiately).</p>
                            <p>By speaking to you our staff are trained in delivering not just the most suitable or best development, but also the most suitable unit in the development for you to consider.</p>
                            <p>Understanding your needs, price points and other factors significantly improves productivity for you our new client, and our staff, remove any calls or emails about properties which would not suit and make you more likely to find the ideal investment and buy through us which works for us both.</p>
                            <p>We are here to work with you as a busienss partner and ideally this starts with getting some understanding of your needs.</p>
                         </div>
                      </div>
                   </div>
                   <div class="card">
                      <div class="card-header">
                         <a class="card-link" data-bs-toggle="collapse" href="#collapseFour"> Do you help me find a mortgage? </a>
                      </div>
                      <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
                         <div class="card-body">
                            <p>Yes we do!</p>
                            <p>No matter where you live in the world, no matter what currency you earn in, and even if you are retired we can help you!</p>
                            <p>Speak to our specialists who will get you an actual rate and get you in contact with the lender.</p>
                            <p>Rates are between 1.5% and 6% with up to 30 year terms. Rates depend on the country you live in, and your own financial circumstances.</p>
                         </div>
                      </div>
                   </div>
                   <div class="card">
                      <div class="card-header">
                         <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseFive">How much should I expect to put down on a BTL mortgage?</a>
                      </div>
                      <div id="collapseFive" class="collapse" data-bs-parent="#accordion">
                         <div class="card-body">
                            <p>Please request advice on the loan to value on a buy to let mortgage. While most would say 25% or 30% total deposit for a mortgage each situation can be unique.</p>
                         </div>
                      </div>
                   </div>
                   <div class="card">
                      <div class="card-header">
                         <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseSix">
                            Do you help rent the property?
                         </a>
                      </div>
                      <div id="collapseSix" class="collapse" data-bs-parent="#accordion">
                         <div class="card-body">
                            <p>At Baron & Cabot we pride ourselves in a full service for investors. As many of our investors are not UK based, and most of the remainder do not want to be hands on with the investment we offer a 360 process from sourcing, mortgage, currency exchange, legal support and managemnt of the property.</p>
                            <p>Often we will use 3rd party support to ensure the best possible price for our investors.</p>
                         </div>
                      </div>
                   </div>
                   <div class="card">
                      <div class="card-header">
                         <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseSix">
                            Why are Baron & Cabot different to other brokers?
                         </a>
                      </div>
                      <div id="collapseSix" class="collapse" data-bs-parent="#accordion">
                         <div class="card-body">
                            <p>In our opinion we care more, we really focus on ‘confidence through clarity’.</p>
                            <p>We do the due diligence on developments which we will share with you. We will never carry a development which does not pass this criteria.</p>
                            <p>While there are some briliant companies in our market there are also some very lazy ones. If you have seen a development you like which we have not discussed with you, let us know, it may have failed our due diligence.</p>
                         </div>
                      </div>
                   </div>
                   <div class="card">
                      <div class="card-header">
                         <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseSix">
                            How can I check that you are safe to invest with?
                         </a>
                      </div>
                      <div id="collapseSix" class="collapse" data-bs-parent="#accordion">
                         <div class="card-body">
                            <p>If you have any doubt’s what so ever speak to one of our staff. This is a normal concern and one we have a lot of resources for.</p>
                            <p>If you are an international client we will often work with a local bank of yours who you can speak to and ask about how many mortgages we have done together.</p>
                            <p>Alternatively, we have independent solicitors who can help, or even solicitors in your own country who can work with us to supply due diligence.</p>
                            <p>Finally, we have almost certainly worked with people in your city who we can also arrange a call with.  </p>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>

          <div class="col-lg-6">
             <div class="faq-image text-center">
                <img src="../assets/images/FAQ.png" class="img-fluid" alt="faq placeholder">
                <h3>Have Any Questions ?</h3>
                <p class="font-roboto">You can ask anything you want to know</p>
             </div>
             <form>
                <div class="form-group mb-0">
                   <label>Let me know</label>
                   <input type="text" class="form-control" placeholder="Ask a question" required>
                </div>
                <button type="submit" class="btn btn-gradient color-2">Send</button>
             </form>
          </div>

       </div>
    </div>
 </section>
@endsection
