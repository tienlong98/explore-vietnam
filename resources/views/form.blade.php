<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    @extends('layouts.app')
    @section('content')
    <main class="container">
    <div class="company-address">
        <p class="address">NAL JAPAN</p>
        <p> {{ __('〒105-0004 東京都港区新橋６丁目２０−４ 新橋パインビル 4階') }}</p>
        <p>{{ __('＊電話番号＊') }}: 050-3571-3553</p>
    </div>

    <div class="form-contact">
        <form action="{{ url('insert-contact') }}" method="POST">
            @csrf
            <hr>
            <p class="mt-3">{{ __('＊お客様情報＊') }}</p>

                <div class="mb-3 write">
                    <label for="">{{ __('氏名 *') }}</label>
                    <input type="text" id="exampleInputPhone" name="name" required>
                </div>
                <div class="mb-3 write">
                    <label for="">{{ __('ふりがな') }}</label>
                    <input type="text" id="exampleInputPhone" name="firigana">
                </div>

                <div class="mb-3 write">
                    <label for="exampleInputEmail1">{{ __('メールアドレス*:') }}</label>
                    <input name="email" type="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="test@gmai.com" required>
                </div>
                <div class="mb-3 write">
                    <label>{{ __('電話番号*:') }}</label>
                    <input name="sdt" type="num" id="exampleInputPhone" placeholder="03-1234-5678" required>
                </div>


                <p>{{ __('＊お問わせ内容＊') }}</p>

                <div class="mb-3 write">
                    <label class=" message">{{ __('ご記入 :') }}</label>
                    <textarea name="content"></textarea>
                </div>
                <!-- <p class="mt-3">＊ご確認＊</p> -->
                <div class="mb-3 tick-box">
                    <input type="checkbox" class="form-check-input " id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">{{ __('下記、個人情報の取扱いに同意します') }}</label>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto mb-3">
                    <button class="btn " type="submit">{{ __('送信') }}</button>
                </div>

            </form>
        </div>
    </main>
    @endsection
</body>

</html>
