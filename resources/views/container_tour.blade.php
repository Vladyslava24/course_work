@extends('layouts.containers')

@section('title')
    Тури
@endsection

@section('content')
<div class="main">
    <div class="banner">
        <div class="search">
            <div id="tour"><span>Пошук турів</span></div>
            <div class="container form">
                    <form>
                        <div class="forms">
                            <div>
                                <div class="form_text"><span>Країна</span></div>
                                <input class="form-control mr-sm-2" type="text" placeholder="Search..." aria-label="Search">
                            </div>
                            <div>
                                <div class="form_text">
                                    <span>Виїзд з</span>
                                </div>
                                <input class="form-control mr-sm-2" type="text" placeholder="Search..." aria-label="Search">
                            </div>
                            <div>
                                <div class="form_text"><span>Тривалість</span></div>
                                <input class="form-control mr-sm-2" type="text" placeholder="Search..." aria-label="Search">
                            </div>
                            <div class="form">
                                <button>
                                    <span>Пошук</span>
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
        </div>
    </div>
    <div class="container content">
        <div class="title">
            <span>Всі тури</span>
        </div>
        <div class="row row1">
            <div class="col-sm-4">
                <div class="card">
                    <div class="picture" id="venecia">
                        <div class="grey">
                            <img src="pictures/tour/venecia.png" alt="#">
                        </div>
                        <span class="country">Італія, Венеція</span>
                        <br>
                        <span class="hotel">Olympic Palladium</span>
                        <br>
                        <span class="price">від 10 458 UAH</span>
                        <br>
                        <button class="button"><span>Дізнатись більше</span></button>
                    </div>
                </div>
            </div>
            <div class="space_mob"></div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="picture" id="dubai">
                        <div class="grey">
                            <img src="pictures/tour/oae.png" alt="#">
                        </div>
                        <span class="country">ОАЕ, Дубай</span>
                        <br>
                        <span class="hotel">Citymax Bur Dubai</span>
                        <br>
                        <span class="price">від 22 200 UAH</span>
                        <br>
                        <button class="button"><span>Дізнатись більше</span></button>
                    </div>
                </div>
            </div>
            <div class="space_mob"></div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="picture" id="stambul">
                        <div class="grey">
                            <img src="pictures/tour/stambul.png" alt="#">
                        </div>
                        <span class="country">Туреччина, Стамбул</span>
                        <br>
                        <span class="hotel">Grecotel Marine Palace</span>
                        <br>
                        <span class="price">від 17 658 UAH</span>
                        <br>
                        <button class="button"><span>Дізнатись більше</span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <div class="row row2">
        <div class="col-sm-4">
            <div class="card">
                <div class="picture" id="hurgada">
                    <div class="grey">
                        <img src="pictures/tour/hurgada.png" alt="#">
                    </div>
                    <span class="country">Єгипет, Хургада</span>
                    <br>
                    <span class="hotel">Roma Host Way</span>
                    <br>
                    <span class="price">від 18 578 UAH</span>
                    <br>
                    <button class="button"><span>Дізнатись більше</span></button>
                </div>
            </div>
        </div>
            <div class="space_mob"></div>
        <div class="col-sm-4">
            <div class="card">
                <div class="picture" id="marsa-alam">
                    <div class="grey">
                        <img src="pictures/tour/marsa-alam.png" alt="#">
                    </div>
                    <span class="country">Єгипет, Марса-Алам</span>
                    <br>
                    <span class="hotel">Royal Paradise</span>
                    <br>
                    <span class="price">від 18 756 UAH</span>
                    <br>
                    <button class="button"><span>Дізнатись більше</span></button>
                </div>
            </div>
        </div>
            <div class="space_mob"></div>
        <div class="col-sm-4">
            <div class="card">
                <div class="picture" id="kastelorizo">
                    <div class="grey">
                        <img src="pictures/tour/casteloriso.png" alt="#">
                    </div>
                    <span class="country">Греція, Кастелоризо</span>
                    <br>
                    <span class="hotel">MARILENA</span>
                    <br>
                    <span class="price">від 15 548 UAH</span>
                    <br>
                    <button class="button"><span>Дізнатись більше</span></button>
                </div>
            </div>
        </div>
    </div>
        <div class="space"></div>
        <div class="row row3">
            <div class="col-sm-4">
                <div class="card">
                    <div class="picture" id="antalia">
                        <div class="grey">
                            <img src="pictures/tour/antalia.png" alt="#">
                        </div>
                        <span class="country">Туреччина, Анталія</span>
                        <br>
                        <span class="hotel">Ares Dream</span>
                        <br>
                        <span class="price">від 14 567 UAH</span>
                        <br>
                        <button class="button"><span>Дізнатись більше</span></button>
                    </div>
                </div>
            </div>
            <div class="space_mob"></div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="picture" id="evia">
                        <div class="grey">
                            <img src="pictures/tour/evia.png" alt="#">
                        </div>
                        <span class="country">Греція, Евія</span>
                        <br>
                        <span class="hotel">Central Hersonissos</span>
                        <br>
                        <span class="price">від 15 789 UAH</span>
                        <br>
                        <button class="button"><span>Дізнатись більше</span></button>
                    </div>
                </div>
            </div>
            <div class="space_mob"></div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="picture" id="kollaga">
                        <div class="grey">
                            <img src="pictures/tour/kollaga.png" alt="#">
                        </div>
                        <span class="country">Шрі-Ланка, Когалла</span>
                        <br>
                        <span class="hotel">Almyrida Beach</span>
                        <br>
                        <span class="price">від 13 457 UAH</span>
                        <br>
                        <button class="button"><span>Дізнатись більше</span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <div class="row row4">
            <div class="col-sm-4">
                <div class="card">
                    <div class="picture" id="pattaya">
                        <div class="grey">
                            <img src="pictures/tour/pattaya.png" alt="#">
                        </div>
                        <span class="country">Тайланд, Паттайя</span>
                        <br>
                        <span class="hotel">Carunda Hotel</span>
                        <br>
                        <span class="price">від 41 241 UAH</span>
                        <br>
                        <button class="button"><span>Дізнатись більше</span></button>
                    </div>
                </div>
            </div>
            <div class="space_mob"></div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="picture" id="halkidiki">
                        <div class="grey">
                            <img src="pictures/tour/halkidiki.png" alt="#">
                        </div>
                        <span class="country">Греція, Халкідікі</span>
                        <br>
                        <span class="hotel">Triton Garden</span>
                        <br>
                        <span class="price">від 14 125 UAH</span>
                        <br>
                        <button class="button"><span>Дізнатись більше</span></button>
                    </div>
                </div>
            </div>
            <div class="space_mob"></div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="picture" id="praga">
                        <div class="grey">
                            <img src="pictures/tour/praga.jpg" alt="#">
                        </div>
                        <span class="country">Європа</span>
                        <br>
                        <span class="hotel">Тур Прага + Дрезден</span>
                        <br>
                        <span class="price">від 2 965 UAH</span>
                        <br>
                        <button class="button"><span>Дізнатись більше</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
