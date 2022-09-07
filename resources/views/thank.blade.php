@extends('layouts.app')
@section('content')
    <div class="mt-5 mb-5">
        <div class="thank-you mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>ご注文ありがとうございました</h2>
                        <p>確認メールが送信されました。</p>
                        <a href="{{ url('listtour') }}" class="btn-camon">ショッピングを続ける</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
