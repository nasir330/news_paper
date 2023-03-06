<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsData;

class NewsDataController extends Controller
{
    public function index()
    {
        $firstRow = NewsData::where('rowNo',1)->get();
        $secondtRow = NewsData::where('rowNo',2)->get();
        $thirdRow = NewsData::where('rowNo',3)->get();
        return view('main',['firstRow'=>$firstRow, 'secondtRow'=>$secondtRow, 'thirdRow'=>$thirdRow]);
    }
    public function upload1(Request $request)
    {
        //return $request->all();
       $data = new NewsData;
       $data->rowNo = $request->row;
       $url = "storage/";
       $news = $request->file('news');
       $news_name = $news->getClientOriginalName();      
       $news_storage = $news->storeAs("public/uploads", $news_name);
       $news_path = 'storage/uploads/'.$news_name;
       $data->newsData = $news_path;
        $data->save();

        session()->flash('success', 'news uploaded successfully..!!');
        return redirect()->back();
    }
    public function upload2(Request $request)
    {
        //return $request->all();
       $data = new NewsData;
       $data->rowNo = $request->row;
       $url = "storage/";
       $news = $request->file('news');
       $news_name = $news->getClientOriginalName();      
       $news_storage = $news->storeAs("public/uploads2", $news_name);
       $news_path = 'storage/uploads2/'.$news_name;
       $data->newsData = $news_path;
        $data->save();

        session()->flash('success', 'news uploaded successfully..!!');
        return redirect()->back();
    }
    public function upload3(Request $request)
    {
        //return $request->all();
       $data = new NewsData;
       $data->rowNo = $request->row;
       $url = "storage/";
       $news = $request->file('news');
       $news_name = $news->getClientOriginalName();      
       $news_storage = $news->storeAs("public/uploads3", $news_name);
       $news_path = 'storage/uploads3/'.$news_name;
       $data->newsData = $news_path;
        $data->save();

        session()->flash('success', 'news uploaded successfully..!!');
        return redirect()->back();
    }
}
