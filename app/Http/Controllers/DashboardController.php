<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // ログインリクエストが送られてきたら、リクエスト内からデータを取得
    public function getUserData(Request $request)
    {
      $userId = $request->user()->id; // ログインユーザーIDを取得
      $userName = $request->user()->name; // $requestからユーザー名を取得

      return view('dashboard', ['id' => $userId, 'userName' => $userName]);
    }
}
