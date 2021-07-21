@extends('layouts.app')
@section('title','Home')
@section('content')
<section>
     <div id="left" class="column">
          <div class="side-navbar">
               <img src="media\smallprofile.jpg.png" alt="user-icon">
               <p>hi, Makanju</p>
          </div>
          <div class="side-navbar">
              <div class="side-navbar__balance">
                   <li>Wallet bal:</li> <p><span class="cash">&pound</span>7000.00</p>
              </div>
          </div>
          <ul class="sidebar">
               <li>
                    <a href="#" class="active">
                         <i class>M</i>
                         Dashboard
                    </a>
               <li>
                    <a href="#">
                         <i class>M</i>
                         Mail
                    </a>
               </li>
               <li>
                    <a href="#">
                         <i class>M</i>
                         Message
                    </a>
               </li>
               <li>
                    <a href="#">
                         <i class>M</i>
                         Profile
                    </a>
               </li>
               <li>
                    <a href="#">
                         <i class>M</i>
                         Fund wallet
                    </a>
               </li>
          </ul>
     </div>
     <div id="right" class="column"">
          <h1 style="color:#000;">Dashboard</h1>
         <div class="main-content">
               <div class="main-content__wrapper">
                    <div class="main-content__box">
                         <div class="main-content__box__overlay"></div>
                         <img class="dashboard__display" height="250" src="media/IMG.PIC.JPG" alt="">
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
                    <div class="main-content__box">
                         <div class="main-content__box__wrapper">
                              <div class="main-content__box__wraps">
                                   <div class="transfer">
                                        <h1 style="color:#000;">Quick Transfer</h1>
                                        <form action="">
                                             <div class="secure__transfer">
                                                  <input type="text" placeholder="1234 1234 1234 1234">
                                                  <img src="" class="icon" alt="icon">
                                             </div>
                                             <button><i class="fa fa-search"></i></button>
                                        </form>
                                   </div>
                              </div>
                              <div class="main-content__box__wraps">
                                   <div class="transfer">
                                   <h1 style="color:#000;">Conversion</h1>
                                   <form action="">
                                        <div class="secure__transfer">
                                             <input type="text" class="converter" placeholder="&pound000.00">
                                             <select name="" id="">
                                                  <option value="">USD</option>
                                                  <option value="">NGN</option>
                                                  <option value="">CUD</option>
                                             </select>
                                             <input type="" class="converter" placeholder="convert to">
                                             <select name="" id="">
                                                  <option value="">USD</option>
                                                  <option value="">NGN</option>
                                                  <option value="">CUD</option>
                                             </select>
                                        </div>
                                        <p ><span>Rate</span>500/USD...</p>
                                   </form>
                                   </div>
                              </div>
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