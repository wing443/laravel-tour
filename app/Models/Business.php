<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Business extends Model
{
    use HasFactory;
    use HasSlug, SoftDeletes;

    protected $fillable = ['title', 'title_slug', 'description', 'verified'];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate()
            ->slugsShouldBeNoLongerThan(50);
    }

    // Для генерации полного URL
    public function getUrlAttribute(): string
    {
        return route('business.show', $this);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    // Связь с турами
    public function tours()
    {
        return $this->hasMany(Tour::class)->whereNull('deleted_at');
    }
}