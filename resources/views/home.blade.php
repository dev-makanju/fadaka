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
                         <div class="main-content__box__overlay">
                         <img class="dashboard__display" height="250" alt="">
                          <div class="main-content__box__text-display">
                              <div>
                                 <h2>
                                    Your finances are secure...
                                 </h2>
                              </div>
                              <div>
                                   <h2>
                                        Mobile Cashback
                                   </h2>
                              </div>
                              <div>
                                   <h2>
                                        The best bank App in Town
                                   </h2>
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
                                                <p>Quick Transfer</p>
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
                    <div class="main-content__box">
                         <h1 style="color:#000;">Transaction History</h1>
                         <div class="trow-exception">
                              Oops!! , Nothing Found
                         </div>
                         <div class="main-search">
                              <form action="">
                                   <div class="search-bar">
                                        <input type="text" placeholder="search-bar">
                                        <i class="fa fa-search"></i>
                                   </div>
                                   <div class="search-bar">
                                        <input type="text" placeholder="All Cartigory">
                                        <select name="" id="">
                                             <option value="">
                                             </option>
                                        </select>
                                   </div>
                              </form>
                         </div>
                         <table>
                              <thead>
                                   <th>s/n</th>
                                   <th>History</th>
                                   <th>All cartigories</th>
                                   <th>Date</th>
                              </thead>
                              <tbody>
                                   <tr>
                                        <td>1</td>
                                        <td>Transfer</td>
                                        <td>Pos service</td>
                                        <td>July 01 2020</td>
                                   </tr>
                              </tbody>
                         </table>
                     </div>
               </div>
         </div>
     </div>
</section>     
@endsection