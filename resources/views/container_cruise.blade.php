@extends('layouts.app')

@section('title')
    Круїзи
@endsection

@section('content')
<div class="main">
    <div class="banner">
        <div class="search">
            <div id="tour"><span>Пошук круїзів</span></div>
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
        <span>Всі круїзи</span>
    </div>
    <div class="row row1">
        <div class="col-sm-4">
            <div class="card">
                <div class="picture" id="venecia">
                    <div class="grey">
                        <img src="pictures/cruise/mediterranean.jpeg" alt="#">
                    </div>
                    <span class="country">Середземномор'я</span>
                    <br>
                    <span class="liner">на борту лайнера</span>
                    <br>
                    <span class="liner">“Costa Fascinosa”</span>
                    <br>
                    <span class="price-c"> від 6 235 UAH</span>
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
                        <img src="pictures/cruise/nother_europe.jpg" alt="#">
                    </div>
                    <span class="country">Північна Європа</span>
                    <br>
                    <span class="liner">на борту лайнера </span>
                    <br>
                    <span class="liner">“Ventura”</span>
                    <br>
                    <span class="price-c">від  7 518 UAH</span>
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
                        <img src="pictures/cruise/oae_per.jpg" alt="#">
                    </div>
                    <span class="country">ОАЕ і Перська Затока</span>
                    <br>
                    <span class="liner">на борту лайнера</span>
                    <br>
                    <span class="liner">“Costa Diadema”</span>
                    <br>
                    <span class="price-c">від 6 265 UAH</span>
                    <br>
                    <button class="button"><span>Дізнатись більше</span></button>
                </div>
            </div>
        </div>
        <div class="space_mob"></div>
    </div>
    <div class="space"></div>
    <div class="row row2">
        <div class="col-sm-4">
            <div class="card">
                <div class="picture" id="hurgada">
                    <div class="grey">
                        <img src="pictures/cruise/caribs.jpg" alt="#">
                    </div>
                    <span class="country">Карибські острови</span>
                    <br>
                    <span class="liner">на борту лайнера</span>
                    <br>
                    <span class="liner">“Ecstasy”</span>
                    <br>
                    <span class="price-c">від 6 533 UAH</span>
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
                        <img src="pictures/cruise/south-east-asia.jpg" alt="#">
                    </div>
                    <span class="country">Південно-Східна Азія</span>
                    <br>
                    <span class="liner">на борту лайнера</span>
                    <br>
                    <span class="liner"> “Diamond Princess”</span>
                    <br>
                    <span class="price-c">від 11 843 UAH</span>
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
                        <img src="pictures/cruise/greek_italia.jpg" alt="#">
                    </div>
                    <span class="country">Греція + Італія</span>
                    <br>
                    <span class="liner">на борту лайнера</span>
                    <br>
                    <span class="liner">“Costa”</span>
                    <br>
                    <span class="price-c">від 34 215 UAH</span>
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
                        <img src="pictures/cruise/baltika.jpg" alt="#">
                    </div>
                    <span class="country">Балтика</span>
                    <br>
                    <span class="liner">на борту лайнера</span>
                    <br>
                    <span class="liner">“Norwegian Escape</span>
                    <br>
                    <span class="price-c">від  30 219 UAH</span>
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
                        <img src="pictures/cruise/canars.jpg" alt="#">
                    </div>
                    <span class="country">Канарські острови</span>
                    <br>
                    <span class="liner">на борту лайнера</span>
                    <br>
                    <span class="liner">“AIDAmar”</span>
                    <br>
                    <span class="price-c">від  33 549 UAH</span>
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
                        <img src="pictures/cruise/red-see.jpg" alt="#">
                    </div>
                    <span class="country">Червоне море</span>
                    <br>
                    <span class="liner">на борту лайнера</span>
                    <br>
                    <span class="liner">“Harmony G”</span>
                    <br>
                    <span class="price-c">від 25 000 UAH</span>
                    <br>
                    <button class="button"><span>Дізнатись більше</span></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
