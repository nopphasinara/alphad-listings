@auth()
    <h2 class="h5">{{ Auth::user()->name }}</h2>

    <ul class="nav flex-column mb-3">
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link text-secondary" href="{{route('users.edit')}}">edit personal info<i class="fa fa-user-edit"></i></a>--}}
        {{--</li>--}}
        <a class="nav-link text-secondary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            logout<i class="fa fa-user-slash"></i>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </ul>

@endauth

@guest()
    <ul class="nav flex-column mb-3">
        <li class="nav-item">
            <a class="nav-link text-secondary" href="{{ route('login') }}">login<i class="fa fa-user-lock"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-secondary" href="{{ route('register') }}">register<i class="fa fa-user-plus"></i></a>
        </li>
    </ul>
@endguest
