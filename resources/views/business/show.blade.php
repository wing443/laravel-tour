@extends('layouts.main')

@section('title', $business->title)

@section('meta')
    <meta property="og:url" content="{{ $business->url }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $metaTitle }}" />
    <meta property="og:description" content="{{ $metaDescription }}" />
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "{{ $business->name }}",
        "url": "{{ $business->url }}",
        "description": "{{ $metaDescription }}"
    }
    </script>
@endsection

@section('content')
<div class="container mx-auto px-4 py-8">
        <div class="bg-green-50 border-l-4 border-green-500 p-4 mb-8 rounded">
        <div class="flex items-start">
            <div class="flex-shrink-0 bg-green-500 text-white rounded-full h-8 w-8 flex items-center justify-center mr-4 font-medium">
                2
            </div>
            <div>
                <p class="text-lg font-medium text-gray-800">Второй шаг - выберите интересующий тур</p>
                <p class="text-gray-600 mt-1">Выберите подходящий тур из списка ниже</p>
            </div>
        </div>
    </div>
    <!-- Заголовок бизнеса -->
    <div class="mb-10">
                <div class="flex flex-row gap-5">
                    <h1 class="text-3xl font-bold text-gray-900">{{ $business->title }}</h1>
                    @if($business->verified)
                    <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded-full flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Verified
                    </span>
                    @else 
                    <span class="bg-yellow-200 text-blue-800 text-xs font-medium px-2.5 py-1.5 rounded-full flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-venetian-mask-icon lucide-venetian-mask"><path d="M18 11c-1.5 0-2.5.5-3 2"/><path d="M4 6a2 2 0 0 0-2 2v4a5 5 0 0 0 5 5 8 8 0 0 1 5 2 8 8 0 0 1 5-2 5 5 0 0 0 5-5V8a2 2 0 0 0-2-2h-3a8 8 0 0 0-5 2 8 8 0 0 0-5-2z"/><path d="M6 11c1.5 0 2.5.5 3 2"/></svg>
                        New
                    </span>
                @endif
                </div>
                
                <p class="mt-3 text-lg text-gray-600 max-w-3xl">{{ $business->description }}</p>

            </div>

    <!-- Список туров -->
            <div class="mb-10">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 pb-2 border-b border-gray-200">Доступные туры</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($tours as $tour)
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-all duration-300 border border-gray-100 hover:border-blue-100 group flex flex-col h-full">
            <!-- Изображение тура -->
            <div class="relative h-56 w-full overflow-hidden flex-shrink-0">
                @if($tour->image)
                    <img src="{{ asset('storage/'.$tour->image) }}" 
                        alt="{{ $tour->title }}"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                @else
                    <div class="w-full h-full bg-gradient-to-br from-blue-50 to-gray-100 flex items-center justify-center">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                @endif
                <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-black/60 to-transparent"></div>
            </div>
            
            <!-- Контент карточки -->
            <div class="flex flex-col flex-1 p-5 justify-between">
                <div>
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold text-gray-900 line-clamp-2">{{ $tour->title }}</h3>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-1 rounded-full whitespace-nowrap ml-2">
                            от {{ $tour->price ? number_format($tour->price, 0, ',', ' ') . ' ₽' : 'Цена по запросу' }} за чел.
                        </span>
                    </div>
                    
                    <!-- Даты -->
                    <div class="flex items-center text-sm text-gray-600 mb-3">
                        <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span>{{ $tour->date_start->format('d.m.Y') }} - {{ $tour->date_end->format('d.m.Y') }}</span>
                    </div>
                    
                    <!-- Описание -->
                    <p class="text-gray-600 mb-5 line-clamp-2">{{ $tour->description }}</p>
                </div>
                
                <!-- Кнопка закреплена снизу -->
                <a href="{{ route('tours.show', [$business, $tour]) }}" 
                class="w-full inline-flex items-center justify-center px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors mt-3">
                    Подробнее
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
            @endforeach
        </div>
    </div>
</div>

    <!-- Пагинация -->
    <div class="mt-8">
        {{ $tours->links() }}
    </div>
</div>
@endsection