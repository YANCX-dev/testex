<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="/"><img src="{{asset('storage/logo.png')}}" alt="logo" class="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            @guest()
                <li class="nav-item">
                    <a class="nav-link" href="#">Видит только не авторизировонный пользователь</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Видит только не авторизировонный пользователь</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Видит только не авторизировонный пользователь</a>
                </li>
            @endguest
            @auth()
                <li class="nav-item">
                    <a class="nav-link" href="{{'logout'}}">Выход</a>
                </li>
            @endauth
        </ul>
    </div>
</nav>

