<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title', 'Easy Tour')</title>
   				@vite('resources/css/app.css')
</head>
<body  style="background-image: url('{{ asset('image/bg.jpg') }}');">
    <div class='main_container'>
			<header>
				<nav class='header__nav border-b-1'>
					<ul class="flex flex-row gap-3 justify-center p-5 md:text-2xl text-xl font-bold">
						<li >
								<div class="relative inline-block text-left ">
									<div class="group">
											<button type="button" class="cursor-pointer p-2 hover:bg-blue-200/50 rounded-2xl transition duration-1000 ease-in-out">
													FAQ
											</button>
											<div
													class=" absolute left-0 w-40 mt-1 origin-top-left bg-white divide-y divide-gray-300 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">
													<div class="py-1">
															<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Для бизнеса</a>
															<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">О работе сайта</a>
													</div>
											</div>
									</div>
								</div>
						</li>
						<li class="cursor-pointer p-2 hover:bg-blue-200/50 rounded-2xl transition duration-1000 ease-in-out"><a href="{{ route('start.index') }}">Главная</a></li>
						<li class="cursor-pointer p-2 hover:bg-blue-200/50 rounded-2xl transition duration-1000 ease-in-out">Контакты</li>
						<li class="cursor-pointer p-2 hover:bg-blue-200/50 rounded-2xl transition duration-1000 ease-in-out"><a href="{{ route('tours.index') }}">Туры</a></li>
						<li class="cursor-pointer p-2 hover:bg-blue-200/50 rounded-2xl transition duration-1000 ease-in-out"><a href="{{ route('businesses.index') }}">Бизнесы</a></li>
					</ul>
				</nav>
			</header>
		  @yield('content')
	  </div>
</body>
</html>