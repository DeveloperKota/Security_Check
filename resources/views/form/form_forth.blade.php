@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">セキュリティチェックリスト</div>

                <div class="card-body">
                   <p>これでセキュリティチェックリストは終了です。</p>
                   <p>{{ $user_name }}様のスコア　{{$array_count_3}}点</p>
                   <br>
                   <a href ="/home">ホームに戻る</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
