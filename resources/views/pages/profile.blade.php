@extends('layouts.app')

<!--include header page-->
@section('title' , 'Profile')
@section('content')
<section>     
@include('layouts.sidenav')
<div id="pages_right" class="column"">
       <div class="profile">
             <div class="profile__wrapper">
                 <div class="profile__wrapper__card">
                      <h1>Settings</h1>
                      <div class="card">
                             <div class="card-trip">
                                  <div class="c-card"></div>
                                  <div class="c-card">
                                    <h3>Profile information</h3>
                                     <p>Complete your profile to unlock all feature</p>
                                  </div>
                             </div>

                             <div class="card-trip">
                                 <h4>Complete my profile</h4>
                            </div>
                      </div>
                 </div>  
             </div>
             <div class="profile__wrapper">
                <div class="profile__wrapper__edit">
                    <h1>Account setting</h1>

                    <div class="card__form">
                         <div class="text-font">
                              <h2>Personal information</h2>
                              <p>You can edit your personal information</p>
                         </div>
                         <form class="forms" action="" method="POST">
                               <div class="card-inp">
                                   <div class="card-input">   
                                       <label for="">Firstname</label><br>
                                       <input type="text" 
                                       placeholder="Makanju">
                                   </div>
                                   <div class="card-input">
                                       <label for="">Lastname</label><br>
                                       <input type="text" 
                                       placeholder="Emmanuel">
                                   </div>    
                               </div>
                               <div class="card-input">
                                    <label for="">Email address</label>
                                    <input type="text" 
                                    placeholder="makurseme@gmail.com">    
                               </div>
                            
                            <h2 class="Notify">Notifications</h2>
                            <p class="Noti">Choose the type type of Notification you want to recieve</p>
                            <div class="check-card">
                              <input type="checkbox" 
                              name="" 
                              id="">
                              <label for="">Withdraw activity</label>
                                 
                            </div>
                            <div class="check-card">
                              <input type="checkbox" 
                              name="" 
                              id="">
                              <label for="">Weekly Report</label>
                           </div>
                           <div class="check-card">
                            <input type="checkbox" 
                            name="" 
                            id="">
                            <label for="">Payment Success</label>
                       </div>
                       
                         <div class="button-profile">
                              <div class="button-card">
                                   <button>Discard change</button>
                              </div>
                              <div class="button-card">
                                  <button>Save change</button>
                              </div>
                         </div>
                         </form>
                    </div>
                </div>     
            </div>
       </div>
</div>
</section> 
@endsection