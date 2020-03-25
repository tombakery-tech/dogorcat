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

 <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-middle">{{ __('ニックネーム') }}</label>

<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a class="navbar-brand" href="{{ url('/profile/email') }}">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Email変更') }}
                            </button>
                          </a>
                        </div>
<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a class="navbar-brand" href="{{ url('/profile/password') }}">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Password変更') }}
                            </button>
                          </a>
                        </div>   
<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a class="navbar-brand" href="{{ url('/comment') }}">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('スレッドに行く') }}
                            </button>
                          </a>
                        </div>   
                        </div>
@endsection