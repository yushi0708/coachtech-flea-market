<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Condition;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function getProducts()
    {
        $products = Product::all();

        return view('item', compact('products'));
    }
    public function getDetail($product_id)
    {
        $product = Product::with('condition')->find($product_id);

        $categories = Category::all();

        $users = User::all();

        $comments = Comment::with('product','user')->where('product_id',$product_id)->get();

        $comment_counts = DB::table('products')
            ->leftJoin('comments', 'products.id', '=', 'comments.product_id')
            ->select('products.id', DB::raw("count(comments.product_id) as count"))
            ->groupBy('products.id')
            ->get();

        $favorite_counts = DB::table('products')
            ->leftJoin('user__favorite__products', 'products.id', '=', 'user__favorite__products.product_id')
            ->select('products.id', DB::raw("count(user__favorite__products.product_id) as count"))
            ->groupBy('products.id')
            ->get();

        return view('detail', compact('product','categories','users','comments','comment_counts','favorite_counts'));
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function mypage_profile()
    {
        return view('mypage-profile');
    }

    public function mypage()
    {
        $products = Product::all();

        return view('mypage', compact('products'));
    }

}
