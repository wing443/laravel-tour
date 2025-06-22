@extends('layouts.main') @section('title', 'Easy Tour - Business ')
@section('content')
	<h1>Businesses list</h1>
	@foreach ($businesses as $business)
		<a href="{{ $business->url }}" title="{{ $business->name }}">
					<div>{{ $business->title }}</div>
			</a>
	@endforeach
@endsection