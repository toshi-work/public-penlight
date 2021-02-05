<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CreateUserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index() 
    {
        $users = User::select('*')->with('tasks')->get();

        return view('users.index', [
            'users' => $users
        ]);
    }

    public function create() 
    {
        // 都道府県データを取得
        $prefectures = $this->getPrefecture();

        return view('users.create', [
            'prefectures' => $prefectures
        ]);
    }

    public function store(CreateUserRequest $request, User $user) 
    {
        // Userモデルをインスタンス化
        $user = $user;

        // データを配列化
        $data = $request->all();
        $data['password'] = Hash::make($request->password);

        // データを保存
        $user->fill($data);
        $user->save();

        return redirect(route('users.index'))->with('info_message', 'ユーザを登録しました');
    }
}
