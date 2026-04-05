<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sv23810310093Product extends Model
{
    protected $table = 'sv23810310093_products';

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'price',
        'stock_quantity',
        'image_path',
        'status',
        'discount_percent',
    ];

    public function category()
    {
        return $this->belongsTo(Sv23810310093Category::class);
    }
}