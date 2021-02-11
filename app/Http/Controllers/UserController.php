<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userModel;
use Illuminate\Http\RedirectResponse ;
use Session;
use Illuminate\Support\MessageBag;

class UserController extends Controller
{
    public function login(Request $req){
        $this->validate($req, [
            'email' => 'required',
            'password' => 'required'
        ]);

    //   userModel::select(*)->where(
    //        [
    //            ['email', '=', $req->input('email')],
    //            ['password', '=', $req->input('password')]
    //        ]
    //    )->get();
        if (userModel::where('email', '=', $req->input('email'))
        ->where('password', '=', $req->input('password'))->count() > 0) {

            $req->session()->put('logData',[$req->input()]);
            $notification=[
                'alert-type'=>'success',
                'message'=>'You have successfully Logged In.'
            ];
            return redirect('list')->with($notification); //stored in session as key=value
          

        //    echo 'user exist';
         }else{
             echo 'user does not exist';
         }
    //    echo "<pre>";
    //     print_r($req->input());
    //     echo "</pre>";
    }

    public function signup(Request $req){

        $validator = $req->validate([        //automatically redirect if any rule fails
            'name' => 'required',
            'email' => 'required |unique:users_table',
            'password' => 'required'
            
        ]);
        // $errors =$validator->errors();

        // return $errors->any();
        // return print_r($errors->any());

        // $this->validate($req, [
        //     'title' => 'required|unique:posts|max:255',
        //     'body' => 'required',
        // ]);
    
        $user = new userModel();
        
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = $req->input('password');
        

        if($user->save()){
            $notification=[
                'alert-type'=>'success',
                'message'=>'You have successfully Signed Up.'
            ];
            return redirect('/')->with($notification);
        }else{
            $notification=[
                'alert-type'=>'error',
                'message'=>'You have failed to Sign Up.'
            ];
            return redirect('signup')->with($notification);
        }


        // echo "<pre>";
        // print_r($req->input());
        // echo "</pre>";
    }

    public function list(){
        // return Session::get('logData');
    $users= userModel::all();    //$users is an object
    // echo "<pre>";
    // print_r($users);
    // echo "</pre>";

    return view('usersList',['users'=>$users]);
//     $html="";
//     foreach($users as $user){
//         $html.="<li>
//         <span class='spanC'>$user->id</span>
//         <span class='spanC'>$user->name</span>
//         <span class='spanC'>$user->email</span>
//         </li>";

//     }
//    return $html;

 
    }

    public function logout(Request $req){
     
        $req->session()->pull('logData');
        $notification=[
            'alert-type'=>'success',
            'message'=>'You have successfully logged out.'
        ];
        return redirect('/')->with($notification);
    }
    
}
