<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Business;
class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::all(); // Список всех бизнесов
        return view('business.index', compact('businesses'));
    }
    public function show(Business $business)
    {
        $tours = $business->tours()
            ->where('date_start', '>', now())
            ->orderBy('date_start')
            ->paginate(10);

        return view('business.show', [
            'business' => $business,
            'tours' => $tours,
            'metaTitle' => $business->seo_title ?? "$business->name | Наш сервис",
            'metaDescription' => $business->seo_description ?? Str::limit($business->description, 160)
        ]);
    }
}