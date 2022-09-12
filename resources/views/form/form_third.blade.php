@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">セキュリティチェックリスト</div>

                <div class="card-body">
                    <form action="/form/forth" method="post">
                       @csrf
                    <div class="form-group">
                        <div class="input">
                            <input name="question_19" type="checkbox" class="question_19" id="question_19" aria-describedby="question_19" placeholder="Enter question_19">
                        </div>
                        <div class="label">
                            <label for="question_19">⑲従業員に守秘義務を理解してもらい、業務上知りえた情報を外部に漏らさないなどのルールを守らせていますか？</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_20" type="checkbox" class="question_20" id="question_20" aria-describedby="Help" placeholder="Enter question_20">
                        </div>
                        <div class="label">
                            <label for="question_20">⑳従業員にセキュリティに関する教育や注意喚起を行っていますか？</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_21" type="checkbox" class="question_21" id="question_21" aria-describedby="Help" placeholder="Enter question_21">
                        </div>
                        <div class="label">
                            <label for="question_21">㉑個人所有の情報機器を業務で利用する場合のセキュリティ対策を明確にしていますか？</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_22" type="checkbox" class="question_22" id="question_22" aria-describedby="Help" placeholder="Enter question_22">
                        </div>
                        <div class="label">
                            <label for="question_22">㉒重要情報の授受を伴う取引先との契約書には秘密保持条項を設けていますか？</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_23" type="checkbox" class="question_23" id="question_23" aria-describedby="Help" placeholder="Enter7question_23">
                        </div>
                        <div class="label">
                            <label for="question_23">㉓クラウドサービスやウェブサイトの運用などで利用する外部サービスは安全・信頼性を把握して選定していますか？</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_24" type="checkbox" class="question_24" id="question_24" aria-describedby="Help" placeholder="Enter question_24">
                        </div>
                        <div class="label">
                            <label for="question_24">㉔セキュリティ事故が起きた場に備え、緊急時の体制整備や対応手順を作成するなど準備をしていますか？</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input name="question_25" type="checkbox" class="question_25" id="question_25" aria-describedby="Help" placeholder="Enter question_25">
                        </div>
                        <div class="label">
                            <label for="question_25">㉕情報セキュリティ対策をルール化し、（上記設問等）、従業員に明示していますか？</label>
                        </div>
                    </div>
                    <input type="hidden" id="id" name="score_2" value="{{$array_count_2}}">
                    {{--<input name="question_T" type="hidden" value="⑲従業員に守秘義務を理解してもらい、業務上知りえた情報を外部に漏らさないなどのルールを守らせていますか?" >
                    <input name="question_U" type="hidden" value="⑳従業員にセキュリティに関する教育や注意喚起を行っていますか？" >
                    <input name="question_V" type="hidden" value="㉒重要情報の授受を伴う取引先との契約書には秘密保持条項を設けていますか？" >
                    <input name="question_W" type="hidden" value="㉓クラウドサービスやウェブサイトの運用などで利用する外部サービスは安全・信頼性を把握して選定していますか？" >
                    <input name="question_X" type="hidden" value="㉔セキュリティ事故が起きた場に備え、緊急時の体制整備や対応手順を作成するなど準備をしていますか？" >
                    <input name="question_Y" type="hidden" value="㉕情報セキュリティ対策をルール化し、（上記設問等）、従業員に明示していますか？" >--}}
                    <button type="submit" class="btn btn-primary">スコアを表示する</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
