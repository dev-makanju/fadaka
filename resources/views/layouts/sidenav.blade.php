<div id="left" class="column">
    <div class="side-navbar">
         <img src="media\smallprofile.jpg.png" alt="user-icon">
         <p>hi, {{ $LoggedUserInfo['username'] }}</p>
    </div>
    <div class="side-navbar">
        <div class="side-navbar__balance">
             <li>Wallet bal:</li><p><span class="cash">&pound</span>7000.00</p>
        </div>
    </div>
    <ul class="sidebar">
         <li>
              <a href="{{ route('pages.dashboard') }}" class="active">
                   <i class="fa fa-dashboard"></i>
                   Dashboard
              </a>
         <li>
              <a href="{{ route('pages.mail') }}">
                   <i class="fa fa-envelope"></i>
                   Mail
              </a>
         </li>
         <li>
              <a href="{{ route('pages.message') }}">
                   <i class="fa fa-inbox"></i>
                   Message    
              </a>
         </li>
         <li>
              <a href="{{ route('pages.profile') }}">
                   <i class="fa fa-user"></i>
                   Profile
              </a>
         </li>
         <li>
              <a href="{{ route('pages.fund') }}">
                   <i class="fa fa-dollar"></i>
                   Fund wallet
              </a>
         </li>
    </ul>
</div>