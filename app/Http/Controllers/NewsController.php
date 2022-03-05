<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Illuminate\Http\Response;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(News::all(), Response::HTTP_OK);
    }

    /**
     * Store a newly created news in storage.
     *
     * @param  \App\Http\Requests\StoreNewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsRequest $request)
    {
        $data = $request->all();

        News::create($data);

        return response()->json([
            'message' => "News successfully created."
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified news.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return response()->json($news, Response::HTTP_OK);
    }

    /**
     * Update the specified news in storage.
     *
     * @param  \App\Http\Requests\UpdateNewsRequest  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $news = $news->fill($request->all());
        return response()->json(['message'=> "News successfully updated."], Response::HTTP_OK);
    }

    /**
     * Remove the specified news from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
