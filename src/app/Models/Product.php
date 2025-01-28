<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'condition_id',
        'img',
        'price',
        'description'
    ];


    public function categories()
    {
        return $this->belongsToMany(Category::class,'product_category','product_id','category_id',);
    }

    public function checkCategory($category,$product)
    {
        $category_id = $category->id;
        $product_id = $product->id;

        $product_data = Product::find($product_id);
        $productCategories = $product_data->categories;

        foreach ($productCategories as $productCategory)
        {
            if($productCategory->id == $category_id)
            {
                $returnTxt ="yes";

                return $returnTxt;
            }
        }

        if($productCategory->id != $category_id)
        {
            $returnTxt ="no";

            return $returnTxt;
        }
    }

    public function condition()
    {
        return $this->belongsTo(Condition::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function favorites()
    {
        return $this->hasMany(User_Favorite_Product::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'user_id','product_id','comments','user__favorite__products','user__purchase__logs');
    }

}
