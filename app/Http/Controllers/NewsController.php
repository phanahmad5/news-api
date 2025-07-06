<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index() {
        return response()->json(News::all());
    }

    public function store(Request $request) {
        $news = News::create($request->all());
        return response()->json($news, 201);
    }

    public function update(Request $request, $id) {
        $news = News::findOrFail($id);
        $news->update($request->all());
        return response()->json($news);
    }

    public function destroy($id) {
        News::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
