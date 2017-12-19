
<header>
    <nav style="height:190px;" class="navbar">
        <a href="{{ url('/') }}">
            <img src="{{ asset('image/ca_logo-dark.svg') }}" alt="CommunAbility"></a>
        <div  class="navbar-header navbar-right">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('about') }}" >About</a></li>
                <li><a href="{{ route('mentorship') }}">Mentorship</a></li>
                <li><a href="{{ route('education') }}">Education</a></li>
                <li><a href="{{ route('community') }}">Community</a></li>
                <li>

                    @if (Auth::check())

                        <a class="not-highlight" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="livicon" data-name="sign-out" data-s="18"></i>
                            Logout
                            <div class="profile">
                                <img src="{{ asset('image/profile-icon.svg') }}" alt="profile">
                            </div>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @else
                        <a class="not-highlight" href="#" style="max-width:120px;" data-toggle="modal" data-target="#myModal">Log In
                            <div class="profile">
                                <img src="{{ asset('image/profile-icon.svg') }}" alt="profile">
                            </div>
                        </a>
                    @endif
                </li>

            </ul>
        </div>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-sm">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Log In</h4>
                    </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                            <input type="text" name="email" placeholder="Email"  value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            <input type="password" name="password" placeholder="Password" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                            <a href="#">Forgot Password?</a>
                            <div class="clr"></div>
                            <br>
                            <input class="login-modal-button" type="submit" name="login" value="Log In">
                            <br><br><br>
                    </form>
                    Don't have an account?
                    <a class="sign-up" href="{{ route('signup') }}">SIGNUP</a>
                    <div class="clr"></div>
                    <br><br><br>
                </div>
            </div>

        </div>
        </div>
    </nav>
    <div class="clr"></div>
</header>