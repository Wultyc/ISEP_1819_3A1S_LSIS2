<nav class="side-navbar box-scroll sidebar-scroll">
    <!-- Begin Main Navigation -->
    <span class="heading">Dashboard</span>
    <ul class="list-unstyled">
        <li @if(\Route::current()->getName() == 'index') class="active" @endif  ><a href="/"><i class="la la-home"></i><span>{{__('Home')}}</span></a></li>
        <li @if(\Request::is('profile*')) class="active" @endif ><a @if(!\Request::is('profile*')) class="collapsed" @endif href="#dropdown-db" aria-expanded="false" data-toggle="collapse"><i class="la la-user"></i><span>{{__('Profile')}}</span></a>
            <ul id="dropdown-db" class="collapse list-unstyled pt-0 @if(\Request::is('profile*')) show @endif ">
                <li><a href="{{route('profile.index')}}">{{__('Edit')}}</a></li>
                <li><a href="#">{{__('Messages')}}</a></li>
                <li><a href="#">{{__('Notifications')}}</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </li>
        <li @if(\Request::is('statistics/*')) class="active" @endif ><a @if(!\Request::is('statistics/*')) class="collapsed" @endif href="#dropdown-app" aria-expanded="false" data-toggle="collapse"><i class="la la-line-chart"></i><span>{{__('Statistics')}}</span></a>
            <ul id="dropdown-app" class="collapse list-unstyled pt-0 @if(\Request::is('statistics/*')) show @endif ">
                <li><a href="{{route('statistics.oximetry')}}">{{__('Cardiac Pulse')}}</a></li>
                <li><a href="#">{{__('Blood Pressure')}}</a></li>
                <li><a href="#">{{__('Weight')}}</a></li>
                <li><a href="#">{{__('Height')}}</a></li>
            </ul>
        </li>
        <li @if(\Request::is('settings')) class="active" @endif ><a href="#"><i class="la la-cog"></i><span>{{__('Settings')}}</span></a></li>
    </ul>
    <!-- End Main Navigation -->
</nav>