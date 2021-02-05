@extends('layouts.app')

@section('title')
    {{ __('タスク一覧') }}
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card card-design">
                <div class="create-button-design">
                    <a href="{{ route('tasks.create') }}">
                        <button class="btn btn-dark">
                            タスク作成
                        </button>
                    </a>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr class="table-dark">
                                <th>ID</th>
                                <th>title</th>
                                <th>comment</th>
                                <th>setting_day</th>
                                <th>user_name</th>
                            </tr>    
                        </thead>
                        <tbody>
                            @foreach ($tasks as $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->title }}</td>
                                    <td>{{ $value->comment }}</td>
                                    <td>{{ $value->setting_day }}</td>
                                    <td>{{ $value->users->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
