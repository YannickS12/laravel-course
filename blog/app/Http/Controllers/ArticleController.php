<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {

        // 1- Récupérer depuis la BDD les articles
        $articles = [
            "article2" => [
                [
                    "id" => 1,
                    "title" => "Architecture MVC",
                    "content" => "Loren Ipsum MVC ...",
                    "user_id" => 3
                ],
                [
                    "id" => 2,
                    "title" => "Tailwind CSS",
                    "content" => "Loren Ipsum Tailwind ...",
                    "user_id" => 1
                ]
            ]
        ];
        // 2- Retourner la vue avec les articles
        return view('articles.index', $articles);
    }

    public function show(string $id): View
    {
        $articles = [
            "article2" => [
                [
                    "id" => 1,
                    "title" => "Architecture MVC",
                    "content" => "Loren Ipsum MVC ...",
                    "user_id" => 3
                ],
                [
                    "id" => 2,
                    "title" => "Tailwind CSS",
                    "content" => "Loren Ipsum Tailwind ...",
                    "user_id" => 1
                ]
            ]
        ];
        // 2- Retourner la vue avec l'article correspondant à l'id
        //        $article = $articles::find($id);

        foreach ($articles['article2'] as $article) {
            if ($article["id"] == $id) {
                return view('articles.show', ['article' => $article]);
            }
        }
    }
}
