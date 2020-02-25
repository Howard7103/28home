<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    //
    public function news_homepage (){

        $type=Session::get("type");
        if($type == 1){

            $news = News::where("news_type","=","1")
                ->orwhere( "news_type","=","2")
                ->get();

        } else if ($type == 2){

            $news= News::where("news_type","=","1")
                ->orwhere( "news_type","=","3")
                ->get();

        }else  ($type == 3){

            $news= News::all()

        };

        $binding =[
            'News' => $news
        ];

        return view('building.news.news_all', $binding);

    }
    public function news_create (){

        return view('/building/news/news_create');

    }

    public function news_create_save (Request $request){

        $validator = Validator::make($request -> all(),[
            'news_photo' => 'required|image|mimes:jpeg,png,jpg',
            'news_title' => 'required | max:20' ,
            'news_content' => 'required | max:500' ,
            'news_display_start_date' => 'required|date|',
            'news_display_end_date' => 'required|date|',
        ]);

        $path = $request->file('news_photo')->store('img');

        if ($validator->fails()){

            return redirect('/admin/news_create')
                ->withErrors($validator)
                ->withInput();

        }

        $news = new News();
        $news -> news_title = $request['news_title'];
        $news -> news_content = $request['news_content'];
        $news -> news_photo = $path;
        $news -> news_display_start_date = $request['news_display_start_date'];
        $news -> news_display_end_date = $request['news_display_end_date'];
        $news -> news_status = $request['news_status'];
        $news -> news_type = $request['news_type'];
        $news->save();

        return redirect('/admin/news');

    }

    public function news_update ($news_id){

        $news = News::where('news_id', '=', $news_id)->first();
        $binding = [
            'News' => $news
        ];

        return view('/building/news/news_update', $binding);

    }

    public function news_update_save ($news_id, Request $request)
    {

        $validator = Validator::make($request -> all(),[
            'news_title' => 'required | max:20' ,
            'news_content' => 'required | max:500',
            'news_display_start_date' => 'required|date|',
            'news_display_end_date' => 'required|date|',
        ]);
        $path = $request->file('news_photo')->store('img');

        if ($validator->fails()){

            return redirect('/admin/news/{news_id}'.$news_id)
                ->withErrors($validator)
                ->withInput();

        }

        $news = News::where('news_id', '=', $news_id)
            ->update([
                'news_title' => $request['news_title'],
                'news_content' => $request['news_content'],
                'news_photo' => $path,
                'news_display_start_date' => $request['news_display_start_date'],
                'news_display_end_date' => $request['news_display_end_date'],
                'news_status' => $request['news_status'],
                'news_type' => $request['news_type']
            ]);

        return redirect('/admin/news');
    }

    public function news_delete($news_id){

        $news= News::where('news_id','=',$news_id)
        ->delete();

        return redirect('/admin/news');

    }
}
