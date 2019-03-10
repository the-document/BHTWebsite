<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use mysql_xdevapi\Session;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('guest')->except('logout');
    }

    //======================hand code==================================
    public function showLoginForm(){
        return view('auth/login');
    }

    public function login(Request $request){
       // return redirect('home');

        //check valite
        $rules =[
            'email'=>'required|email',
            'password'=>'required|min:6'
        ];

        $message=[
            'email.required'=>'Không thể để trong Email',
            'email.email'=>'Tên đăng nhập phải là email',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu không được ít hơn 8 kí tự'
        ];

        $validator =Validator::make($request->all(),$rules,$message);

        if($validator->fails()){
            return redirect('login')->withErrors($validator)->withInput();
           // return 'errr';
        }
        else{
            $email=$request->input('email');
            $pass=$request->input('password');

            if(Auth::attempt(['email'=>$email, 'password'=>$pass]))
            {
                return redirect('home');
            }
            else
            {
                \Illuminate\Support\Facades\Session::flash('error','Vui lòng kiểm tra lại thông tin đăng nhập');
                return redirect('login');
            }
        }
    }
}
