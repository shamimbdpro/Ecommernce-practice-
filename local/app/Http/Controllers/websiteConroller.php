<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use App\commentparent;
use App\commentchild;
use App\orderdetails;
use App\product;
use App\cart;
use App\order;
use Image;
use Session;
use Carbon\carbon;
use Auth;

class websiteConroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
      $products=product::where('status',1)->get();
      return view('frontend.index',compact('products'));

    }


    public function single_product($id){
		 $single_product=product::where('status',1)->find($id);
		  return view('frontend.single-product',compact('single_product'));
	}


    public function single_post($id){


    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }



   public function commmentparent(Request $request){

      $input= $request->all();
      $insert=commentparent::create($input);
         if($insert){
          Session::flash('status','value');
            return redirect()->back();
        }else{
          Session::flash('error','value');
            return redirect()->back();
        }


   }

 public function commentchild(Request $request){

   $input= $request->all();
   commentchild::create($input);
     return redirect()->back();

 }


public function checkout(){


  if(auth::check()){
    $cartinfo=cart::where('user_id',Auth::user()->id)->where('ip_address',request()->ip())->get();
  }else{
    $cartinfo=cart::where('ip_address',request()->ip())->get();
  }
      return view('frontend.checkout',compact('cartinfo'));
}


public function confirm(Request $request){

$paypalpay=$request->input('payment_type');
 if($paypalpay=='paypal'){
   return view('frontend.payment');
 }

 $input=$request->all();
 $carts=cart::where('ip_address',request()->ip())->get();

  $lastinsertid=order::create($input);
   foreach($carts as $orderdetails){
       $data=new orderdetails;
       $data->order_id=$lastinsertid->id;
       $data->title=$orderdetails->product->title;
       $data->final_price=$orderdetails->product->final_price;
       $data->product_qty=$orderdetails->product_qty;
       $data->save();
    cart::find($orderdetails->id)->where('ip_address',request()->ip())->delete();
    }


    return redirect(route('Thankyou'));



}


public function Thankyou(){


      if(auth::check()){
        $cartinfo=cart::where('user_id',Auth::user()->id)->where('ip_address',request()->ip())->get();
      }else{
        $cartinfo=cart::where('ip_address',request()->ip())->get();
      }
          return view('frontend.confirmation',compact('cartinfo'));


  }
}
