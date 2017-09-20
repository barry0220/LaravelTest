<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //新闻浏览页面
        $res = DB::table('news')->paginate(5);

        dd('fasdfasdfasdfasdfsd');

        // return view('news.index',['res'=>$res,'num'=>15]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //新闻添加页面
        return view('news.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //新闻添加

        $res = $request -> except(['_token']);

        $data = DB::table('news')->insert($res);

        if ($data) {
            return redirect('/news');
        } else {
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //新闻修改页面
        $res = DB::table('news')->where('id',$id)->first();

        return view('news.edit',['res'=>$res]);
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
        //新闻修改
        $res = $request -> except(['_token','_method']);

        $data = DB::table('news')->where('id',$id)->update($res);

        if ($data) {
            return redirect('/news');
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除

        $res = DB::table('news')->where('id',$id)->delete();

        return back();        
    }
}
