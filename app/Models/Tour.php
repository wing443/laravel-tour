<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Tour extends Model
{
    use HasFactory, HasSlug, SoftDeletes;

    protected $fillable = [
        'title',
        'request_slug', // Теперь с подчеркиванием
        'description',
        'business_id',
        'available_places',
        'date_start',
        'date_end',
        'image'
    ];
    protected $casts = [
        'date_start' => 'datetime',
        'date_end' => 'datetime',
    ];
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('request_slug') // Исправлено на подчеркивание
            ->saveSlugsTo('slug')
            ->allowDuplicateSlugs(); // Если нужно разрешить дубликаты
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}