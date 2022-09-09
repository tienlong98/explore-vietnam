<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/detailyama.css') }}" />
    <title>{{ __('Ca Mau Floating Market') }}</title>
</head>

<body>
    <header class="d-flex justify-content-center align-items-center">
        <div class="title">
            <h1>{{ __('Ca Mau Floating Market') }}</h1>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-5">
                <div class="d-flex justify-content-center align-items-center ">
                    <img src="{{ asset('assets/images/ptg8.jpg') }}" width="60%" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-5">
                <h1 class="mt-5 fs-3">{{ __('Where is Ca Mau Floating Market?') }}</h1>
                <!-- <h1 class="ms-5">such place</h1> -->
                <p class="mt-5">カマウ水上マーケットは、カマウ市の中心部、8 区のガンハオ橋から約 200 メートル、ガンハオ川の端に位置している。
                    カマウ水上マーケットは、<br>西部の他の水上マーケットと同じくらいにぎやかである。 ここには何百ものボートがあり、大小さまざまなボートが商品でいっぱいで、ここで交換したり取引したりできる。
                    この市場がいつ形成されたのかは誰にもわかりませんが、長い間、この市場は特にカマウとサザンリバー地域全般の独特の文化的特徴となっている。</p>
                <div class="d-flex justify-content-center mt-5">
                    <img src="{{ asset('assets/images/muiten.png') }}" class="img-fluid" width="5%"
                        alt="" />
                </div>
            </div>
            <div class="col-lg-12 ">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-5 d-flex justify-content-center">
                        <img src="{{ asset('assets/images/bg.jpg') }}" width="90%" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                <h2 class="mt-5">何を食べよう？</h2>

                <p class="mt-3">
                    カマウ水上マーケットでは、食品、日用品、果物から、トレーダー向けの新鮮な農産物や園芸野菜の卸売購入まで、あらゆる種類の商品を販売している。<br>
                    機会があれば、ガンハオ川のこの特別な市場への訪問におすすめ、太陽の光、風、川、そしてここの人々のシンプルさと誠実さが、リバー
                    ガーデンの豊かな産物と混ざり合い、忘れられない印象を残される。</p>
                <div class="d-flex justify-content-center mt-5">
                    <img src="{{ asset('assets/images/muiten1.png') }}" class="img-fluid" width="5%"
                        alt="" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                <img src="{{ asset('assets/images/ptg.jpg') }}" width="90%" class="mt-5" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5 mb-5 d-flex justify-content-center">
                <img src="{{ asset('assets/images/ptg10.jpg') }}" width="80%" class="mt-5" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5 position-relative">
                <div>
                    <h2 class="mt-5">旅行に最適な時期</h2>
                    <h2 class="fs-3">誰もが一度は訪れたくなる面白いところ</h2>
                    <p class="mt-3">早朝からの取引活動
                        美しい景色、多彩なグッズ
                        人々は親切で正直で素朴 <br>
                        訪問者は一年中いつでもここに来ることができ、 どの市場でも、買い手と売り手は常に賑わっている。 農産物や果物は、季節ごとに移り変わりながらも色鮮やかで、魅了的なところである。
                    </p>

                </div>
                <div class="">
                    <img class="position-absolute bottom-0 end-0 " src="{{ asset('assets/images/ptg13.jpg') }}"
                        width="70%" alt="">
                </div>

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
