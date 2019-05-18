<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use App\order;
use App\orderdetails;
use Image;
use Session;
use Carbon\carbon;
class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $getdata=order::get();
      return view('backend.blog.index',compact('getdata'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {




      $input=$request->all();



          $this->validate($request,[
            'img' => 'required|max:3024',
          ],[
             'img.required' => 'This field is Required',
          ]);

          // save image in database and folder
           if($request->hasFile('img')){
             $serimg=$request->file('img');
             $serimage_name='blog'.'5_'.time().'.'.$serimg->getClientOriginalExtension();
             Image::make($serimg)->save(base_path('/uploads/blog/'.$serimage_name));
              $input['img']=$serimage_name;
           }


          $insert=blog::create($input);
             if($insert){
              Session::flash('status','value');
                return redirect()->back();
            }else{
              Session::flash('error','value');
                return redirect()->back();
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
      $orderdata=order::where('id',$id)->first();
      $getdata=orderdetails::where('order_id',$id)->get();
      return view('backend.blog.show',compact('getdata','orderdata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        blog::destroy($id);

    }
}
