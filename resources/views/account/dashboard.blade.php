@extends('layouts.main')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">Личный кабинет</h1>
    
    <div class="grid md:grid-cols-4 gap-6">
        <!-- Сайдбар -->
        <aside class="bg-white p-4 rounded-lg shadow">
            <nav class="space-y-2">
                <a href="{{ route('business.create') }}" 
                   class="block px-3 py-2 bg-blue-100 text-blue-700 rounded">
                    + Создать бизнес
                </a>
                @foreach($businesses as $business)
                    <a href="#" class="block px-3 py-2 hover:bg-gray-100 rounded">
                        {{ $business->title }}
                    </a>
                @endforeach
            </nav>
        </aside>
        
        <!-- Основной контент -->
        <div class="md:col-span-3">
            @if($businesses->isEmpty())
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <p class="mb-4">У вас пока нет зарегистрированных бизнесов</p>
                    <a href="{{ route('business.create') }}" 
                       class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        Создать первый бизнес
                    </a>
                </div>
            @else
                <!-- Здесь можно вывести статистику или последние туры -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-xl font-semibold mb-4">Ваши бизнесы</h2>
                    <!-- ... -->
                </div>
            @endif
        </div>
    </div>
</div>
@endsection