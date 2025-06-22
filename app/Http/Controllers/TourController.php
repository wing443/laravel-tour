<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Business;
class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::all(); // Список всех туров
        return view('tours.index', compact('tours'));
    }

    public function show(Business $business, Tour $tour)
    {
        return view('tours.show', compact('business', 'tour'));
    }
}