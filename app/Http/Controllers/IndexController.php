<?php

namespace App\Http\Controllers;
use App\SubCategory;
use App\Category;
use App\Slider;
use App\Team;
use App\Client;
use App\Service;
use App\Product;
use App\Payment;
use App\SiteSetting;
use App\User;
use Hash;
use Auth;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    private $moduleName="Index ";
    private $sdc;
    public function __construct(){ $this->sdc = new StaticDataController(); }


    public function home(){
        $team = Team::all();
        $service = Service::all();
        $cat = Category::all();
        $site = SiteSetting::all();
        $slider = Slider::all();
    	return view('frontEnd.pages.index',compact('team','service','cat','site','slider'));
    }

    public function aboutus(){
        $site = SiteSetting::all();
        return view('frontEnd.pages.aboutus',compact('site'));
    }

    public function productCat($name,$id){
        $site = SiteSetting::all();
        $subcat = SubCategory::where('category_id',$id)->get();
    	return view('frontEnd.pages.sub_category',compact('site','subcat'));
    }
    public function productSubCat($name,$catid,$subname,$subcatid){
        $site = SiteSetting::all();
        $detail = Product::where('category_id',$catid)->Where('sub_category_id',$subcatid)->get();
        //dd($detail);
    	return view('frontEnd.pages.sub_category_product',compact('site','detail'));
    }
    public function productDetail($name,$catid,$subname,$proname,$proid,$subcatid){
        $site = SiteSetting::all();
        $payment = Payment::all();
        $detail = Product::where('id',$proid)->get();
        $relpro = Product::where('sub_category_id',$subcatid)->whereNotIn('id',[$detail[0]['id']])->take(4)->orderBy('id', 'DESC')->get();
        //dd($relpro); 
    	return view('frontEnd.pages.product_detail',compact('site','detail','payment','relpro'));
    }
    public function contactUs(){
        $site = SiteSetting::all();
        //dd($detail);
        return view('frontEnd.pages.contact-us',compact('site'));
    }


    public function contactRequestProcess(Request $request)
    {

        $siteInfo=SiteSetting::where('id',1)->first();

        $html='';
        $html .='<!doctype html>
                    <html>
                      <head>
                        <meta name="viewport" content="width=device-width">
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                        <title>Simple Transactional Email</title>
                        <style>
                        /* -------------------------------------
                            INLINED WITH htmlemail.io/inline
                        ------------------------------------- */
                        /* -------------------------------------
                            RESPONSIVE AND MOBILE FRIENDLY STYLES
                        ------------------------------------- */
                        @media only screen and (max-width: 620px) {
                          table[class=body] h1 {
                            font-size: 28px !important;
                            margin-bottom: 10px !important;
                          }
                          table[class=body] p,
                                table[class=body] ul,
                                table[class=body] ol,
                                table[class=body] td,
                                table[class=body] span,
                                table[class=body] a {
                            font-size: 16px !important;
                          }
                          table[class=body] .wrapper,
                                table[class=body] .article {
                            padding: 10px !important;
                          }
                          table[class=body] .content {
                            padding: 0 !important;
                          }
                          table[class=body] .container {
                            padding: 0 !important;
                            width: 100% !important;
                          }
                          table[class=body] .main {
                            border-left-width: 0 !important;
                            border-radius: 0 !important;
                            border-right-width: 0 !important;
                          }
                          table[class=body] .btn table {
                            width: 100% !important;
                          }
                          table[class=body] .btn a {
                            width: 100% !important;
                          }
                          table[class=body] .img-responsive {
                            height: auto !important;
                            max-width: 100% !important;
                            width: auto !important;
                          }
                        }

                        /* -------------------------------------
                            PRESERVE THESE STYLES IN THE HEAD
                        ------------------------------------- */
                        @media all {
                          .ExternalClass {
                            width: 100%;
                          }
                          .ExternalClass,
                                .ExternalClass p,
                                .ExternalClass span,
                                .ExternalClass font,
                                .ExternalClass td,
                                .ExternalClass div {
                            line-height: 100%;
                          }
                          .apple-link a {
                            color: inherit !important;
                            font-family: inherit !important;
                            font-size: inherit !important;
                            font-weight: inherit !important;
                            line-height: inherit !important;
                            text-decoration: none !important;
                          }
                          .btn-primary table td:hover {
                            background-color: #34495e !important;
                          }
                          .btn-primary a:hover {
                            background-color: #34495e !important;
                            border-color: #34495e !important;
                          }
                        }
                        </style>
                      </head>
                      <body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
                        <table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;">
                          <tr>
                            <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
                            <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;">
                              <div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;">

                                <!-- START CENTERED WHITE CONTAINER -->
                                <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">This is preheader text. Some clients will show this text as a preview.</span>
                                <table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;">

                                  <!-- START MAIN CONTENT AREA -->
                                  <tr>
                                    <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;">
                                      <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                                        <tr>
                                          <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">
                                            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Hi there,</p>
                                            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">A contact query has been made in simple retail pos frontend, please review below information and provide a feedback in your earliest possible time.</p>
                                            <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;">
                                              <tbody>
                                                <tr>
                                                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                        Name 
                                                    </td>
                                                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                        '.$request->name.'
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                        Phone 
                                                    </td>
                                                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                        '.$request->phone.'
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                        E-Mail 
                                                    </td>
                                                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                        '.$request->email.'
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                        Query Detail
                                                    </td>
                                                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                        '.$request->message.'
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                        Name 
                                                    </td>
                                                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                        '.$request->name.'
                                                    </td>
                                                </tr>
                                                <tr>
                                                  <td colspan="2" align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
                                                      <tbody>
                                                        <tr>
                                                          <td style="font-family: sans-serif; font-size: 14px; vertical-align: top; background-color: #3498db; border-radius: 5px; text-align: center;"> <a href="mailto:'.$request->email.'" target="_blank" style="display: inline-block; color: #ffffff; background-color: #3498db; border: solid 1px #3498db; border-radius: 5px; box-sizing: border-box; cursor: pointer; text-decoration: none; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px; text-transform: capitalize; border-color: #3498db;">Reply To Contact Requester</a> </td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            
                                          </td>
                                        </tr>
                                      </table>
                                    </td>
                                  </tr>

                                <!-- END MAIN CONTENT AREA -->
                                </table>

                                <!-- START FOOTER -->
                                <div class="footer" style="clear: both; Margin-top: 10px; text-align: center; width: 100%;">
                                  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                                    <tr>
                                      <td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">
                                        <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">'.$siteInfo->address.'</span>
                                        <br>
                                        <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">'.$siteInfo->phone.'</span>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">
                                         <a href="http://htmlemail.io" style="color: #999999; font-size: 12px; text-align: center; text-decoration: none;"><img src="http://nucleuspos.com/images/anc.png" width="100"></a>.
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                                <!-- END FOOTER -->

                              <!-- END CENTERED WHITE CONTAINER -->
                              </div>
                            </td>
                            <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
                          </tr>
                        </table>
                      </body>
                    </html>';

                    //echo $html;

                    echo $this->sdc->initMail('f.bhuyian@gmail.com','Contact Query',$html,'','',0);

    }

    public function contactUss($name,$id){
        $site = SiteSetting::all();
        $proname = Product::where('id',$id)->get();
        return view('frontEnd.pages.contact-us',compact('site','proname'));
    }

    public function login(){
        return view('auth.login');
    }

    public function updateUserInfo(request $request){
       //echo $request->name; die(); 
       $this->validate($request, [
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required|min:6|confirmed',
            'password_confirmation' => 'required|same:password'
            
        ]);
        
        $user = User::find(\Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/admin-site/user')->with('status', 'Updated Successfully !');
    }
    public function user(){
        return view('admin.pages.edituser');
    }

    
}
