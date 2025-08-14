<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        // カテゴリ一覧を取得
        $categories = Category::all();

        // 検索条件の取得
        $name_mail = $request->input('name_mail');
        $gender = $request->input('gender');
        $category_id = $request->input('category_id');
        $contentdate = $request->input('contentdate');

        // クエリビルダーで条件検索
        $query = Contact::query();

        if ($name_mail) {
            $query->where(function ($q) use ($name_mail) {
                $q->where('name', 'like', "%{$name_mail}%")
                  ->orWhere('email', 'like', "%{$name_mail}%");
            });
        }

        if ($gender) {
            $query->where('gender', $gender);
        }

        if ($category_id) {
            $query->where('category_id', $category_id);
        }

        if ($contentdate) {
            $query->whereDate('created_at', $contentdate);
        }

        // 結果取得（カテゴリとのリレーションも取得）
        $results = $query->with('category')->get();

        return view('admin', compact('categories', 'results'));
    }
}
