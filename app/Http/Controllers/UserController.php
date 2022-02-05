<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Product;
use Auth;
class UserController extends Controller
{
    function login(Request $req){
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user-> password))
         {
            $req->session()->put('user',$user);
            return "ime ili lozinka nije tocna";
        }
        elseif($user->uloga==1){
            $req->session()->put('user',$user);
             return redirect('/admindas');
         }
         elseif($user->uloga==2){
             $req->session()->put('user',$user);

            return redirect('/administratordas');
         }

         else{
            $req->session()->put('user',$user);
            return redirect('/');
         }
    }
    function register(Request $req){
        //return $req->input();
        $user =new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->uloga=3;
        $user->save();

        return redirect('login');
    }
    function admregister(Request $req){
        //return $req->input();
        $user =new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->uloga=$req->uloga;
        $user->save();

       return redirect('admindas');
    }
    


}
