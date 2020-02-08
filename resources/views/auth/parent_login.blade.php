@extends('layouts.app')

@section('content')

<div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        @if (Session::has('failed'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ Session::get('failed') }}</strong>
                        </div>
                        @endif
                        <div class="login-logo">
                            <a href="#">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{ route('parent.login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="username" value="{{old('username')}}">
                                    <span class="text-danger">{{ $errors->first('username') }}</span>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" value="{{old('password')}}">
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
