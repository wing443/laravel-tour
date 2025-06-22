<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title', 'Easy Tour')</title>
   				@vite('resources/css/app.css')
</head>
<style>

</style>

<body>
    <div class='main_container'>
        <header>
            <nav class='header__nav'>
                <ul>
                    <li class="relative group">
                        <button type="button" class="flex items-center gap-1">
                            FAQ
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="absolute">
                            <a href="#">Для бизнеса</a>
                            <a href="#">О работе сайта</a>
                        </div>
                    </li>
                    <li><a href="{{ route('start.index') }}">Главная</a></li>
                    <li>Контакты</li>
                    <li><a href="{{ route('businesses.index') }}">Туры</a></li>
                </ul>
            </nav>
        </header>
        @yield('content')
    </div>
</body>
</html>
