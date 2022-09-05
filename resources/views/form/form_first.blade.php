@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">セキュリティチェックリスト</div>

                <div class="card-body">
                    <form action="/form_second" method="post">
                       @csrf
                    <div class="form-group">
                        <div class="input">
                            <input name="question_1" type="checkbox" class="question_1" id="question_1" aria-describedby="question_1" placeholder="Enter question_1">
                        </div>
                        <div class="label">
                            <label for="question_1">①パソコンやスマホなどの情報機器のOSやソフトウェアは常に最新の状態にしていますか？</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_2" type="checkbox" class="question_2" id="question_2" aria-describedby="Help" placeholder="Enter question_2">
                        </div>
                        <div class="label">
                            <label for="question_2">②パソコンやスマホなどにはウイルス対策ソフトを導入し、ウイルス定義ファイルは最新の状態にし、UTMの導入はしていますか？</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_3" type="checkbox" class="question_3" id="question_3" aria-describedby="Help" placeholder="Enter question_3">
                        </div>
                        <div class="label">
                            <label for="question_3">③パスワードは破られにくい「長い」「複雑」なパスワードを使用していますか？
                        <br>（大文字小文字＋記号かつ8文字以上）</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_4" type="checkbox" class="question_4" id="question_4" aria-describedby="Help" placeholder="Enter question_4">
                        </div>
                        <div class="label">
                            <label for="question_4">④重要情報に対する適切なアクセス制限を行っていますか？</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_5" type="checkbox" class="question_5" id="question_5" aria-describedby="Help" placeholder="Enter question_5">
                        </div>
                        <div class="label">
                            <label for="question_5">⑤新たな脅威や攻撃の手口を知り対策を社内共有する仕組みはできていますか？</label>
                        </div>
                    </div>
                    {{--
                    <input name="question_A" type="hidden" value="①パソコンやスマホなどの情報機器のOSやソフトウェアは常に最新の状態にしていますか？" >
                    <input name="question_B" type="hidden" value="②パソコンやスマホなどにはウイルス対策ソフトを導入し、ウイルス定義ファイルは最新の状態にし、UTMの導入はしていますか？" >
                    <input name="question_C" type="hidden" value="③パスワードは破られにくい「長い」「複雑」なパスワードを使用していますか？" >
                    <input name="question_E" type="hidden" value="④重要情報に対する適切なアクセス制限を行っていますか?" >
                    <input name="question_F" type="hidden" value="⑤新たな脅威や攻撃の手口を知り対策を社内共有する仕組みはできていますか？" >--}}
                    <button type="submit" class="btn btn-primary">次へ続く</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
