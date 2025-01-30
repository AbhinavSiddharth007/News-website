<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        // Fetch news from an external API (e.g., News API)
        $newsApiUrl = 'https://newsapi.org/v2/top-headlines?country=us&apiKey=YOUR_API_KEY';
        
        $response = \Http::get($newsApiUrl);
        
        // Decode the JSON response
        $newsData = $response->json();
        
        // Pass the data to the view
        return view('news.index', ['articles' => $newsData['articles']]);
    }
}
