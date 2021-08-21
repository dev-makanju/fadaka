@extends('layouts.app')
@section('title','Home')
@section('content')
<section>     
     @include('layouts.sidenav')
     <div id="right" class="column"">
          <h1 style="color:#000;">Dashboard</h1>
         <div class="main-content">
               <div class="main-content__wrapper">
                    <div class="main-content__box">
                         <div class="slider-image">
                              <div class="main-content__box__overlay">
                                   <img  src="/media/bitcoin.jpg" alt="">
                                   <div>
                                        <h2> Your finances are secure..</h2>
                                   </div>
                              </div>
                              <div class="main-content__box__overlay">
                                   <img  src="/media/wallet.jpg" alt="">
                                   <div>
                                        <h2>Get best services From Vtu providers</h2>
                                   </div>
                              </div>
                              <div class="main-content__box__overlay">
                                   <img src="/media/internet.jpg" alt="">
                                   <div>
                                        <h2>Mobile Cashback</h2>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="main-content__box">
                         <div class="main_dashboard">
                                   <a href="">    
                                        <div class="top-dash__box"></div>
                                        <div class="message__dashboard">
                                            <div class="message_content_dash">
                                                <a href="{{ route('pages.transfer') }}">Quick transfer</a>
                                            </div>
                                        </div><!--end of message-->
                                   </a>
                                   <a href="">    
                                        <div class="top-dash__box"></div>
                                        <div class="message__dashboard">
                                            <div class="message_content_dash">
                                                <p>Purchase Data</p>
                                            </div>
                                        </div><!--end of message-->
                                   </a>
                                   <a href="">    
                                        <div class="top-dash__box"></div>
                                        <div class="message__dashboard">
                                            <div class="message_content_dash">
                                                <p>Tv Subscription</p>
                                            </div>
                                        </div><!--end of message-->
                                   </a>
                         
                                  <a href="">   
                                   <div class="top-dash__box"></div>  
                                   <div class="message__dashboard">
                                       <div class="message_content_dash">
                                           <p>Airtime Topup</p>
                                       </div>
                                   </div><!--end of message-->
                                   </a>

                                   <a href="">    
                                   <div class="top-dash__box"></div>
                                   <div class="message__dashboard">
                                       <div class="message_content_dash">
                                           <p>Currency Converter</p>
                                       </div>
                                   </div><!--end of message-->
                                   </a>

                                   <a href="">    
                                   <div class="top-dash__box"></div>
                                   <div class="message__dashboard">
                                       <div class="message_content_dash">
                                           <p>Withdraw</p>
                                       </div>
                                   </div><!--end of message-->
                                   </a>

                                   <a href="">    
                                        <div class="top-dash__box"></div>
                                        <div class="message__dashboard">
                                            <div class="message_content_dash">
                                                <p>Buy Bitcoin</p>
                                            </div>
                                        </div><!--end of message-->
                                   </a>

                                   <a href="">    
                                        <div class="top-dash__box"></div>
                                        <div class="message__dashboard">
                                            <div class="message_content_dash">
                                                <p>Redeem giftcard</p>
                                            </div>
                                        </div><!--end of message-->
                                   </a>
                          </div>
                    </div>
                    <div class="currency__converter">
                         <div class="currency__header">
                         <h2> <i class="fa fa-convert">M</i> Convert</h2>      
                         <form action="" method="post">
                              <div class="currency__form">
                               @csrf
                              <label for="from">From</label>
                              <input 
                                   type="text"
                                   placeholder="1.000"
                                   name="from">
                                   <select name="select">
                                        <option value=""></option>
                                   </select>

                              <label for="from">To</label>
                              <input 
                                   type="text"
                                   placeholder="1.000"
                                   name="to">
                              <select name="select">
                                   <option value="">USD</option>
                              </select>  
                              <button class="currency__button">Convert</button> 
                              </div>
                         </div>          
                         </form>
                    </div>
                    
               </div>
         </div>
     </div>
</section>     
@endsection