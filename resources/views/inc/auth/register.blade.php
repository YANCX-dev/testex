<div class="login-wrapper">
    <h3 class="text-center form-title">Регистрация</h3>
    <form action="{{route('register')}}" method="post" class="d-flex flex-column border p-2">
        @csrf
        <p class="text-center fs-5">Введите ваше Имя:</p>
        <input type="text" name="userName">
        <p class="text-center fs-5">Введите вашу Фамилию:</p>
        <input type="text" name="userSurname">
        <p class="text-center fs-5">Введите дату вашего рождения:</p>
        <input type="date" name="userBirthDate">
        <p class="text-center fs-5">Введите ваш e-mail:</p>
        <input type="text" name="userEmail">
        <p class="text-center fs-5">Введите ваш пароль:</p>
        <input type="password" name="password">
        <p class="text-center fs-5">Повторите пароль:</p>
        <input type="password" name="repeatPassword">
        @error("registerError")
        <p class="error">{{$message}}</p>
        @enderror
        <button type="submit" class="btn btn-dark mt-2">Зарегистрироваться!</button>
    </form>
</div>
