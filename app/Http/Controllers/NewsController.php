<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class NewsController extends Controller
{

    public function index()
    {
        return News::all();
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
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
