<?php

namespace App\Http\Controllers\Admin\Auth;

use Auth;
use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function showLoginForm() {
        return view('auth.login',[
            'title' => 'Admin Login',
            'loginRoute' => 'admin.login',
            'authHomeRoute' => 'admin.home',
            'authLoginRoute' => 'admin.login',
            'forgotPasswordRoute' => 'admin.password.request',
        ]);
    }

    /**
     * Login the admin.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(AdminRequest $request)
    {
        // validate the data

        // attempt to login

        //

     	if(Auth::guard('admin')->attempt($request->only('email','password'),$request->filled('remember'))){
        //Authentication passed...
        return redirect()
            ->intended(route('admin.index'))
            ->with('status','You are Logged in as Admin!');
	    }
	    //Authentication failed...
	    return $this->loginFailed();
    }
    /**
     * Logout the admin.
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
    	Auth::guard('admin')->logout();
    	return redirect()
	        ->route('admin.login')
	        ->with('status','Admin has been logged out!');
    }
    /**
     * Validate the form data.
     * 
     * @param \Illuminate\Http\Request $request
     * @return 
     */
    private function validator(Request $request)
    {
      //validate the form...
    }
    /**
     * Redirect back after a failed login.
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    private function loginFailed(){
	    return redirect()
	        ->back()
	        ->withInput()
	        ->with('error','Login failed, please try again!');
    }
}
