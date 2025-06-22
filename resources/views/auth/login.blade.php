@extends('layouts.main')

@section('content')
<div class="w-96 mx-auto my-12 p-8 bg-white rounded-xl shadow-md">
    <h1 class="text-2xl font-bold text-center mb-6">Вход в аккаунт</h1>
    
    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf
        
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input id="email" type="email" name="email" required 
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
        </div>
        
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Пароль</label>
            <input id="password" type="password" name="password" required 
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
        </div>
        
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <input id="remember" name="remember" type="checkbox" 
                       class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                <label for="remember" class="ml-2 block text-sm text-gray-700">
                    Запомнить меня
                </label>
            </div>
            
            <div class="text-sm">
                <a href="#" class="font-medium text-blue-600 hover:text-blue-500">
                    Забыли пароль?
                </a>
            </div>
        </div>
        
        <div>
            <button type="submit" 
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gradient-to-r from-blue-400 to-purple-500 hover:from-blue-500 hover:to-purple-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300">
                Войти
            </button>
        </div>
    </form>
    
    <div class="mt-4 text-center">
        <a href="{{ route('register') }}" class="text-sm text-blue-600 hover:text-blue-800">
            Нет аккаунта? Зарегистрироваться
        </a>
    </div>
</div>
@endsection