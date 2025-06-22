@extends('layouts.main') @section('title', 'Easy Tour - Tour ')
@section('content')
<div class="my-5">
    <a href="{{ url()->previous() }}" class="text-blue-600 hover:underline flex items-center">
        <!-- Можно добавить иконку стрелки, если хотите -->
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        Назад
    </a>
</div>
<div class="max-w-6xl mx-auto p-8 bg-white flex flex-col md:flex-row gap-8">
  
  <!-- Левая колонка: изображение, цена, места, кнопка -->
  <div class="flex-shrink-0 w-full md:w-1/3">
    <!-- Большое изображение -->
    <div class="w-full h-96 mb-6 overflow-hidden rounded-lg">
        @if($tour->image)
            <img src="{{ asset('storage/'.$tour->image) }}" alt="{{ $tour->title }}" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
        @else
            <div class="w-full h-full bg-gradient-to-br from-blue-50 to-gray-100 flex items-center justify-center">
                <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
            </div>
        @endif
    </div>
    <!-- Цена -->
    <div class="mb-4 text-xl font-semibold text-blue-600">
        {{ $tour->price ? 'от ' . number_format($tour->price, 0, ',', ' ') . ' ₽' : 'Цена по запросу' }}
    </div>
    <!-- Даты -->
    <div class="flex items-center mb-4 text-sm text-gray-600">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
        </svg>
        <span>{{ $tour->date_start->format('d.m.Y') }} - {{ $tour->date_end->format('d.m.Y') }}</span>
    </div>
    <!-- Доступные места -->
    @if(isset($tour->available_places))
        <div class="text-lg font-semibold mb-4">
            Доступных мест: {{ $tour->available_places }} шт.
        </div>
    @endif
    <!-- Кнопка -->
    <a href="{{ url()->previous() }}" class="w-full px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-colors text-center">
        Забронировать
    </a>
  </div>
  
  <!-- Правая колонка: название, описание и т.п. -->
  <div class="w-full md:w-2/3 flex flex-col justify-start">
    <h1 class="text-4xl font-bold mb-4">{{ $tour->title }}</h1>
    <div class="mb-6">
      <h2 class="text-2xl font-semibold mb-3">Описание</h2>
      <p class="text-gray-700">{{ $tour->description }}</p>
    </div>
    <!-- Можно добавить дополнительные разделы, например, отзывы, программу тура и т.п. -->
  </div>
</div>
@endsection