<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function login()
    {
        // ログイン画面へ遷移
        return view('login');
    }
    public function post(Request $req)
    {
        $table = new traveller;
        $user = $table->getUser($req->email);
        if (Hash::check($req->password, $user[0]->password)) {
            Session::put('user', $user);
            // ログイン
            return redirect('index');
        } else {
            //ログイン失敗
            return view('login', ['errorMsg' => 'ログインできませんでした']);
        }
    }
    public function logout(Session $session)
    {
        //ユーザーセッションの消去
        Session::forget('user');
        // ログイン画面に戻る
        return redirect('login');
    }

    public function getRegister()
    {
        // ユーザ登録画面へ遷移
        return view('signup');
    }
    public function postRegister(Request $request)
    {
        // ユーザ登録処理
        $user = new traveller;
        $user->user_name = $request->user_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($request->profile_img_path != null) {
            $file = $request->file('profile_img_path');
            // getClientOriginalName()  拡張子を含め、アップロードしたファイルのファイル名を取得することができる。
            $image_extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
            // file名が重複しないようにmail_time.拡張子に変更。
            $image_name = $user->user_name . '_' . date('YmdHis') . '.' . $image_extension;
            $user->profile_img_path = $image_name;
            //public_path() publicディレクトリの完全パスを返す。publicディレクトリ内にuploadsディレクトリを作成。
            $target_path = public_path('uploads/profile/');
            $file->move($target_path, $user->profile_img_path);
        } else {
            $user->profile_img_path = "";
        }
        $user->save();
        return redirect('login');
    }

    public function home(Request $request)
    {
        // ログインしていなければログイン画面へ戻る
        if (!Session::has('user')) {
            return redirect('login');
        }
        //データを取得
        $db = DB::table('posts');
        $travels = $db->get();
        // 検索機能
        $user = Session::get('user');
        $user = User::where('id', $user[0]->id)->first();
        $view = view('home');
        $view->with('user', $user);
        $view->with('travels', $travels);
        return $view;
    }
}
