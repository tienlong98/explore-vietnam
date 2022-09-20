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

    <title>{{ __('ラング ドゥア ベイ マウ') }}</title>
</head>

<body>
    <div class="content-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 content-1-left">
                    <img src="{{ asset('assets/new-images/rungdua10.jpg') }}" width="50%" alt="" />
                    <img src="{{ asset('assets/new-images/rungdua2.jpg') }}" class="fix-vitri1" width="30%" alt="" />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 content-1-right">
                    <h1>{{ __('ラング ドゥア ベイ マウ') }}</h1>
                    <p>
                    {{ __('ベイ マウ ココナッツ フォレストは、ホイアンの有名なエコツーリズム エリアです。ここに来ると、バスケットボートに座って静かな空間の真ん中にある緑のココナッツの森を訪れ、バスケットダンス、ボートレースを鑑賞し、地元の特産品を楽しむことができます.') }} <br>
               {{ __('ベイ マウ ココナッツ フォレストは、多くの観光客がホイアンの旅程で訪れる目的​​地です。この場所は、多くの新しくて興味深い経験をもたらすことを約束します。旅を完了するために、この緑のココナッツの森を探索する前に、次の重要なものをすぐにまとめてください!') }}<br>
               {{ __('ベイ マウ ココナッツ フォレストは、ホイアン市から約 3 km の場所にあり、地元ではカム タン ココナッツ フォレストとしても知られています。ここは有名なエコツーリズム エリアであり、訪問者は川の自然、広大なココナッツの森、素朴なバスケット ボートについて多くの体験をすることができます。') }}

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
            <h2 class="fw-bold">{{ __('*歴史*') }}</h2>
            <p class="fs-5">
            {{ __('レジスタンス戦争中、ココナッツの森は重要な革命基地であり、多くの敵の戦いに勝利するのに役立ちました。 今日、広大なココナッツの森の自然の美しさを利用して、この場所は有名なエコツーリズムエリアとホイアンの有名な観光地の1つになるように開発されました.') }}<br>
               {{ __('地元の人々によると、カム タン ココナッツの森は約 200 年前から存在していました。 当時、西南地域からの移住者がニパの品種を持ち込んでこの地域に植えました。 水と土の組み合わせのおかげで、木は徐々に増殖し、約 7 エーカー (7 ヘクタール) の大きな森に発展しました。 ベイ マウ ココナッツ フォレストという名前もそこから来ています (現在、ココナッツ フォレストは最大 100 ヘクタールの面積をカバーしています)。') }}

            </p>
        </div>
    </div>
    <div class="content-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 content-3-left mt-5 d-flex align-items-center">
                    <div>
                        <h1>{{ __('*何を遊ぶ*') }}</h1>
                        <p>
                        {{ __('ベイ マウ ココナッツ フォレスト エコ ツーリズム エリアでは、さまざまなサービスを提供して、訪問者に予想外の興味深い体験を提供しています。 それは多くの人がここに来るときの忘れられない気持ちである。') }}</h2>
                   <p class="mt-3">
                      <b>{{ __('*バスケット ボートでの観光*') }}</b><br>
                      {{ __('緑のココナッツの木立をバスケット ボートに座って新鮮な空気を楽しむことは、多くの人々に愛されているユニークな体験です。 ベイ マウ ココナッツ フォレストの観光エリアには、2 種類のバスケット ボートがあり、小型タイプは 2 人乗り、大型タイプは 4 人乗りです。 散歩や観光の旅の途中で、椰子の森や遠く離れたクアン族の民謡のメロディーにまつわる興味深い話を聞くことができます。') }}<br>
                       <!-- <b>{{ __('*かご踊りや競艇観戦*') }}</b><br>
                       {{ __('ウォーキングや観光のほか、かごや競艇などの迫力あるパフォーマンスも楽しめます。 確かに、「アーティスト」がボビングバスケットボートで滑らかで非常に速く印象的な動きでバランスを取る能力に驚かれることでしょう。 続いてはボートレースのパフォーマンスもスリリングで、ライダーのやる気を引き出す歓声と歓声も忘れないでください。') }}<br>
                       <b>{{ __('*網を投げて魚を捕る*') }} </b><br>
                       {{ __('網を投げて魚を捕るというのは、ホイアンの椰子の森に来たら多くの人が期待する活気あるパフォーマンスです。') }}<br>
                       {{ __('素朴で独創的な漁師の姿をこの目で見ることができます。') }} <br>
                       <b>{{ __('*椰子の葉でお土産を作る*') }} </b><br>
                       {{ __('湾マウの椰子の森のツアー中に、時計、指輪、イナゴ、部族の帽子など、船頭から椰子の葉で作られたお土産が渡されます。クアンの人々のかわいらしさ、熱意、素朴さ。 おじいちゃんおばちゃんも一緒に自分好みのアイテム作りを指導してくれます。') }}<br>
                       <b>{{ __('*Cam Thanh 村へのサイクリング*') }} </b><br>
                       {{ __('緑のココナッツの森を眺めた後、自転車をレンタルして Cam Thanh 村を散策します。 広大な田んぼの美しいのどかな空間に浸り、熟した米の香りとともに田舎の空気を胸いっぱいに吸い込む旅。') }}<br>
                       <b>{{ __('*地元の人々の家でホイアンの特産品を楽しむ*') }} </b><br>
                       {{ __('ホイアンのココナッツの森を発見する旅では、この村で素朴な生活の最も本物の体験をするために地元の人々の招待を躊躇しないでください. これ. 春巻き、甘酸っぱいエビのサラダ、バナナの花のサラダ、セントラル パンケーキなどのおいしい料理をお楽しみいただけます。また、ベイ マウ ココナッツ フォレスト レストランでもこれらのおいしい料理をお楽しみいただけます。') }} -->

                        </p>
                        <div class="d-flex justify-content-center mt-5">
                            <img src="{{ asset('assets/images/muiten1.png') }}" class="img-fluid" width="10%"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 content-3-right">
                    <img src="{{ asset('assets/new-images/rungdua5.jpg') }}" width="50%" alt="" />
                    <img src="{{ asset('assets/new-images/rungdua11.jpg') }}" class="fix-vitri2" width="50%" alt="" />
                        
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
                <a href="{{ asset('assets/new-images/rung-dua.jpg') }}" data-toggle="lightbox" data-title="Bai Sao">
                    <img class="img-fluid myimg" src="{{ asset('assets/new-images/rung-dua.jpg') }}" alt="" />
                </a>
            </div>
            <div class="image">
                <a href="{{ asset('assets/images/bg-home2.jpg') }}" data-toggle="lightbox" data-title="Bai Sao"><img
                        class="myimg" src="{{ asset('assets/images/bg-home2.jpg') }}" alt="" /></a>
            </div>
            <div class="image">
                <img class="myimg" src="{{ asset('assets/new-images/rungdua4.jpg') }}" alt="" />
            </div>
            <div class="image">
                <img class="myimg" src="{{ asset('assets/new-images/rungdua3.jpg') }}" alt="" />
            </div>
            <div class="image">
                <img class="myimg" src="{{ asset('assets/new-images/rungdua7.jpg') }}" alt="" />
            </div>
            <div class="image">
                <img class="myimg" src="{{ asset('assets/images/kp12.jpg') }}" alt="" />
            </div>
            <div class="image">
                <img class="myimg" src="{{ asset('assets/new-images/rungdua9.jpg') }}" alt="" />
            </div>
            <div class="image">
                <img class="myimg" src="{{ asset('assets/new-images/rungdua4-1.png') }}" alt="" />
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
