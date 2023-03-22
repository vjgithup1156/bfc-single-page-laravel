<?php

  

namespace App\Http\Controllers\Frontend;



use App\Http\Controllers\Controller;

  

use Illuminate\Http\Request;

use Razorpay\Api\Api;

use App\Models\Admin\Message;

use Session;

use Exception;

use Mail;

use App\Models\Admin\Enquiry;

  

class RazorpayPaymentController extends Controller

{

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function index()

    {

    }

  

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function store(Request $request)

    {

        $input = $request->all();

        

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $api->setHeader('x-razorpay-account',env('RAZORPAY_ACCOUNT_ID'));

  

        $payment = $api->payment->fetch($input['razorpay_payment_id']);

  

        if(count($input)  && !empty($input['razorpay_payment_id'])) {

            try {

                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 

                if($input['enquiry_id']){

                    $enquiry = Enquiry::find($input['enquiry_id']);

                    if(!empty($enquiry)){

                        $enquiry->payment_status = 1;

                        $enquiry->price = $payment['amount']/100;

                        $enquiry->save();

                    }

                    $msg1 = "The following details are Paid successful<br>";
        $msg1 .= "Name : ".$request->name."<br>";
        $msg1 .= "Email : ".$request->email."<br>";
        $msg1 .= "Phone : ".$request->phone."<br>";
        $msg1 .= "Amount : ".$request->price."<br>";
        // $msg1 .= "Message : ".$input['message']."<br>";
        $data = [
          'content' => $msg1
        ];

                    Mail::send('frontend.email.email-template', $data, function($message) use ($data) {
                        $message->to('Bestfitcoach@gmail.com')
                        // hello@bestfitcoach.in
                          ->subject('New Request has been raised');
                      });

                }

  

            } catch (Exception $e) {

                Session::put('error',$e->getMessage());

                return redirect()->back();

            }

        }

        // dd($request->all());

        return redirect()->route('homepage')->with(array('payment_success'=>'true','name'=>'test'));

    }

}