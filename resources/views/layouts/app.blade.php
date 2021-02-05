<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <!-- jQuery DatePicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body class="body-design">
    <div id="app">
        <nav class="navbar navbar-light bg-light shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand link-font-design" href="{{ url('/') }}">
                    {{ config('app.name', 'Penligt') }}
                </a>
                
                <ul class="nav nav-tabs">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link link-font-design" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('users.create'))
                            <li class="nav-item">
                                <a class="nav-link link-font-design" href="{{ route('users.create') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link link-font-design" href="{{ route('users.index') }}">{{ __('ユーザ一覧') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-font-design" href="{{ route('tasks.index') }}">{{ __('タスク一覧') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-font-design" href="#" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                            >
                                {{ __('Logout') }}
                            </a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </ul>
            </div>
        </nav>

        <div class="title-design">
            <h3 class="title-word-design">
                @yield('title')
            </h3>
        </div>
        
        {{-- メッセージの表示 --}}
        @if (session('info_message'))
            <div class="alert alert-success alert-design" role="alert">
                {{ session('info_message') }}
            </div> 
        @endif
        {{-- エラーメッセージの表示 --}}
        @if ($errors->any())
            <div class="alert alert-danger alert-design" role="alert">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div> 
        @endif
        <main class="py-4">
            @yield('content')
        </main>
    </div>

{{-- jQuery DatePicker --}}
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    // DatePickerの実行
    $( function() {
        $('#datepicker').datepicker({
            // 日付の表示をカスタマイズ
            dateFormat: 'yy-mm-dd'
        });
    });
</script>
</body>
</html>
