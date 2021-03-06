<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
      'name', 'description', 'admin_id', 'image_path'
    ];

    public function products()
    {
        return $this->hasMany(Product::class,'category_id');
    }
    public function news()
    {
        return $this->hasMany(News::class,'category_id');
    }

    public function admin() {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}
