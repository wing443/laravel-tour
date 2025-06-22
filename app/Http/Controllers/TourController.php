<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Business;
class TourController extends Controller
{
    public function index()
    {
        return to_route('businesses.index'); // ЗАГЛУШКА, В ДАЛЬНЕЙШЕМ - ЭТО СКОРЕЕ ВСЕГО ROUTE ДЛЯ ПОИСКА ПО ТУРАМ 
    }

    public function show(Business $business, Tour $tour)
    {
        return view('tours.show', compact('business', 'tour'));
    }
}