<div class="nav-header">
    <div class="brand-logo">
        <a href="{{route('specializations.index')}}">
            <img src="{!!asset('template/images/long.png')!!}" alt="" height="35" style="margin-top:-12px; padding-left:2rem;">
        </a>
    </div>
</div>
<div class="header">
    <div class="header-content clearfix">
                
        <div class="header-right"style="padding-right:1rem; padding-top:0.7rem;">
            <ul class="clearfix">
                @if(Auth::user()->role == "ADMINISTRATOR")
                <li class="icons dropdown">
                    <a href="javascript:void(0)" data-toggle="dropdown">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="badge badge-pill gradient-3" id="change">4</span>
                    </a>
                </li>
                <li class="icons" style="margin-top:-4px">
                        <span style=" font-size: 18px;color:#425c6c; padding-left:0.5rem; padding-right:0.5rem;">|</span>
                </li>
                @endif
                <li class="icons" style="margin-top:-4px">
                    <a href="{{route('request.index')}}"><button type="button" class="btn mb-1 gradient-3">Request</button></a>
                </li>
                <li class="icons" style="margin-top:-4px">
                        <span style=" font-size: 18px;color:#425c6c; padding-left:0.5rem; padding-right:0.5rem">|</span>
                </li>
                <li class="icons dropdown" style="padding-top:0.6rem">
                    <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                        <span style=" font-size: 18px;color:#425c6c;">{{Auth::user()->full_name}}</span>   <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>  
                    </div>
                    <div class="drop-down-left dropdown-profile animated fadeIn dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>
                                <li><a href="{{ route('users.show',1) }}"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('flogout').submit()"><i class="icon-key"></i> <span>Logout</span></a></li>                                
                            </ul>
                            <form id="flogout" action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
