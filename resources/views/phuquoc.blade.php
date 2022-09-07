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

    <title>PHU QUOC</title>
</head>

<body>
    <div class="content-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 content-1-left">
                    <img src="{{ asset('assets/images/kp8.jpg') }}" width="50%" alt="" />
                    <img src="{{ asset('assets/images/kp14.png') }}" class="fix-vitri1" width="30%" alt="" />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 content-1-right">
                    <h1>Wellcome to PHU QUOC</h1>
                    <p>
                        ホイアン市内からバイクで約10分かかる。ココナッツの森が広がるホイアンの緑の肺によく知られている。ここで一日中に多くの特別な活動に体験できる。かご船や競艇、カニ釣りや漁網などのエキサイティングなパフォーマンスを楽しんでみてください。
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
            <h2 class="fw-bold">TIEU DE VE PHU QUOC</h2>
            <p class="fs-5">
                ここでは、素朴で独創的な漁師の姿を直接見ることができます。さらに、時計、指輪、イナゴなど、船頭や叔父からココナッツの葉で作られたお土産が贈られます。
            </p>
        </div>
    </div>
    <div class="content-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 content-3-left mt-5 d-flex align-items-center">
                    <div>
                        <h1>TIEU DE GIOI THIEU PHU QUOC</h1>
                        <p>
                            ホイアン市の形成と発展の歴史についてもっと知りたい場合は、アートショーホイアンに参加してください思い出 - 25,000 平方メートルの屋外ステージに 500
                            人の俳優が集まり、高度な音響と照明技術がサポートされます。
                        </p>
                        <div class="d-flex justify-content-center mt-5">
                            <img src="{{ asset('assets/images/muiten1.png') }}" class="img-fluid" width="10%"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 content-3-right">
                    <img src="{{ asset('assets/images/kp3.jpg') }}" width="50%" alt="" />
                    <img src="{{ asset('assets/images/kp4.jpg') }}" class="fix-vitri2" width="50%" alt="" />
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
                <a href="{{ asset('assets/images/kp1.jpg') }}" data-toggle="lightbox" data-title="Bai Sao">
                    <img class="img-fluid myimg" src="{{ asset('assets/images/kp1.jpg') }}" alt="" />
                </a>
            </div>
            <div class="image">
                <a href="{{ asset('assets/images/bg-home2.jpg') }}" data-toggle="lightbox" data-title="Bai Sao"><img
                        class="myimg" src="{{ asset('assets/images/bg-home2.jpg') }}" alt="" /></a>
            </div>
            <div class="image">
                <img class="myimg" src="{{ asset('assets/images/kp14.png') }}" alt="" />
            </div>
            <div class="image">
                <img class="myimg" src="{{ asset('assets/images/kp15.jpg') }}" alt="" />
            </div>
            <div class="image">
                <img class="myimg" src="{{ asset('assets/images/kp4.jpg') }}" alt="" />
            </div>
            <div class="image">
                <img class="myimg" src="{{ asset('assets/images/kp12.jpg') }}" alt="" />
            </div>
            <div class="image">
                <img class="myimg" src="{{ asset('assets/images/kp5.jpg') }}" alt="" />
            </div>
            <div class="image">
                <img class="myimg" src="{{ asset('assets/images/kp13.jpg') }}" alt="" />
            </div>
            <div class="image">
                <img class="myimg" src="{{ asset('assets/images/kp9.jpg') }}" alt="" />
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
