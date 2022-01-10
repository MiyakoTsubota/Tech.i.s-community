<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Chat;

class ChatController extends Controller
{
    /**
     * チャット一覧
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $chats = Chat::orderBy('created_at', 'asc')->get();
        return view('chats.index', [
            'chats' => $chats,
        ]);
    }

    /**
     * チャット登録
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        // チャット作成
        Chat::create([
            'user_id' => 0,
            'name' => $request->name
        ]);

        return redirect('/chats');
    }


/**
     * 更新作業
     */

    // 入力画面
    public function edit_index($id)
    {
        $chat = Chat::find($id);
        return view('chats.edit_index')->with('chat',$chat);
    }

    // 確認画面
    public function edit_confirm(\App\Http\Requests\CheckRequest $request)
    {
        $data = $request->all();
        return view('chats.edit_confirm')->with($data);
    }

    // 完了処理
    public function edit_finish(Request $request, $id)
    {
        //レコードを検索
        $chat = Chat::findOrFail($id);
        //値を代入
        $caht->name = $request->name;
        
        //保存（更新）
        $staff->save();
        
        //リダイレクト
        return redirect("/chats")->with('flash_message', '更新しました。');
    }





    /**
     * チャット削除
     *
     * @param Request $request
     * @param Chat $chat
     * @return Response
     */
    public function destroy(Request $request, Chat $chat)
    {
        $chat->delete();
        return redirect('/chats');
    }
}
