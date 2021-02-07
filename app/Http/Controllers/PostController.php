<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PostModel;
use App\PostInformationModel;
use App\CategorieModel;
use App\TagModel;
use App\TagPostModel;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PostModel::all();
        $tag =  TagModel::all();
        return view('home', compact('data', 'tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = TagModel::all();
        $category = CategorieModel::all();

        return view('create', compact('tag', 'category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $creaPost = new PostModel();
        $creaPost->title = $request->input('inputPostTitle');
        $creaPost->author = $request->input("inputPostAuthor");
        $creaPost->category_id = $request->input("inputPostCategory");
        $creaPost->save();
        

        $creaPostInf = new PostInformationModel();
        $creaPostInf->post_id = $creaPost->id;
        $creaPostInf->description = $request->input("inputPostDesc");
        $creaPostInf->slug = Str::slug($creaPost->title);
        $creaPostInf->save();

        $creaPost->tag();
        return view('succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data = PostModel::find($id);
         return view('detail', compact('data'));
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     
        $data = PostModel::find($id);
        $categories = CategorieModel::all();
        $tags = TagModel::all();
        return view('edit', compact('data', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updatePost = PostModel::find($id);
        $updatePost->title = $request['inputPostTitle'];
        $updatePost->author = $request["inputPostAuthor"];
        $updatePost->category_id = $request["inputPostCategory"];
        $updatePost->save();

        
        $updatePostInformation = PostInformationModel::where('post_id', $updatePost->id);
        $updatePostInformation->description = $request["inputPostDesc"];
        $updatePostInformation->slug = "prova-slug";
        $updatePostInformation->save();

        
        $tags = $request["inputPostTag"];
        foreach ($tags as $tag) {
            $updatePost->Tag()->attach($tag);
        }

        $data = PostModel::find($updatePost->id);
        return view('edit', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($data)
    {
        $data->info()->delete();
        $data->tag()->detach();
        $data->delete;

        return redirect()->route('home');
    }
}
