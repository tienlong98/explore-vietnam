<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/detailyama.css') }}" />
    <title>{{ __('サパ') }}</title>
</head>

<body>
    <header class="d-flex justify-content-center align-items-center">
        <div class="title">
            <h1>{{ __('サパ') }}</h1>
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
                <h1 class="mt-5 fs-3">{{ __('サパ はどこであるの？') }}</h1>
                <!-- <h1 class="ms-5">such place</h1> -->
                <p class="mt-5">{{ __('ラオカイ省に属するサパ (またはサパ) は、ベトナム北西部に位置する同名の地区にある高地の町です。サパの町は海抜約 1,500m から 1,800m に位置し、住民の大半はキン族と少数民族である。ここ数年、ソーシャルネットワークを「襲撃」しただけですが、サパは前世紀の40年代以来、潜在的な観光地としてフランス人に評価されてきました.サパには、大使館、総督官邸、水力発電システム、200 以上の古典的なヴィラなど、過去のフランスのエリートの足跡が今も残っており、この山の町の隅々がさらに美しくなっています。 .') }}</p>
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
                <h2 class="mt-5">{{ __('何を食べよう？') }}</h2>

                <p class="mt-3">
                <b>{{ __('*サパキッチンの水牛の肉*') }}</b><br>
                {{ __('キッチン バッファローの肉はサパの特産品です。新鮮な水牛の肉をスパイスで丁寧にマリネした後、薪ストーブの煙で火が通るまでスモークし、完全に乾燥させます。再び蒸すか煮沸してから、水で飲むか、みじん切りにしてレモンの皮をもう少し絞る必要があります。芳醇な肉の旨味と刺激的な香り、後味の甘さはまさに「人間の美」の名にふさわしい。') }} <br>              
                <b>{{ __('*サーモンサパ*') }}</b><br>
                {{ __('海だけでなく、サパなどの高地でもトップクラスのサーモンが獲れます。サパサーモン（またはフライドサーモン、ニジマス）は低温の海域に生息することが多いため、肉は柔らかく、脂肪が多すぎず、赤オレンジ色が目を引きます。サパサーモン鍋は一度を食べたい。') }}<br>
                <b>{{ __('*ワキ豚*') }}</b><br>
                {{ __('ワキ豚はモン族が自由に飼育している豚の品種で、小さいながらも非常に「むくみ」が強い豚です。成長した豚の体重は、わきの下で約6kgしかありません。豚肉は赤身と脂身が交互に引き締まっており、炭火で焼くとなんとも言えない美味しさです。豚肉のわきの下を食べるときは、アップルサイダーを飲むことを忘れないでください。喜びをより完全なものにします。') }}
            </p>
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
                    <h2 class="mt-5">{{ __('人気なスポット') }}</h2>
                    <!-- <h2 class="fs-3">誰もが一度は訪れたくなる面白いところ</h2> -->
                    <p class="mt-3">
                        <b>{{ __('*銀の滝*') }}</b><br>
                        {{ __('サパの町の中心部から西​​へ約 12km のところに、ライ チャウに向かう途中の有名な景勝地である Thac Bat があります。 200mの高さから流れ落ちる白い滝は、まるで煙を吐き出しているようで、風の音と混ざり合って迫力ある音を奏でます。 オ・クイホーを流れる清流はこの滝から作られています。') }}<br>
                        <b>{{ __('*愛の滝*') }}</b><br>
                        {{ __('愛の滝は白銀の滝に比べてやや標高が低い (約 100m) だけですが、さまざまなアドベンチャー ツーリズムで多くの観光客を魅了しています。 「専門家」は、ロープスイングスケジュールで持久力に挑戦するためにここに来ることがよくあります。高所恐怖症や体力が弱い人には禁忌です。') }}
                            <br> {{ __('遠くから見ると、愛の滝は雄大な山々に囲まれた巨大な帽子のように見えます. 滝は、O Quy Ho パス (3 km) と町の中心部 (4 km) の間に位置しているため、日中に多くのサパの観光スポットを探索したい方に最適です。 滝のふもとで時間を過ごして、黄金の流れが太陽の下で輝くのを見て、ここの豊かな動植物を鑑賞することを忘れないでください.') }}<br>
                        <b>{{ __('*ブラシのコピー*') }}</b><br>
                        {{ __('サパの町の中心部から南東へ約8km進むと、少数民族の黒人モン族の居住地であるラオチャイ村に到着します。 山と森の間に位置し、曲がりくねった川に面した丘の中腹に不安定に横たわる瓦屋根の木造家屋の群れ - Ban Lao Chai は、絵画から出てきた素朴な村の写真のようなものです。') }}<br>
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