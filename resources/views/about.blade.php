<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>
<!-- <link rel="stylesheet" href="./aboutCSS/about.css"> -->
<link rel="stylesheet" href="{{ asset('assets/css/about.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

    @extends('layouts.app')
    @section('content')
    <section>

                <div class="back-ground ">
                    <img src="{{ asset('assets/new-images/back2-tour.png') }}" alt="">
                </div>


                <div class="team-member mt-5">
                    <div class="about-1 ">
                        <h1>{{ __('私たちについて') }}</h1>
                    </div>
                    <div class="container">
                        <div class="about-us">
                            <hr class="hr">
                            <div class="col-lg-12">
                                <div class="row">

                                    <div class="col-lg-5">
                                        <div class="about-img">
                                            <img src="{{ asset('assets/team-image/Picture2.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class=" profile col-lg-6 col-lg-offset-1">
                                        <div class="about-text">
                                            <h2>Doan Ngoc Sinh</h2>
                                            <h3>Project Manager</h3>
                                            <p class="lh-lg">インターンシップで得ること。（学んだこと、楽しかったこと、経験したこと、貢献したこと、役に立つなど） PM立場として、理系―文系関係なく、皆の意見を尊重し、平等に誰でも発言しやすいテーム雰囲気を作っていきたいと思っています。そして、各メンバーの役割や長所を活かして、　意欲的にアイデアを提案するなどの貢献をしたいと考えています。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 mt-5">
                                <div class="row">

                                    <div class="col-lg-5">
                                        <div class="about-img">
                                            <img src="{{ asset('assets/team-image/Picture1.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class=" profile col-lg-6 col-lg-offset-1">
                                        <div class="about-text">
                                            <h2>Nguyen Thi Thanh Huong</h2>
                                            <h4>Project Leader Content</h4>
                                            <p class="lh-lg">NALのインターンシップは私の事務の初体験とは言えます。この大きなプロジェクトを通じてチームワーク、コミュニケーション、リーダーシップという色んな能力を高めるばかりか、ウェブデザイン、管理など新しいことも体験できました。プロジェクトの作成方、順番、人のそれぞれの立場をしっかり理解できました。インターンシップが参加でき、本当によかったと思います。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-5">
                                <div class="row">

                                    <div class="col-lg-5">
                                        <div class="about-img">
                                            <img src="{{ asset('assets/team-image/Picture5.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class=" profile col-lg-6 col-lg-offset-1">s
                                        <div class="about-text">
                                            <h2>Nguyen Huu Thuan</h2>
                                            <h4>Content Editor </h4>
                                            <p class="lh-lg">インターンシップを通じてチームワークの仕組みを理解することができ、プロジェクトの進み方やタスクを作成するシステムを始めて体験しました。チーム内のコミュニケーションや役割分担が大事ということを学べました。このインターンシップを参加してよかったです。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-5">
                                <div class="row">

                                    <div class="col-lg-5">
                                        <div class="about-img">
                                            <img src="{{ asset('assets/team-image/Picture3.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class=" profile col-lg-6 col-lg-offset-1">
                                        <div class="about-text">
                                            <h2>Tieu Luong Phuoc Anh</h2>
                                            <h4>Project Leader Developers </h4>
                                            <p class="lh-lg">リーダーとして皆と一緒にウェブを作るのは楽しいです。皆が熱心だし上手だしそれでありがたいです。インターンシップを通してチームワーク雰囲気に働き機会が有ってすごく嬉しいです。皆と一緒進むと自分の短所、長所を分かり方法と言えます。この体験でもって次回にもっと頑張ります。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-5">
                                <div class="row">

                                    <div class="col-lg-5">
                                        <div class="about-img">
                                            <img src="{{ asset('assets/team-image/Picture4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class=" profile col-lg-6 col-lg-offset-1">
                                        <div class="about-text">
                                            <h2>Pham Thanh Long</h2>
                                            <h4>Developers</h4>
                                            <p class="lh-lg">貴社のインターンシップでは幅広いスキルアップやキャリアパスが挑戦できる環境があるし、若いうちから、能力や個性に応じて、自分が目指したいこと、やりたいことに挑戦でき、自分の理想と一致しました。インターンシップを通じて、新たな知識を学び、意欲的にアイデアを提案するなどの貢献をしたいと考えています。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-5">
                                <div class="row">

                                    <div class="col-lg-5">
                                        <div class="about-img">
                                            <img src="{{ asset('assets/team-image/picture6.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class=" profile col-lg-6 col-lg-offset-1">
                                        <div class="about-text">
                                            <h2>Nguyen Hoang Lan</h2>
                                            <h4>Developers</h4>
                                            <p class="lh-lg">インターンシップで僕はDEVとして役割を持って、プログラミングやコーディングだけでなく、チームのメンバーとのコミュニケーションを大切にしなければなりません。そして、インターンシップのおかげで、職場環境のことがなんとなく理解できるようになりました。それに、チームが目標を達成するため、コツコツ頑張っています。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="hr">

                    </div>
                </div>

                <div class="content">

                    <div id="about">
                        <div class="content-box-lg mt-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="about-item text-center">
                                            <i class="fa fa-low-vision"></i>
                                            <h3>VISSON</h3>

                                            <p>VIET NAM EXPLOREはベトナム内に旅行プラン提供のトップサイトになり、国際舞台におけるベトナム観光業の地位を強化します。
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="about-item text-center">
                                            <i class="fa fa-globe"></i>
                                            <h3>REAL VALUE</h3>

                                            <p>来ベトナムの方に手頃なプランで、十分に楽しめるプランを提供します。
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="about-item text-center">
                                            <i class="fa fa-pencil"></i>
                                            <h3>PURPOSE</h3>

                                            <p>お客様にベトナムの各地の魅力を詳しく素晴らしい体験を伝えたいため、一番良い旅行ウェブサイトを作成します</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="about-item text-center">
                                            <i class="fa fa-file-text"></i>
                                            <h3>CORE VALUE</h3>

                                            <p>安心・安全をベースに、新たな刺激や感動により、人々の心と体に活力をあたえる様々な交流を創造してきました。お客様のカスタマージャーニーに寄り添った「実感価値」の実現に取り組みます。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <footer class="text-center">
                    <p>Copyright &copy; 2022 All rights reserved by freddie Nice Inc</p>
                </footer> -->
                @endsection

            </section>

</body>

</html>
