<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ContactController extends Controller
{
    private $formItems = ["category_id", "first_name", "last_name", "gender", "email", "tell1", "tell2", "tell3", "address", "building", "detail"];

    public function index()
    {
        $categories = Category::all();
        return view('customer/index', compact('categories'));
    }

    public function show(ContactRequest $request){
        // こっちじゃダメなのか?
        // $contact = $request->all();
        // return view('check', compact('contact'));

        // return redirect('/confirm')->action('check', compact('contact'));

        $input = $request->only($this->formItems);
        $request->session()->put('form_input', $input);

        return redirect('/confirm');
    }

    public function check(Request $request){
        $input = $request->session()->get("form_input");
        $category = Category::find($input['category_id']);

        return view('customer/check', compact('input', 'category'));
    }

    public function store(Request $request)
    {
        if($request->input('back') == 'back'){
            return redirect('/')->withInput();
        }

        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'detail']);
        Contact::create($contact);

        return redirect('/thanks');
    }

    public function complete()
    {
        return view('customer/complete');
    }

    public function return(){
        return redirect('/');
    }
}
