<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',       
        'image_path',
        'description'
    ];
    public function GetImagePath()
    {
        return env('DOMAIN_URL') . Storage::url($this->image_path);
    }

    /**
    * Relationship to the ProductVariant model.
    */
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
}
