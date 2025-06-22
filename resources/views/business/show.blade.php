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
    <!-- Заголовок бизнеса -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">{{ $business->title }}</h1>
        <p class="mt-2 text-lg text-gray-600">{{ $business->description }}</p>
    </div>

    <!-- Список туров -->
    <div class="mb-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Доступные туры</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($tours as $tour)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    @if($tour->image)
                        <img src="{{ asset('storage/'.$tour->image) }}" 
                             alt="{{ $tour->title }}"
                             class="w-full h-48 object-cover">
                    @endif
                    
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $tour->title }}</h3>
                        
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            {{ $tour->date_start->format('d.m.Y') }} - {{ $tour->date_end->format('d.m.Y') }}
                        </div>
                        
                        <p class="text-gray-600 mb-4 line-clamp-3">{{ $tour->description }}</p>
                        
                        <a href="{{ route('tours.show', [$business, $tour]) }}" 
                           class="inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                            Подробнее
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Пагинация -->
    <div class="mt-8">
        {{ $tours->links() }}
    </div>
</div>
@endsection