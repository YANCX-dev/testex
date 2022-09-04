<div class="login-wrapper">
    <h3 class="text-center form-title">Вход</h3>
    <form action="{{route('login')}}" method="post" class="d-flex flex-column border p-2">
        @csrf
        <p class="text-center fs-5">Введите e-mail:</p>
        <input type="text" name="login">
        <p class="text-center fs-5">Введите пароль:</p>
        <input type="password" name="password">
        @error("loginError")
        <p class="error">{{$message}}</p>
        @enderror
        <button type="submit" class="btn btn-dark mt-2">Войти</button>
    </form>
</div>
