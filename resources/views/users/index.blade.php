@extends('layouts.app')

@section('title')
    {{ __('ユーザ一覧') }}
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card card-design">
                <div class="create-button-design">
                    <a href="{{ route('users.create') }}">
                        <button class="btn btn-dark">
                            ユーザ作成
                        </button>
                    </a>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr class="table-dark">
                                <th>ID</th>
                                <th>name</th>
                                <th>email</th>
                                <th>created_at</th>
                            </tr>    
                        </thead>
                        <tbody>
                            @foreach ($users as $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>{{ $value->created_at }}</td>
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
