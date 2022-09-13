<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">IPACO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login.view') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        "register"
                        {{-- <a class="nav-link" href="{{ route('register') }}">Register</a> --}}
                    </li>
                @else
                    <li class="nav-item">
                        "logout"
                        {{--<a class="nav-link" href="{{ route('logout.view') }}">Logout</a>--}}
                    </li>
                    <li>
                        <a class="profile-pic" href="#">
                            <img src="https://therichpost.com/wp-content/uploads/2021/03/avatar2.png" alt="user-img" width="36"
                                class="img-circle">
                            <span class="font-medium">{{ \Illuminate\Support\Facades\Auth::user()->first_name }}</span>
                        </a>
                    </li>

                @endguest
            </ul>

        </div>
    </div>
</nav>
