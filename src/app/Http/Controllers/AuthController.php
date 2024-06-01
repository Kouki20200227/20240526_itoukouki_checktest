<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use app\MProduct;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function store(AuthRequest $request){
        $user = $request->only(['name', 'email', 'password']);
        User::create($user);
        return redirect('/login');
    }

    public function login(){
        return view('auth.login');
    }

    public function check(AuthRequest $request){
        $user_info = $request->only(['email', 'password']);

        //ログイン成功時
        if (Auth::attempt($user_info)){
            $request->session()->regenerate();
            return redirect('/admin');
        }

        return redirect('/login')->with('message', 'ログインに失敗しました');
    }

    public function index(){
        $categories = Category::all();
        $contacts = Contact::Paginate(7);
        // Contact::with('category')->get();
        return view('auth.admin', compact('contacts', 'categories'));
    }

    public function search(Request $request){
        $categories = Category::all();
        $contacts = Contact::with('category')->CategorySearch($request->category_id)->KeywordSearch($request->category_id)->get();
    }
}
