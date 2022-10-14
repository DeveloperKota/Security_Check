@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">セキュリティチェックリスト</div>

                <div class="card-body">
                    <form action="/form/third" method="post">
                       @csrf
                    <div class="form-group">
                        <div class="input">
                            <input name="question_6" type="checkbox" class="question_6" id="question_6" aria-describedby="question_6" placeholder="Enter question_6">
                        </div>
                        <div class="label">
                            <label for="question_6">⑥電子メールの添付ファイルや本文中のURLリンクを介したウイルスに気を付けていますか？</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_7" type="checkbox" class="question_7" id="question_7" aria-describedby="Help" placeholder="Enter question_7">
                        </div>
                        <div class="label">
                            <label for="question_7">⑦電子メールやFAXの宛先送信ミスを防ぐ取り組みを行っていますか？</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_8" type="checkbox" class="question_8" id="question_8" aria-describedby="Help" placeholder="Enter question_8">
                        </div>
                        <div class="label">
                            <label for="question_8">⑧重要情報は電子メール本文に書くのではなく、添付するファイルに書いてパスワードなどで保護していますか？</label>
                        </div>  
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_9" type="checkbox" class="question_9" id="question_9" aria-describedby="Help" placeholder="Enter question_9">
                        </div>
                        <div class="label">
                            <label for="question_9">⑨無線LANを安全に使うために適切な暗号化方式を設定するなどの対策をしていますか？</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_10" type="checkbox" class="question_10" id="question_10" aria-describedby="Help" placeholder="Enter7 question_10">
                        </div>
                        <div class="label">
                            <label for="question_10">⑩インターネットを介したウイルス感染やSNSへの書き込みなどのトラブルへの対策をしていますか？</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_11" type="checkbox" class="question_11" id="question_11" aria-describedby="Help" placeholder="Enter question_11">
                        </div>
                        <div class="label">
                            <label for="question_11">⑪まるまるパソコンやサーバーのウイルス感染、故障や誤操作による重要な情報の消失に備えてバックアップを取得していますか？</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_12" type="checkbox" class="question_12" id="question_12" aria-describedby="Help" placeholder="Enter question_12">
                        </div>
                        <div class="label">
                            <label for="question_12">⑫紛失や盗聴を防止するため、重要情報が記された書類や電子媒体は机上に保管せず、書庫などに安全に保存していますか？</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_13" type="checkbox" class="question_13" id="question_13" aria-describedby="Help" placeholder="Enter question_13">
                        </div>
                        <div class="label">
                            <label for="question_13">⑬重要情報が記載された書類や電子媒体をを持ち出すとき、盗難や紛失に対する対策をしていますか？</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_14" type="checkbox" class="question_14" id="question_14" aria-describedby="Help" placeholder="Enter question_14">
                        </div>
                        <div class="label">
                            <label for="question_14">⑭離席時にパソコン画面ののぞき見や勝手な操作ができないようにしていますか？</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_15" type="checkbox" class="question_15" id="question_15" aria-describedby="Help" placeholder="Enter question_15">
                        </div>
                        <div class="label">
                            <label for="question_15">⑮関係者以外の事務証への立ち入りを制限していますか？</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_16" type="checkbox" class="question_16" id="question_16" aria-describedby="Help" placeholder="Enter question_16">
                        </div>
                        <div class="label">
                            <label for="question_16">⑯退社時にノートパソコンや備品を施錠補完するなど盗難防止対策をしていますか？</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_17" type="checkbox" class="question_17" id="question_17" aria-describedby="Help" placeholder="Enter question_17">
                        </div>
                        <div class="label">
                            <label for="question_17">⑰事務所が無人になるときの施錠忘れ対策をしていますか？</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_18" type="checkbox" class="question_18" id="question_18" aria-describedby="Help" placeholder="Enter question_18">
                        </div>
                        <div class="label">
                            <label for="question_18">⑱重要情報が記載された書類や電子媒体を破棄するときに復元できないようにしていますか？</label>
                        </div>        
                    </div>
                    <input type="hidden" id="id" name="score_1" value="{{$array_count_1}}">
                    <input name="question_G" type="hidden" value="⑥電子メールの添付ファイルや本文中のURLリンクを介したウイルスに気を付けていますか？" >
                    <input name="question_H" type="hidden" value="⑥電子メールの添付ファイルや本文中のURLリンクを介したウイルスに気を付けていますか？" >
                    <input name="question_I" type="hidden" value="⑧重要情報は電子メール本文に書くのではなく、添付するファイルに書いてパスワードなどで保護していますか？" >
                    <input name="question_J" type="hidden" value="⑨無線LANを安全に使うために適切な暗号化方式を設定するなどの対策をしていますか？" >
                    <input name="question_K" type="hidden" value="⑩インターネットを介したウイルス感染やSNSへの書き込みなどのトラブルへの対策をしていますか？" >
                    <input name="question_L" type="hidden" value="⑪まるまるパソコンやサーバーのウイルス感染、故障や誤操作による重要な情報の消失に備えてバックアップを取得していますか？" >
                    <input name="question_M" type="hidden" value="⑫紛失や盗聴を防止するため、重要情報が記された書類や電子媒体は机上に保管せず、書庫などに安全に保存していますか？" >
                    <input name="question_N" type="hidden" value="⑬重要情報が記載された書類や電子媒体をを持ち出すとき、盗難や紛失に対する対策をしていますか？" >
                    <input name="question_O" type="hidden" value="⑭離席時にパソコン画面ののぞき見や勝手な操作ができないようにしていますか？" >
                    <input name="question_P" type="hidden" value="⑮関係者以外の事務証への立ち入りを制限していますか？" >
                    <input name="question_Q" type="hidden" value="⑯退社時にノートパソコンや備品を施錠補完するなど盗難防止対策をしていますか？" >
                    <input name="question_R" type="hidden" value="⑰事務所が無人になるときの施錠忘れ対策をしていますか？" >
                    <input name="question_S" type="hidden" value="⑱重要情報が記載された書類や電子媒体を破棄するときに復元できないようにしていますか？" >
                    <button type="submit" class="btn btn-primary">次へ続く</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
