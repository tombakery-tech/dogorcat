<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DogOrCat</title>
    </head>
    <body>
        <h1>犬？猫？</h1>
        
    </body>
</html>

@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
            <div class="col-md-8 mx-auto">
                <form action="{{ action('CommentController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                     <div class="form-group row">
                        <label class="col-md-2">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                                    {{ __('投稿する') }}
                            </button>
                        </div>
                    </div>
               </div>
@endsection

//データベースから文字列を引っ張って犬か猫を表示させる
//１７編集履歴を実装しよう　テーブル同士の関連を見ながらやる