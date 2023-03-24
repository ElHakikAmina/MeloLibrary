<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        $comment = Comment::all();

        $musicx = Music::when(request('category_id'),function($query) {
            $query->where('category_id', request('category_id'));
        })->latest()->get();


        return view('index', compact('categories','musicx','comment'));
    }
    

}

