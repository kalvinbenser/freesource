<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\Payment;
use Session;
use App\Models\Cart;
use Redirect;
use Illuminate\Support\Facades\Auth;
class RazorpayController extends Controller
{    
   //default razorpay 


    public  function single_razorpay($id){
        $data['payment']=Cart::where("id",$id)->first();
       
        return view('frontend.single_razorpay',$data);
    }
     

    public function multiple_razorpay(){
        $user_id=Auth::user()->id;
        $data['payments']=Cart::where('user_id',$user_id)->get();
        $data['price']=cart::where('user_id',$user_id)->sum('price');
        return view('frontend.multiple_razorpay',$data);

    }
    public function store(Request $request)
    {    $user_id=Auth::user()->id;
        $input = $request->all();
  
        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
  
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
  
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
  
            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }
        $data = [
            'payment_id' => $input['razorpay_payment_id'],
            'user_id' => $user_id,
            'amount' => $request->amount,
         ];
      Payment::create($data);
        return redirect()->back()->with('payment_success', 'Payment successful');
    }

    //customized razorpay

    // public function razorpay()
    // {
    //   return view('frontend.razorpay');
    // }

    // public function payment(Request $request)
    // {
    //     $input = $request->all();

    //     $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));

    //     $payment = $api->payment->fetch($request->razorpay_payment_id);

    //     if(count($input)  && !empty($input['razorpay_payment_id'])) {
    //         try {

    //             $payment->capture(array('amount'=>$payment['amount']));

    //         } catch (\Exception $e) {
    //             return  $e->getMessage();
    //             \Session::put('error',$e->getMessage());
    //             return redirect()->back();
    //         }
    //     }

    //     // $payInfo = [
    //     //            'payment_id' => $request->razorpay_payment_id,
    //     //            'user_id' => '1',
    //     //            'amount' => $request->amount,
    //     //         ];
                
    //     Payment::insertGetId($payInfo);  
        
    //     \Session::put('success', 'Payment successful');

    //     return response()->json(['success' => 'Payment successful']);
    // }

 

}