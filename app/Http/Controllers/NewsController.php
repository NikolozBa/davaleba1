<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function loadnews($page){

        $news = new NewsModel();


        if($page > $news->getPages() || $page < 1){
            return view('wrongPage');
        }

        $text = $news->getNews()[$page-1]['text'];

        $data = [

            'text' => $text,
            'title' => $news->extractNewsName($text),
            'pages' => $news->getPages(),
            'currentPage'=> $page,

        ];

        if($page > $data["pages"] || $page < 1){
            return view('wrongPage');
        }


        return view('news', $data);

    }


}
