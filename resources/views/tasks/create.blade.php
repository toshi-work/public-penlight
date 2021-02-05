@extends('layouts.app')

@section('title')
    {{ __('タスク作成') }}
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card card-design">
                <div class="card-body">
                    <form method="POST" action="{{ route('tasks.store') }}">
                        @csrf
                            <div class="p-6 bg-white border-b border-gray-200">
                                <div class="form-floating mb-3">
                                    <input name="title" class="form-control" id="floatingInput" placeholder="name">
                                    <label for="floatingInput">title</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="comment" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">comment</label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="setting_day" id="datepicker">
                                </div>
                                <input type="hidden" name="user_id" value="{{ \Auth::user()->id }}" />
                            </div>
                            <div style="margin-top: 15px">
                                <button type="submit" class="btn btn-dark" style="margin-bottom: 10px">
                                    作成する
                                </button>
                                <a href="{{ route('tasks.index') }}">
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
