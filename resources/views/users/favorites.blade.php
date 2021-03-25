@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            {{-- ユーザの情報 $user --}}
            @include('users.card')
        </aside>
        <div class="col-sm-8">
            {{-- タブ --}}
            @include('users.navtabs')
            
            {{-- 複数のmicropostの情報 $microposts --}}
            @include('microposts.microposts')
        </div>
    </div>
@endsection