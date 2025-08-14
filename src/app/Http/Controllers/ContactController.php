<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
  //入力画面用
  public function contact()
  {
    $categories=Category::all();
    return view('contact',compact('categories'));
  }

  // 確認画面用
  public function confirm(ContactRequest $request)
     {
        $contact = $request->only(['last_name', 'first_name','gender', 'email', 'first_tel','middle_tel','last_tel', 'address','building',
        'category_id','detail']);

        return view('confirm', compact('contact'));
     }

  //送信ボタン押下後データ登録→thanks画面
  public function store(ContactRequest $request)
   {
        $contact = $request->only([
          'first_name', 
          'last_name', 
          'email', 
          'tel',
          'address',
          'building',
          'detail']);

        Contact::create([
          'last_name' => $request->input('last_name'),
          'first_name' => $request->input('first_name'),
          'gender' => $request->input('gender'),
          'email' => $request->input('email'),
           'tel' => $request->input('tel'),
          'address' => $request->input('address'),
          'building' => $request->input('building'),
          'category_id' => $request->input('category_id'), // ← これが必要！
          'detail' => $request->input('detail'),
        ]);

       return view('thanks');
}
   }
