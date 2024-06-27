<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function showSignupPage(){
        return view('signup');
    }

    public function showLoginPage(){
        return view('login');
    }

    public function showProfilePage(){
        return view('viewProfile');
    }

    public function showEditProfile(){
        return view('editProfile');
    }

    // public function registerNewUser(Request $request){
    //     $fname = $request->input('fname');
    //     $lname = $request->input('lname');
    //     $name = $fname." ".$lname;
    //     $email = $request->input('email');
    //     $password = $request->input('password');
    //     $dob = $request->input('dob');
    //     $gender = $request->input('gender');

    //     DB::unprepared("INSERT INTO users (user_name, user_email, user_password, user_dob, user_gender) 
    //     values ('$name', '$email', '$password', '$dob', '$gender')");

    //     return redirect('/login');
    // }

    public function registerNewUser(Request $request) {
        
        $user = new User();

        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $name = $fname." ".$lname;

        $user->user_name = $name;
        $user->user_email = $request->input('email');
        $user->user_password = $request->input('password');
        $user->user_dob = $request->input('dob');
        $user->user_gender = $request->input('gender');
        $user->save();

        return redirect('/login')->with('status', "Inserted Successfully");
    }

    public function loggedUser(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $users = DB::unprepared("SELECT * FROM users WHERE user_email = \"".$email."\" AND user_password = \"".$password."\";");

        if($users > 0) {
            return view('/landingPage');
        }
    }
}
