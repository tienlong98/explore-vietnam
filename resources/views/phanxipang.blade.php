<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/detailyama.css') }}" />
    <title>{{ __('ファンシーパン') }}</title>
</head>

<body>
    <header class="d-flex justify-content-center align-items-center">
        <div class="title">
            <h1>{{ __('ファンシーパン') }}</h1>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-5">
                <div class="d-flex justify-content-center align-items-center ">
                    <img src="{{ asset('assets/images/phanxipang.png') }}" width="60%" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-5">
                <h1 class="mt-5 fs-3">{{ __('ファンシーパン山はどこ？') }}</h1>
                <!-- <h1 class="ms-5">such place</h1> -->
                <p class="mt-5">{{ __('ファンシーパン（PHAN　XI　PANG）山はベトナムで一番高い山、「東の屋根」として知られている。ファンシーパン山は海抜3,143mの高さで、中央に位置している。PHONG　THOからHOA　BINHまでの長さ280km、HOANG　LIEN　SON山麓の幅の最も広く約75kmと最も狭く45km、BACH MOC LUONG TU,PHAN XI PANG,PU LUONGの隣接する３つの山脈として巨大な屋根には多くの奇妙なモノと最も神秘的なものである同時に、多く征服したいという欲求を引きついでいる。') }}</p>
                <div class="d-flex justify-content-center mt-5">
                    <img src="{{ asset('assets/images/muiten.png') }}" class="img-fluid" width="5%"
                        alt="" />
                </div>
            </div>
            <div class="col-lg-12 ">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-5 d-flex justify-content-center">
                        <img src="{{ asset('assets/images/phanxipang3.png') }}" width="90%" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                <h2 class="mt-5">{{ __('登る最適な時期') }}</h2>

                <p class="mt-3">
                {{ __('ファンシーパンの登る最適な時期は10、11月に雨季が止んだばかり、冬もまだ来ていない時だ。また春が来ていて雨季が入って来ない時の２、３月である。３月末に登る時、ラッキーなら絵のような空に咲くシャクナゲの森に出会えるチャンスがあるかもしれない。できれば、登山の1、2の日前に、天気予報を確認するべきだ。') }}</p>
                <div class="d-flex justify-content-center mt-5">
                    <img src="{{ asset('assets/images/muiten1.png') }}" class="img-fluid" width="5%"
                        alt="" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                <img src="{{ asset('assets/images/phanxipang6.png') }}" width="90%" height="65%" class="mt-5" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5 mb-5 d-flex justify-content-center">
                <img src="{{ asset('assets/images/phanxipang5.png') }}" width="90%" class="mt-5" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5 position-relative">
                <div>
                    <h2 class="mt-5">{{ __('ファンシーパン山の魅力') }}</h2>
                   
                    <p class="mt-3">{{ __('二日に登るかロープウェイで６分に乗ってから20分〜30分登った後、ファンシーパンレジャンに到着する。竹の庭、宝安禅僧院、レストラン、モールなどを自由に探索できる。') }}  
                    </p>

                </div>
                <!-- <div class="">
                    <img class="position-absolute bottom-0 end-0 " src="{{ asset('assets/images/ptg13.jpg') }}"
                        width="70%" alt="">
                </div> -->

            </div>
        </div>
    </div>
    <footer class="d-flex justify-content-center">
        <div class="d-flex justify-content-center text-center mt-5 mb-5">
            <ion-icon name="at-circle-outline" class="ion-ft"></ion-icon>
            <h5 class="ps-3 fw-bold">2022 | Intership Team A</h5>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
