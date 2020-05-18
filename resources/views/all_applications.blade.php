@extends('layouts.app')

@section('title')
    Всі заявки
@endsection

@section('content')
<div class="container main">
        <div class="title"><span>Всі заявки</span></div>
            <div class="application">
                <div class="text"><span>Вибрана пропозиція</span></div>
                <div class="column">
                <div class="tour-card">
                    <div class="img">
                        <img src="pictures/hotel_card.png">
                    </div>
                    <div class="description">
                        <div class="hotel"><span>Estival Park Hotel Resort</span></div>
                        <div class="place"><span>Іспанія, Ла Пінеда</span></div>
                        <div class="price"><span>15 541 UAH</span></div>
                    </div>
                </div>
                <div class="tour-inform">
                    <span><b>Звідки:</b> Київ</span><br>
                    <span><b>Дата вильоту:</b> 26.07.2020</span><br>
                    <span><b>Куди:</b> Іспанія, Ла Пінеда</span><br>
                    <span><b>Кількість ночей:</b> 7 ночей </span><br>
                    <span><b>Тип харування:</b> Сніданок</span><br>
                    <div class="details">
                        <button>
                            <span>Детальніше</span>
                        </button>
                    </div>
                </div>
            </div>
                <div class="date">
                    <span>Дата створення заявки: 26.06.2020</span>
                </div>
        </div>
        <div class="space"></div>
        <div class="application">
            <div class="text"><span>Вибрана пропозиція</span></div>
            <div class="column">
                <div class="tour-card">
                    <div class="img">
                        <img src="pictures/cruise-app.png">
                    </div>
                    <div class="description">
                        <div class="hotel"><span>Середземномор'я</span></div>
                        <div class="liner"><span>на борту лайнера</span><br>
                                           <span>"Costa Fascinosa"</span></div>
                        <div class="price"><span>6 235 UAH</span></div>
                    </div>
                </div>
                <div class="cruise-inform">
                    <span><b>Напрямок:</b> Середземномор'я з<br>Чивітавекк'ї (Рим) до Барселони</span><br>
                    <span><b>Кількість ночей:</b> 3 ночей</span><br>
                    <span><b>Відправлення:</b> 25.03.2020</span><br>
                    <span><b>Лайнер:</b> “Ecstasy”</span><br>
                    <span><b>Маршрут:</b> Чивітавекк'я (Рим) -Ліворно<br>
                                          - Канни - Пальма, о. Майорка,<br>
                                          Балеарські о-ви - Барселона</span><br>
                    <div class="details">
                        <button>
                            <span>Детальніше</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="date">
                <span>Дата створення заявки: 09.07.2019</span>
            </div>
        </div>
        <div class="space"></div>
    </div>
@endsection
