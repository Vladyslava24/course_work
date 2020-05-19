@extends('layouts.app')

@section('title')
    World&travel
@endsection

@section('content')
    <main>
        <div class="hero-section">
            <div class="mySlides fade">
                <div class="hero-div p1">Відкривай світ з нами</div>
                <img src="/img/jamie-fenn-WdQuEEJe-O0-unsplash.jpg">
            </div>
            <div class="mySlides fade">
                <div class="hero-div p2">Насолоджуйся життям</div>
                <img src="/img/mantas-hesthaven-_g1WdcKcV3w-unsplash.jpg">
            </div>
            <div class="mySlides fade">
                <div class="hero-div p3">World&Travel</div>
                <img src="/img/will-truettner-7ZZ_FmVelQY-unsplash.jpg">
            </div>
        </div>
        <div class="sales">
            <p class="cards-title">Спеціальні пропозиції</p>
            <div class="sales-container">
                <a class="cards-btn" href="#">
                    <div class="cards card1">
                        <img src="/img/simon-matzinger-boyXZfqpwpU-unsplash.jpg">
                        <div class="cards-text">
                            <h2>FUN&SUN Albatros Aqua Vista</h2>
                            <p>Єгипет,Хургада</p>
                            <h3>від 10 963 UAH</h3>
                        </div>
                    </div>
                </a>
                <a class="cards-btn" href="#">
                    <div class="cards card2">
                        <img src="/img/zq-lee-VbDjv8-8ibc-unsplash.jpg">
                        <div class="cards-text">
                            <h2>Citymax Hotel, Al Barsha at the Mall</h2>
                            <p>ОАЕ,Дубаї</p>
                            <h3>від 11 543 UAH</h3>
                        </div>
                    </div>
                </a>
                <a class="cards-btn" href="#">
                    <div class="cards card3">
                        <img src="/img/alexandre-chambon-aapSemzfsOk-unsplash.jpg">
                        <div class="cards-text">
                            <h2>Estival Park Hotel Resort</h2>
                            <p>Іспанія,Ла Пінеда</p>
                            <h3>від 15 541 UAH</h3>
                        </div>
                    </div>
                </a>
                <a class="cards-btn" href="#">
                    <div class="cards card4">
                        <img src="/img/sean-o-KMn4VEeEPR8-unsplash.jpg">
                        <div class="cards-text">
                            <h2>SMART Serra Park Hotel</h2>
                            <p>Туреччина,Соргун</p>
                            <h3>від 11 256 UAH</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="tours">
            <div class="tours-text">Популярні тури</div>
            <div class="row">
                <div class="column">
                    <div class="cards-tours card1">
                        <img src="/img/rebe-adelaida-zunQwMy5B6M-unsplash.jpg">
                        <div class="text-block">
                            <h2>Olympic Palladium</h2>
                            <p>від 10 458 UAH</p>
                            <a class="more" href="{{route ('one-tour')}}">Дізнатись більше</a>
                        </div>
                    </div>
                    <div class="cards-tours card1">
                        <img src="/img/tim-trad-DxupQhBmu4c-unsplash.jpg">
                        <div class="text-block">
                            <h2>Triton Garden</h2>
                            <p>від 14 125 UAH</p>
                            <a class="more" href="{{route ('one-tour')}}">Дізнатись більше</a>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="cards-tours card1">
                        <img src="/img/will-truettner-7ZZ_FmVelQY-unsplash.jpg">
                        <div class="text-block">
                            <h2>MARILENA</h2>
                            <p>від 15 548 UAH</p>
                            <a class="more" href="{{route ('one-tour')}}">Дізнатись більше</a>
                        </div>
                    </div>
                    <div class="cards-tours card1">
                        <img src="/img/ibrahim-rifath-Y6tBl0pTe-g-unsplash.jpg">
                        <div class="text-block">
                            <h2>Grecotel Marine Palace</h2>
                            <p>від 17 658 UAH</p>
                            <a class="more" href="{{route ('one-tour')}}">Дізнатись більше</a>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="cards-tours card3">
                        <img class="img" src="/img/photo_2020-05-13_12-51-49.jpg">
                        <div class="text-block">
                            <h2>Almyrida Beach</h2>
                            <p>від 13 457 UAH</p>
                            <a class="more" href="{{route ('one-tour')}}">Дізнатись більше</a>
                        </div>
                    </div>
                    <div class="cards-tours card1">
                        <img src="/img/jonathan-gallegos-_vA2q0-NroU-unsplash.jpg">
                        <div class="text-block">
                            <h2>Central Hersonissos</h2>
                            <p>від 15 789 UAH</p>
                            <a class="more" href="{{route ('one-tour')}}">Дізнатись більше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="book-tour">
            <div class="hero-text">
                <div class="book-text">Відправимося в подорож разом?</div>
                <a class="btn book" href="{{route ('tour')}}">Забронювати тур</a>
            </div>
        </div>
    </main>
@endsection
