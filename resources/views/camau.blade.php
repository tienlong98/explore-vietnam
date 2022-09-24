<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css"
        integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/phuquoc.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Shippori Mincho', serif !important;
        }
    </style>
        <title>{{ __('カマウ水上マーケット') }}</title>

</head>

<body>
    <div class="content-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 content-1-left">
                    <img src="{{ asset('assets/new-images/camau1.jpg') }}" width="50%" alt="" />
                    <img src="{{ asset('assets/images/kp13.jpg') }}" class="fix-vitri1" width="40%" alt="" />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 content-1-right">
                    <h1>{{ __('カマウ水上マーケット') }}</h1>
                    <p>
                    {{ __('カマウ水上マーケットは、カマウ市の中心部、8 区のガンハオ橋から約 200 メートル、ガンハオ川の端に位置している。 カマウ水上マーケットは、西部の他の水上マーケットと同じくらいにぎやかである。 ここには何百ものボートがあり、大小さまざまなボートが商品でいっぱいで、ここで交換したり取引したりできる。 この市場がいつ形成されたのかは誰にもわかりませんが、長い間、この市場は特にカマウとサザンリバー地域全般の独特の文化的特徴となっている。') }}
                    </p>
                    <div class="d-flex justify-content-center mt-5">
                        <img src="{{ asset('assets/images/muiten.png') }}" class="img-fluid" width="10%" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-2 d-flex justify-content-center">
        <div class="fix-w mt-5 mb-5">
            <h2 class="fw-bold">{{ __('何を食べよう？') }}</h2>
            <p class="fs-5">
            {{ __('カマウ水上マーケットでは、食品、日用品、果物から、トレーダー向けの新鮮な農産物や園芸野菜の卸売購入まで、あらゆる種類の商品を販売している。機会があれば、ガンハオ川のこの特別な市場への訪問におすすめ、太陽の光、風、川、そしてここの人々のシンプルさと誠実さが、リバー ガーデンの豊かな産物と混ざり合い、忘れられない印象を残される。') }}
            </p>
        </div>
    </div>
    <div class="content-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 content-3-left mt-5 d-flex align-items-center">
                    <div>
                    <h1 class="mt-5">{{ __('旅行に最適な時期') }}</h1>
                   <h2 class="fs-3">{{ __('誰もが一度は訪れたくなる面白いところ') }}</h2>
                   <p class="mt-3">{{ __('早朝からの取引活動美しい景色、多彩なグッズ人々は親切で正直で素朴') }} <br>
                   {{ __('訪問者は一年中いつでもここに来ることができ、 どの市場でも、買い手と売り手は常に賑わっている。 農産物や果物は、季節ごとに移り変わりながらも色鮮やかで、魅了的なところである。') }}</p>

                        <div class="d-flex justify-content-center mt-5">
                            <img src="{{ asset('assets/images/muiten1.png') }}" class="img-fluid" width="10%"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 content-3-right">
                    <img src="{{ asset('assets/new-images/camau8.jpg') }}" width="50%" alt="" />
                    <img src="{{ asset('assets/new-images/camau5.jpg') }}" class="fix-vitri2" width="50%" alt="" />
                </div>
            </div>
        </div>
    </div>
    <div class="content-4">
        <div class="thuvien pb-5">
            <h4>photo library</h4>
        </div>
        <div class="photo">
            <div class="image">
                <a href="{{ asset('assets/new-images/camau6.jpg') }}" data-toggle="lightbox" data-title="Bai Sao">
                    <img class="img-fluid myimg" src="{{ asset('assets/new-images/camau6.jpg') }}" alt="" />
                </a>
            </div>
            <div class="image">
                <a href="{{ asset('assets/new-images/camau1.jpg') }}" data-toggle="lightbox" data-title="Bai Sao"><img
                        class="myimg" src="{{ asset('assets/new-images/camau1.jpg') }}" alt="" /></a>
            </div>
            <div class="image">
                <img class="myimg" src="{{ asset('assets/images/kp14.png') }}" alt="" />
            </div>
            <div class="image">
                <img class="myimg" src="{{ asset('assets/images/kp9.jpg') }}" alt="" />
            </div>
            <div class="image">
                <img class="myimg" src="{{ asset('assets/new-images/camau6.jpg') }}" alt="" />
            </div>
            <div class="image">
                <img class="myimg" src="{{ asset('assets/images/kp12.jpg') }}" alt="" />
            </div>
            <div class="image">
                <img class="myimg" src="{{ asset('assets/new-images/camau7.jpg') }}" alt="" />
            </div>
            <div class="image">
                <img class="myimg" src="{{ asset('assets/images/kp13.jpg') }}" alt="" />
            </div>
            <div class="image">
                <img class="myimg" src="{{ asset('assets/images/bg-home2.jpg') }}" alt="" />
            </div>
        </div>
    </div>
    <footer class="d-flex justify-content-center">
        <div class="d-flex justify-content-center text-center mt-5 mb-5">
            <ion-icon name="at-circle-outline" class="ion-ft"></ion-icon>
            <h5 class="ps-3 fw-bold">2022 | Intership Team A</h5>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js"
        integrity="sha512-igl8WEUuas9k5dtnhKqyyld6TzzRjvMqLC79jkgT3z02FvJyHAuUtyemm/P/jYSne1xwFI06ezQxEwweaiV7VA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"
        integrity="sha512-Y2IiVZeaBwXG1wSV7f13plqlmFOx8MdjuHyYFVoYzhyRr3nH/NMDjTBSswijzADdNzMyWNetbLMfOpIPl6Cv9g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>

</body>

</html>
