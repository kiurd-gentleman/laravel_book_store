<?php

namespace App\Http\Controllers\frontend;

use App\Notifications\VerifyRegistration;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Mail\SendEmail;
use Mail;
class LoginController extends Controller
{
    public function user_login( Request $request)
    {

//        $request->validate([
//            'username' => 'required|max:255',
//            'pass' => 'required',
//        ]);
        $user_username = $request->username;
        $user_pass =md5($request->pass);



        $db_user = User:: where('username', $user_username)
            ->where('password', $user_pass)
            ->first();

        if($db_user)
        {
            $name= $db_user->username;
            session(['name' => $name]);
            return redirect()->route('index');
        }
        else{
            return redirect()->to('/login-or-registration')->with([
                'loginError' => "Wrong Username or password!!!" ]);
        }



    }
    public function user_registration( Request $request){
       /* $this->validation($request);*/
        $user = new User();
        $user->name = $request->full_name;
        $user->email = $request->email;
        $user->username =  $request->username;
        $user->password = md5($request->password);
        $user->remember_token = str::random(50);
        $user->save();

        $user->notify(new VerifyRegistration($user , $user->remember_token));
        /*User::create($request->all());*/
        return redirect('/')->with('success' , 'your registration  successfully submitted. Check your email.');

    }
    public function validation($request){
        return $this->validate($request,[
            'full_name'=> 'require|max:100',
            'email'=> 'require|max:100|email',
            'username'=> 'require|max:100|unique:users',
            'password'=> 'require|max:100|confirmed',

        ]);
    }
    public function logout(){
        session(['name' => null]);

        return redirect()->to('/');
    }

    public function verify($remember_token){
        $user = User::where('remember_token' , $remember_token)->first();
        if (!is_null($user)){
            $user->status= 1;
            $user->remember_token = null;
            $user->save();
            session()->flash('success', 'Your registration is successful. Login now');
            return redirect(route('home.login-or-registration'));
        }
        else{
            session()->flash('errors', 'Your something is wrong. try again !!!');
            return redirect(route('home.login-or-registration'));
        }


    }


    public function send()
    {
        $destMail = "deepta71dem1666@gmail.com";
        $sub = "Ishraqul Hoque";
        $msg = "Hello From Laravel";
        $r = Mail::to($destMail)->send( new SendEmail($sub, $msg) );
        if($r)
            return "Successfull";
    }
}
