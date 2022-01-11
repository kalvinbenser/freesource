<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Contactus;
use App\Models\Moreimage;
use App\Models\Payment;


class AdminController extends Controller
{
  function test(){
    return view('admin.test');
  }
    public function index(){

      $data['total_payment']=Payment::all()->sum('amount');
      $data['total_product']=Product::all()->count('id');
      $data['total_sales']=Payment::all()->count('id');
      $data['total_user']=User::all()->count('id');

        return view('admin.dashboard',$data);
    }

    public function user_profile_view(){
        return view('admin.user_profile_view');
    }

    public function get_user(){
         $values=User::all();

         return view('admin.users_view',compact('values'));
    }

   public function products_view(){
      $products=Product::all();
       return view('admin.products_view',compact('products'));
   }

   public function add_product_view(){
         $category=Category::all();
       return view('admin.add_product_view',compact('category'));
   }




      public function edit_product_view($id){
          $update=Product::where('id',$id)->first();
          $category=Category::all();
          return view('admin.edit_product_view',compact(['update','category']));
      }

     public function view_product($id){
         $data['product'] = Product::where('id',$id)->first();
         $data['images']=Moreimage::where('product_id',$id)->get();



        return view("admin.view_product",$data);
     }
   public function create_product(Request $request){
     $request->validate([
          'image'=>'required|mimes:jpg,jpeg,png|max:5000',
          'name'=>'required',
          'cat'=>'required',
          'title'=>'required',
          'price'=>'required',
          'des'=>'required',
          'input'=>'required',
          'output'=>'required',
          'tags'=>'required',
          'ref'=>'required'
      ]);

     $name=$request->input('name');
     $category_id=$request->input('cat');
     $get_category=Category::where('id',$category_id)->first();


     $title=$request->input('title');
     $price=$request->input('price');
     $image=$request->input('image');
     $des=$request->input('des');
     $input=$request->input('input');
     $output=$request->input('output');
     $tags=$request->input('tags');
     $ref=$request->input('ref');
     $imageName = time().'.'.$request->file('image')->guessExtension();

     $data=[
       'product_name'=>$name,
       'category'=>$get_category->name,
       'title'=>$title,
       'price'=>$price,
       'image'=>$imageName,
       'description'=>$des,
       'input'=>$input,
       'output'=>$output,
       'tags'=>$tags,
       'reference'=>$ref,
       'category_id'=>$category_id,
     ];


      $request->image->move(public_path('images/products'),$imageName);

     Product::create($data);
     return redirect('/products_view')->with('message','product added successfull');

   }



    public function delete_product($id){
           $product =Product::where('id',$id)->first();


           if(file_exists(public_path('images/products/'.$product->image))){
           unlink(public_path('images/products/'.$product->image));

            Product::where('id',$id)->delete();
           }


            return redirect()->back()->with('message','delete successfull');
    }

    public function update_product(Request $request){

          $imageName=$request->file('image');
          //dd( $imageName);
          if($imageName != "" ){

            $id=$request->input('id');
            $name=$request->input('name');
            $category=$request->input('cat');
            $title=$request->input('title');
            $price=$request->input('price');
            $image=$request->input('image');
            $des=$request->input('des');
            $input=$request->input('input');
            $output=$request->input('output');
            $tags=$request->input('tags');
            $ref=$request->input('ref');
            $imageName = time().'.'.$request->file('image')->guessExtension();

            $data=[
              'product_name'=>$name,
              'category'=>$category,
              'title'=>$title,
              'price'=>$price,
              'image'=>$imageName,
              'description'=>$des,
              'input'=>$input,
              'output'=>$output,
              'tags'=>$tags,
              'reference'=>$ref,
            ];

             $product=Product::where('id',$id)->first();

             if(file_exists(public_path('images/products/'.$product->image))){
             unlink(public_path('images/products/'.$product->image));
             Product::where('id',$id)->update($data);
             $request->image->move(public_path('images/products'),$imageName);
             }




            return redirect('/products_view')->with('message','product update successfull');


          }
          else{
           $id=$request->input('id');
           $name=$request->input('name');
           $category=$request->input('cat');
           $title=$request->input('title');
           $price=$request->input('price');
           //$image=$request->input('image');
           $des=$request->input('des');
           $input=$request->input('input');
           $output=$request->input('output');
           $tags=$request->input('tags');
           $ref=$request->input('ref');
           //$imageName = time().'.'.$request->file('image')->guessExtension();

           $data=[
             'product_name'=>$name,
             'category'=>$category,
             'title'=>$title,
             'price'=>$price,
             //'image'=>$imageName,
             'description'=>$des,
             'input'=>$input,
             'output'=>$output,
             'tags'=>$tags,
             'reference'=>$ref,
           ];

           Product::where('id',$id)->update($data);


           return redirect('/products_view')->with('message','product update successfull');

          }


    }

//category


public function category_view(){
   $category=Category::all();
  return view('admin.category_view',compact('category'));
}

public function create_category(Request $request){

  $validate=$request->validate([
          'name'=>'required',
  ]);

  $name=$request->input('name');

  $data=[
    'name'=>$name,
  ];
 Category::create($data);

 return redirect()->back()->with('message','create category successfull');
}

public function edit_category_view($id){
  $data['update']=Category::where('id',$id)->first();
   return view('admin.edit_category_view',$data);
}

public function update_category(Request $request){
  $id = $request->input('id');
  $name=$request->input('name');
  $data = [
    'name'=>$name,
  ];
  Category::where('id',$id)->update($data);
  return redirect()->back()->with('message','category name update successfull');
}

public function delete_category($id){
  Category::where('id',$id)->delete();

  return redirect()->back()->with('message','Category Name deleted');

}

//reports


public function reports_view(){
  $data['contact']=Contactus::all();
  return view('admin.reports_view',$data);
}

public function payments_view(){
  // $data['payments']=Payment::all();
  //
  // $user_id=Auth::user()->id;
  // $order=Payment::where('user_id',$user_id)->get();


  $payments = Product::join('payments', 'payments.prod_id', '=', 'products.id')
                     ->orderBy('payments.created_at', 'DESC')
                      ->get(['products.price','products.product_name', 'payments.status','payments.id','payments.id','payments.email','payments.name','payments.payment_id','payments.created_at']);

                // ->get();


  return view('admin.payments_view',compact('payments'))->with('no',1);
}


public function fileUpload(Request $request){
  $request->validate([
    'image'=>'required|mimes:jpg,jpeg,png|max:5000',
]);


$imageName = time().'.'.$request->file('image')->guessExtension();
$data=[
  'name'=>$imageName,
  'product_id'=>$request->id,
];

$request->image->move(public_path('images/moreProduct'),$imageName);

Moreimage::create($data);
return redirect()->back()->with('message','image added');

}

public function delete_more_image($id){

  $product=Moreimage::where('id',$id)->first();

  if(file_exists(public_path('images/moreProduct/'.$product->name))){
  unlink(public_path('images/moreProduct/'.$product->name));
  Moreimage::where('id',$id)->delete();

  }
           return redirect()->back()->with('message','image delete successfully');
}

function delete_report($id){
    Contactus::where('id',$id)->delete();
    return redirect()->back()->with('message','delete successfully');

}

function edit_payment($id){
   $update=Payment::where('id',$id)->first();
   return view('admin.edit_payment',compact('update'));
}

function update_payment(Request $request){
    $status=$request->status;
    $id=$request->id;
    Payment::where('id',$id)->update(['status'=>$status]);
    return redirect()->back()->with('message','payment status update successfull');
}


}
