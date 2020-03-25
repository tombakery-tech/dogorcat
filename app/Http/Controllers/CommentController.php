<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Comment;

class CommentController extends Controller
{
    //
    public function add()
    {
        return view('comment');
    }
    
     public function create(Request $request)
  {
      // 
      // Varidationを行う
      $this->validate($request, Comment::$rules);

      $comment = new Comment;
      $form = $request->all();

      // フォームから画像が送信されてきたら、保存して、$comment->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $news->image_path = basename($path);
      } else {
          $comment->image_path = null;
      }

      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);

      // データベースに保存する
      $news->fill($form);
      $comment->save();
      
      return redirect('comment');
  } 
}
