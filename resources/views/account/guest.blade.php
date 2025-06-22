@extends('layouts.main')

@section('content')
<div class="max-w-md mt-50 mx-auto my-12 p-6 bg-white rounded-lg shadow-lg border border-gray-200 transition-transform hover:scale-105 hover:shadow-xl">
    
    <div class="space-y-4">
        <a href="{{ route('register') }}" 
           class="block w-full px-4 py-3 bg-gradient-to-r from-green-400 to-blue-500 text-white font-semibold text-center rounded-lg shadow-md hover:from-green-500 hover:to-blue-600 transition duration-300">
            Зарегистрировать бизнес
        </a>
        
        <a href="{{ route('login') }}" 
           class="block w-full px-4 py-3 border-2 border-blue-600 text-blue-600 font-semibold text-center rounded-lg hover:bg-blue-50 transition duration-300 hover:scale-105 hover:shadow-md">
            Войти в аккаунт
        </a>
    </div>
</div>
@endsection