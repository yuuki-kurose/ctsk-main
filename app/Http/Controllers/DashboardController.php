<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // ログインリクエストが送られてきたら、リクエスト内からデータを取得
    public function getUserData(Request $request)
    {
      // $requestからユーザー名を取得
      $userName = $request->user()->name;

      return view('dashboard', ['userName' => $userName]);
    }
}
