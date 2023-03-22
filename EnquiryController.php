<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\QuoteSettings;
use App\Models\Admin\Enquiry;
use App\Models\Admin\IsiCategory;
use DB;
use Config;
use PDF;
use Session;

class EnquiryController extends Controller  
{

    
    public function index(Request $request){
        $requested_list = Enquiry::all()->sortByDesc("created_at");
        return view('admin.enquiry.requested_list',compact('requested_list'));
    }
    public function view(Request $request,$id)
    {
        // Retrieving a model
        $enquiry = Enquiry::find($id);
        return view('admin.quote.view',compact('enquiry'));
    }
    
    public function store(Request $request)
    {
        // dd($request->all());
        $enquiry = new Enquiry();
        $enquiry->name = $request->name;
        $enquiry->category_id = $request->category_id;
        $enquiry->phone = $request->phone;
        $enquiry->email = $request->email;
        // dd($enquiry->name);
        $enquiry->save();
        
        Session::put('price',$enquiry->category->price);
        Session::put('enquiry_id',$enquiry->id);
        Session::put('phone',$request->phone);
        Session::put('name',$request->name);
        Session::put('email',$request->email);
        return redirect()->route('homepage')
            ->with(array('success'=>'true','enquiry_id' => $enquiry->id,'phone' => $request->phone,'name'=>$request->name,'email'=>$request->email));
    }
    public function destroy($id)
    {
        // Retrieving a model
        $enquiry = Enquiry::find($id);

        // Delete model
        $enquiry->delete();

        return redirect()->route('enquiry.index')
            ->with('success', 'content.deleted_successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy_checked(Request $request)
    {
        // Get All Request
        $input = $request->input('checked_lists');

        $arr_checked_lists = explode(",", $input);

        if (array_filter($arr_checked_lists) == []) {
            return redirect()->route('enquiry.index')
                ->with('warning', 'content.please_choose');
        }

        foreach ($arr_checked_lists as $id) {

            // Retrieve a model
            $enquiry = Enquiry::findOrFail($id);

            // Delete record
            $enquiry->delete();

        }

        return redirect()->route('enquiry.index')
            ->with('success', 'content.deleted_successfully');
    }
    
    
    public function requested_list_view($id){
        $enquiry = Enquiry::find($id);
        $bank_credential_account_name = QuoteSettings::where('quote_type','bank_credential_account_name')->first();
        $bank_credential_current_number = QuoteSettings::where('quote_type','bank_credential_current_number')->first();
        $bank_credential_bank_name = QuoteSettings::where('quote_type','bank_credential_bank_name')->first();
        $bank_credential_branch_name_and_code = QuoteSettings::where('quote_type','bank_credential_branch_name_and_code')->first();
        $bank_credential_ifsc_code = QuoteSettings::where('quote_type','bank_credential_ifsc_code')->first();
        $bsi_bank_credential_account_name = QuoteSettings::where('quote_type','bsi_bank_credential_account_name')->first();
        $bsi_bank_name = QuoteSettings::where('quote_type','bsi_bank_name')->first();
        $bsi_bank_address = QuoteSettings::where('quote_type','bsi_bank_address')->first();
        $bsi_account_no = QuoteSettings::where('quote_type','bsi_account_no')->first();
        $bsi_bank_swift_code = QuoteSettings::where('quote_type','bsi_bank_swift_code')->first();
        $bsi_bank_ifsc_code = QuoteSettings::where('quote_type','bsi_bank_ifsc_code')->first();
        return view('admin.quote.requested_details_view',compact('enquiry','id','bank_credential_account_name','bank_credential_current_number','bank_credential_bank_name','bank_credential_branch_name_and_code','bank_credential_ifsc_code','bsi_bank_credential_account_name','bsi_bank_name','bsi_bank_address','bsi_account_no','bsi_bank_swift_code','bsi_bank_ifsc_code'));
    } 
    
    public function download_pdf($id) {
        $enquiry = Enquiry::find($id);
        $data['enquiry']       = $enquiry;
        $data['id']       = $id;

        $pdf = PDF::loadView("admin.quote.requested_details_view", $data)->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download("invoice_{$id}.pdf");

    }
    
    public function send_invoice_via_whatsapp($url, $phone_number){
        $msg = "A new quotation has been generated\nThank You.\n\n";
        $api_key = env('WHATSAPP_SMS_KEY');
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://panel.rapiwha.com/send_message.php?apikey=".$api_key."&number=".$phone_number."&text=".urlencode($msg).url($url),
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);  
        
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
        //   $this->invoice_delete($pdf);
        }
    }

}