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
                   {{--<table border="1">
                    <tr>
                        <th>質問内容</th>
                        <th>チェック</th>
                    </tr>
                    @for ($i= 1; $i < 26; $i++)
                    <tr>
                        <td>⑭離席時にパソコン画面ののぞき見や勝手な操作ができないようにしていますか</td>
                        <td>☑</td>
                    </tr>
                    @endfor
                    </table>--}}
                    <p></p>
                   <a href ="https://033ad2130ba046b1aa06125929a40269.vfs.cloud9.us-east-1.amazonaws.com/">メールを受け取る</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
