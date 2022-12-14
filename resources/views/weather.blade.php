<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/css/weather.css') }}" />
    <link rel="icon" href="images/icon.ico">
    <title>VIET NAM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="mini-menu">
        <p>
            <a href="/">
                <ion-icon name="home-outline" class="travel-icon"></ion-icon>
            </a>
        </p>
        <p>
            <a href="./transport">
                <ion-icon name="bicycle-outline" class="travel-icon"></ion-icon>
            </a>
        </p>

        <p>
            <a href="/safety">
                <ion-icon class="travel-icon" name="shield-outline"></ion-icon>
            </a>
        </p>
    </div>

    <div class="container wrap">
        <h1>{{ __('天気') }}</h1>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-5 image">
                    <img id="banner" src="{{ asset('assets/tour_image/yesW.png') }}" alt="safety">
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <ul>
                            <li> <span>天気の変化が早いので、注意が必要だ。</span> </li>
                            <li> <span>風邪薬を持った方がいい。</span> </li>
                            <li> <span>レインコート・日焼け止めの服を準備したほうがいい。</span> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="home-back">
        <p>
            <a href="/">
                <ion-icon name="arrow-back-outline" class="travel-icon"></ion-icon>
        </p>
        <p>
            <a href="/">
                <ion-icon name="home-outline" class="travel-icon"></ion-icon>
            </a>
        </p>
    </div> -->




    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->
</body>

</html>
