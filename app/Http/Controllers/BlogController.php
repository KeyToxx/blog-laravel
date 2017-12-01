<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class BlogController extends Controller
{
    public function liste()
    {
    	$article = new Article;
    	$articles = $article->get();

    	$titre_page = 'toto';
    	// $params = [
    	// 	'articles'   => $articles,
    	// 	'titre_page' => $titre_page
    	// ];
    	return view('blog.liste', compact('articles', 'titre_page'));
        // return $this->belongsTo('App\User');
    }
}
