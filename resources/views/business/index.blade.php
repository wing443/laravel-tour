@extends('layouts.main') @section('title', 'Easy Tour - Business ')
@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Шапка с шагом -->
    <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 mb-8 rounded">
        <div class="flex items-start">
            <div class="flex-shrink-0 bg-indigo-500 text-white rounded-full h-8 w-8 flex items-center justify-center mr-4 font-medium">
                1
            </div>
            <div>
                <p class="text-lg font-medium text-gray-800">Первый шаг - выберите поставщика услуг</p>
                <p class="text-gray-600 mt-1">Выберите подходящего тур.агента из списка ниже</p>
            </div>
        </div>
    </div>

    <!-- Список бизнесов -->
    <div class="mb-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Доступные провайдеры</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($businesses as $business)
                <a href="{{ $business->url }}" class="block group">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 h-full flex flex-col border border-gray-100">
                        <!-- Placeholder для изображения бизнеса -->
                        <div class="bg-gray-100 h-48 w-full flex items-center justify-center">
                            <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        
                        <div class="p-6 flex-grow">
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-xl font-semibold text-gray-800 group-hover:text-indigo-600 transition-colors">
                                    {{ $business->title }}
                                </h3>
                                @if($business->verified)
                                    <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded-full flex items-center">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                        Verified
                                    </span>
																@else 
																	<span class="bg-yellow-200 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full flex items-center">
																			<svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-venetian-mask-icon lucide-venetian-mask"><path d="M18 11c-1.5 0-2.5.5-3 2"/><path d="M4 6a2 2 0 0 0-2 2v4a5 5 0 0 0 5 5 8 8 0 0 1 5 2 8 8 0 0 1 5-2 5 5 0 0 0 5-5V8a2 2 0 0 0-2-2h-3a8 8 0 0 0-5 2 8 8 0 0 0-5-2z"/><path d="M6 11c1.5 0 2.5.5 3 2"/></svg>
																			New
																	</span>
                                @endif
                            </div>
                            
                            @if($business->description)
                                <p class="text-gray-600 mb-4 line-clamp-2">{{ $business->description }}</p>
                            @endif
                            
                            <div class="flex items-center text-sm text-gray-500 mt-auto">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                Присоединился {{ $business->created_at->format('d.m.Y') }}
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection