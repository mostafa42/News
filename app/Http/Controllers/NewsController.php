<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class NewsController extends Controller
{
    public function getArticlesForUser(){
        $allArticles = News::all() ;
        return response()->json([ 'articles' => $allArticles ]);
    }

    public function index()
    {
        $allArticles = News::all() ;
        $data = response()->json([ 'articles' => $allArticles ]);
        return $data ;
    }

    public function store(News $news, Request $request)
    {
        $imageName = time().'.'.$request->file('upload_file')->guessExtension();
        $final = $request->upload_file->move(public_path('uploades'),$imageName);

        $newRecord = new News ;
        $newRecord->image = $imageName ;
        $newRecord->title = $request->title ;
        $newRecord->description = $request->description ;
        $newRecord->category = $request->category ;

        $newRecord->save();

        return response()->json([ 'message' => 'done' ]);


    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $allArticles = News::find($id);
        return response()->json([ 'articles' => $allArticles ]);
    }

    public function update(Request $request, $id)
    {
        News::where('id',$id)->update([
            'image'=> $request->image ,
            'title'=> $request->title ,
            'description'=> $request->description ,
            'category'=> $request->category ,
        ]);
        return response()->json([ 'message' => "Article is updated successfully" ]);
    }

    public function destroy($id)
    {
        $thisArticle = News::find($id);
        $thisArticle->delete();
        return response()->json([ 'msg' => 'This article is deleted successfully' ]);
    }


}
