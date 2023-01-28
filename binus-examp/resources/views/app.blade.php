<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Binus - Examp</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    {{-- FONT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

</head>

<body>

    <nav class="nav shadow">
        <h4 class="logo">
            Book.com
        </h4>
        <div class="group-link">
            <a class="nav-link" href="/"
                style="{{ request()->is('/') ? 'background-color: #BF5946; color:white;' : '' }}">Home</a>
            <div href="" class="nav-link">
                Category
                <ul class="pop-up">
                    @foreach ($categories as $item)
                    <li><a href="/category/{{ $item->id }}">{{ $item->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <a class="nav-link" href="/publisher"
                style="{{ request()->is('publisher') ? 'background-color: #BF5946; color:white;' : '' }}">Publisher</a>
            {{-- @if (Auth::user()->role == 'admin') --}}
                  <a class="nav-link" href="/add_book"
                    style="{{ request()->is('add_book') ? 'background-color: #BF5946; color:white;' : '' }}">Tambah Buku</a>
            {{-- @endif --}}
            <a class="nav-link" href="/contact"
                style="{{ request()->is('contact') ? 'background-color: #BF5946; color:white;' : '' }}">Contact</a>

        </div>
        <a class="nav-link text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </nav>

    

    @yield('content')

    <footer style="position: fixed; bottom:0; width:100%; background-color:#eee" class="shadow-lg">
        <div class="footer-copyright text-center py-3">© 2023 Copyright:
            <a href="/" class="logo">Book.com</a>
        </div>
    </footer>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>
