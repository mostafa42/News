<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Str;

use function GuzzleHttp\Promise\all;

class NewsController extends Controller
{
    public function getArticlesForUser(Request $request){

        $allArticles = News::all() ;

        return response()->json([ 'articles' => $allArticles ]);
    }

    public function index()
    {
        $allArticles = News::all() ;
        $data = response()->json([ 'articles' => $allArticles ]);
        return $data ;
    }
//$firstdesc=substr($request->description, 0, 30);
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

        $msg =  __("trans.addSucessAlert1") ;
        return response()->json(['message' => $msg]);


    }


    public function show(Request $request , $id)
    {
        $thisArticle = News::find($id);
        return response()->json([ 'data' => $thisArticle ]);
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
        $msg =  __("trans.updateSuccessAlert1") ;
        return response()->json(['message' => $msg]);
    }

    public function destroy($id)
    {
        $thisArticle = News::find($id);
        $thisArticle->delete();
        $msg =  __("trans.deleteSuccessAlert1") ;
        return response()->json(['message' => $msg]);
    }

    public function getLang(){
        // return view('welcome')->with('data');
        return 'hi' ;
    }
}
