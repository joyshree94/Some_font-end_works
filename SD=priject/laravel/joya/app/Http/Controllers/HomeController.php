<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Customer;
use App\Customerreqst;
use App\Imagefolder;
use DB;
class HomeController extends Controller
{
    //
    public function main(){

      return view('signup');

    }
    public function insert(Request $request){ 
      
      $Firstname=$request->firstname;
      $Lastname=$request->lastname;
      $Nationality=$request->nation;
      $email=$request->email;
      $password=$request->password;
      if($request->Options1){
      	$sex=$request->Options1;
      }
      
      else if($request->Options2){
      	$sex=$request->Options2;
      }
      $Birth_Date=$request->birthdate;
      $ob=new Customer();
      $ob->Firstname=$Firstname;
      $ob->Lastname=$Lastname;
      $ob->Nationality=$Nationality;
      $ob->email=$email;
      $ob->password=$password;
      $ob->sex=$sex;
      $ob->Birth_Date =$Birth_Date;
      if($ob->save()){
       return view('signup');
       
       
      }
   

    }
    public function login(Request $request){

    	$email=$request->email;
    	$password=$request->password;
         $user     = Customer::where('email','=',$email)
                        	        ->where('password','=',($password)) 
                        	        ->first();
    if($user){
    
     Session::put('userid',$user->id);     
     return view('web');   

    }
    else{

       return view('signup');
    }

    }
    public function reqstcustomer(Request $request,$idd){
     $id=$request->session()->get('userid');
    
      $user1=Imagefolder::where('id','=',$idd)
                     ->first();
      $image=$user1->imagepath;
       $user=Customer::where('id','=',$id)
                     ->first();
      $ob=new Customerreqst();
      $ob->id=$user->id;
      $ob->image=$image;
      $ob->Firstname=$user->Firstname;
      $ob->Lastname=$user->Lastname;
      $ob->Nationality=$user->Nationality;
      $ob->email=$user->email;
      $ob->password=$user->password;
      $ob->sex=$user->sex;
      $ob->Birth_Date =$user->Birth_Date;
      if($ob->save()){
       return view('web');  
      }
    }

        public function all(){
            $allpost=Customerreqst::all();
             return view('all',['data'=>$allpost]);
        }

     public function accept($id){
      $id=Customerreqst::find($id)->delete();
        return redirect('all');
   
     }   
}
