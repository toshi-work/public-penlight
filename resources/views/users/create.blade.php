@extends('layouts.app')

@section('title')
    {{ __('ユーザ作成') }}
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card card-design">
                <div class="card-body">
                    <form method="POST" action="{{ route('users.store') }}">
                        @csrf
                            <div class="p-6 bg-white border-b border-gray-200">
                                <div class="form-floating mb-3">
                                    <input type="name" name="name" class="form-control" id="floatingInput" placeholder="name">
                                    <label for="floatingInput">name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Email</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div style="margin: 15px 0 15px 0">
                                    <select name="prefecture" class="form-select" aria-label="Default select example">
                                        <option selected>Select Prefecture</option>
                                        @foreach ($prefectures as $key => $value)
                                            <option value="{{ $value }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-floating">
                                    <textarea name="memo" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Memo</label>
                                </div>
                            </div>
                            <div style="margin-top: 15px">
                                <button type="submit" class="btn btn-dark" style="margin-bottom: 10px">
                                    作成する
                                </button>
                                <a href="{{ route('users.index') }}">
                                    <input type="button" value="キャンセル" class="btn btn-outline-dark" style="margin: 0 0 10px 5px" />
                                </a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
