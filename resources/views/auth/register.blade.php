@extends('layouts.main')

@section('content')
<div class="w-96 mx-auto my-12 p-8 bg-white rounded-xl shadow-md">
    <h1 class="text-2xl font-bold text-center mb-6">Регистрация</h1>
    
    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf
        
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Ваше имя</label>
            <input id="name" type="text" name="name" required 
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
        </div>
        
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
        
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Подтвердите пароль</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required 
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
        </div>
        
        <div>
            <button type="submit" 
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gradient-to-r from-green-400 to-blue-500 hover:from-green-500 hover:to-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300">
                Зарегистрироваться
            </button>
        </div>
    </form>
    
    <div class="mt-4 text-center">
        <a href="{{ route('login') }}" class="text-sm text-blue-600 hover:text-blue-800">
            Уже есть аккаунт? Войти
        </a>
    </div>
</div>
@endsection