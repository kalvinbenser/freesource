<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Payment;
use App\Models\Cart;
use App\Models\Contactus;
use App\Models\Moreimage;
use App\Models\User;

use Illuminate\Support\Facades\Auth;


class ClientController extends Controller


{
    public function index(){

        //$data['javas'] =Product::where('category','matlab')->get();
        $data['javas'] =Product::all()->take(6);

        return view('client.index',$data);
    }

     public function user_dashboard(){
         $user_id=Auth::user()->id;

         $data['user_data']=User::where('id',$user_id)->first();

         return view('client.user_dashboard',$data);
     }

    // public function contact_us(){
    //     return view('client.contact_us');
    // }


    public function how_to_order(){
         return view('client.how_to_order');
    }


    public function privacy_policy(){
        return view('client.privacy_policy');
    }


    public function request_for_code(){
        return view('client.request_for_code');
    }


    public function terms_and_condition(){
        return view('client.terms_and_condition');
    }

    public function matlab(){
        $data['javas'] =Product::where('category','matlab')->Paginate(9);

        return view('client.matlab',$data);
    }
    public function java(){
        $data['javas'] =Product::where('category','java')->Paginate(9);
        return view('client.java',$data);
    }
    public function python(){
        $data['javas'] =Product::where('category','python')->Paginate(9);
        return view('client.python',$data);
    }

    public function product($id){

      $data['more_img']=Moreimage::where('product_id',$id)->get();
      $data['pro']=Product::where('id',$id)->first();
      $data['product']=Product::all();
      $data['carts']=Cart::all();
      return view('client.product',$data);
    }
    //contact us


public function contact_us(){



    return view('client.contact_us');

  }

  public function send_contact(Request $request){

    $request->validate([

        'name'=>'required',
        'email'=>'required',
        'message'=>'required',
    ]);

      $name=$request->input('name');
      $email=$request->input('email');
      $message=$request->input('message');

      $data=[
        'name'=>$name,
        'email'=>$email,
        'message'=>$message,
      ];
      Contactus::create($data);
      return redirect()->back()->with('message','send successfull');

  }

//cart

   public function cart(){
    $user_id=Auth::user()->id;

    $user_name=Auth::user()->name;
    $data['carts']=Cart::where('user_id',$user_id)->get();
    $data['no_cart']=Cart::where('user_id',$user_id)->count();
      $data['add_price']=Cart::where('user_id',$user_id)->sum('price');


       return view('client.cart',$data)->with('no', 1);
   }



  public function add_cart($id){

    $product=Product::where('id',$id)->first();

    $user_id=Auth::user()->id;

    $user_name=Auth::user()->name;




    $data=[
      'name'=>$product->product_name,
      'category'=>$product->category,
      'title'=>$product->title,
      'price'=>$product->price,
      'image'=>$product->image,
      'article'=>'no data',
      'user_id'=>$user_id,
      'user_name'=>$user_name,
      'category_id'=>$product->category_id,
      'prod_id'=>$product->id,
    ];

    Cart::create($data);
    return redirect()->back()->with('message','1 item added to cart ');

  }


  public function delete_cart($id){


    Cart::where('id',$id)->delete();

    return redirect()->back()->with('message','removed 1 item to cart');

  }


  // check out


public function checkout($id){

  $data['checkout']=cart::where('id',$id)->first();
  // $user_id=Auth::user()->id;

  // $user_name=Auth::user()->name;

  // $data['no_cart']=Cart::where('user_id',$user_id)->count();
  // $data['add_price']=Cart::where('user_id',$user_id)->sum('price');


  // $data['carts']=Cart::where('user_id',$user_id)->get();

  return view('client.checkout',$data);
}


//search


public function search(Request $req){

  $search_text=$req->ser;


 if(empty($search_text)){
     return redirect("/");
  }
   else{
     $data['page'] =Product::where('title','LIKE','%'.$search_text.'%')->paginate(9);

   }


  //$data['page'] =Product::where('name','LIKE','%'.$search_text.'%')->paginate(3);

  $from=1;
$to=5;
$data['carts']=Cart::all();

$data['widgets']=Product::whereBetween('id', [$from, $to])->get();
 return view("client.search",$data);

}

public function myorder(){

  $user_id=Auth::user()->id;
  $order=Payment::where('user_id',$user_id)->get();


  $product = Product::join('payments', 'payments.prod_id', '=', 'products.id')
                      ->get(['products.product_name','products.price', 'payments.status','payments.prod_id']);
                // ->get();



  return view('checkout.myorder',compact('order','product'))->with('no',1);

}

public function myorder_view($id){
  $data['product'] = Product::where('id',$id)->first();
  $data['images']=Moreimage::where('product_id',$id)->get();

  return view('checkout.myorder_view',$data);
}

// $users = User::join('posts', 'posts.user_id', '=', 'users.id')
//               ->join('comments', 'comments.post_id', '=', 'posts.id')
//               ->get(['users.*', 'posts.descrption']);




public function profile_view(){

  $user_id=Auth::user()->id;
  $data=  User::where('id',$user_id)->first();

  return view('checkout.profile',compact('data'));
}
}
