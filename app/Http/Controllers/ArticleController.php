<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Datatables;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::latest('id')->get();
        return view('controlPanle.articles.index',compact('articles'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('controlPanle.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'title.ar' => 'required',
            'description.ar' => 'required',
        ]);


        try {
            Article::create([
                'title' => json_encode([
                    'en' => $request->title['en'],
                    'ar' => $request->title['ar'],
                ]),
                'description' => json_encode([
                    'en' => $request->description['en'],
                    'ar' => $request->description['ar'],
                ]),
            ]);

            return redirect()->back()->with('msg', 'Article has been added successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
