<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('images/img.jpg')}}" alt="">
                        {{-- John Doe --}}

                        @auth
     {{ auth()->user()->name }}
@endauth
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="javascript:;"> Profile</a>
                        <a class="dropdown-item" href="javascript:;">
                            <span class="badge bg-red pull-right">50%</span>
                            <span>Settings</span>
                        </a>
                        <a class="dropdown-item" href="javascript:;">Help</a>
                        <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">

                            {{ $unreadCount }}

                            {{-- 6 --}}
                        
                        
                        </span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">



{{-- @foreach ( as ) --}}
    
@foreach($unreadMessages as $message)
    <p>{{ $message->content }}</p>
    <!-- Assuming 'content' is the field that holds the message content -->


                        <li class="nav-item">
                            <a class="dropdown-item">


                              <a  href="{{ route('showMessage1', $message->id) }}">

                                <span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>

                             


                                <span>
                                    <span>
                                        {{-- John Smith  --}}
                                        {{ $message->fname}} {{ $message->lname}}
                                    
                               
                                    
                                    </span>

                                </a>
                                    <span class="time">3 mins ago</span>
                                </span>
                                <span class="message">
                                    {{-- Film festivals used to be do-or-die moments for movie makers. They were where... --}}
                              



                                    {{ $message->content}}

                                </span>
                            </a>
                        </li>
                 



                        @endforeach









                        <li class="nav-item">
                            <div class="text-center">
                                <a class="dropdown-item">

                                    <a  href="{{ route('messages')}}"

                                    <strong>See All Alerts</strong>


                                </a>

                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>