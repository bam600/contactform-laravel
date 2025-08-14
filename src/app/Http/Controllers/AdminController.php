<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 管理者画面のController
class AdminController extends Controller
{

// adminメソッドが呼ばれる
  public function admin()
  {
  
  //resources/views/admin.blade.php を探して表示
    return view('admin');
  }
}
