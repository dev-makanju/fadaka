<div id="left" class="column">
    <div class="side-navbar">
         <img src="media\smallprofile.jpg.png" alt="user-icon">
         <p>hi, {{ $LoggedUserInfo['username'] }}</p>
    </div>
    <div class="side-navbar">
        <div class="side-navbar__balance">
             <li>Wallet bal:</li><p><span class="cash">NGN</span><?php returnUserBalanceById() ?></p>
        </div>
    </div>
    <ul class="sidebar">
         <li>
              <a href="{{ route('pages.dashboard') }}" class="active">
                   <i style="padding:7px;border-radius: 5px; background: green;" class="fa fa-dashboard"></i>
                   Dashboard
              </a>
         <li>
              <a href="{{ route('pages.mail') }}">
                   <i style="padding:7px;border-radius: 5px; background: #e74e3c;" class="fa fa-envelope"></i>
                   Mail
              </a>
         </li>
         <li>
              <a href="{{ route('pages.withdraw') }}">
                   <i style="padding:7px;border-radius: 5px; background: yellow;"class="fa fa-inbox"></i>
                   Withdraw  
              </a>
         </li>
         <li>
              <a href="{{ route('pages.profile') }}">
                   <i style="padding:7px;border-radius: 5px; background: orange;" class="fa fa-user"></i>
                   Profile
              </a>
         </li>
         <li>
              <a href="{{ route('pages.fund') }}">
                   <i style="padding:7px;border-radius: 5px; background: green;" class="fa fa-dollar"></i>
                   Top up Wallet
              </a>
         </li>
          <li>
              <a href="{{ route('pages.transact') }}">
                   <i style="padding:7px;border-radius: 5px; background:purple;" class="fa fa-dollar"></i>
               Transaction History
               </a>
          </li>
          <li>
               <a href="{{ route('pages.help') }}">
                    <i style="padding:7px;border-radius: 5px; background: yellow;" class="fa fa-dollar"></i>
                Help
                </a>
           </li>
    </ul>
</div>