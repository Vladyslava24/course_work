@extends('layouts.app')

@section('title')
    Про нас
@endsection

@section('content')

<div class="page">

    <section class="section_blue">
        <div class="container">

            <div class="section__header">
                <h2 class="section_blue__title">Історія про нас</h2>
                <div class="section_blue__text">
                    <p>Туристичне агентство "World&Travel" знає, як зробити відпочинок незабутнім, як перетворити звичайну відпустку у справжній океан нових вражень. "World&Travel" вже 5 років успішно працює на ринку туризму. Тисячі туристів подорожують з нами постійно. Кожен маршрут опрацьовується до дрібниць, а з групами їздять тільки досвідчені гіди. І при цьому ми не зупиняємося на досягнутому!</p>
                </div>
            </div>

            <div class="card">
                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="img_about/b1.jpg" alt="">
                        </div>
                        <div class="card__text">Якісна підтримка</div>
                    </div>
                </div>

                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="img_about/b2.jpg" alt="">
                        </div>
                        <div class="card__text">Найкращі маршрути</div>
                    </div>
                </div>

                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="img_about/b3.jpg" alt="">
                        </div>
                        <div class="card__text">Постійна співпраця</div>
                    </div>
                </div>
            </div>

        </div><!-- /.container -->
    </section>


    <section class="section">
        <div class="container">

            <div class="section__header">
                <!--                <h3 class="section__suptitle">We work with</h3>-->
                <h2 class="section__title">Ми надаємо належний сервіс</h2>
            </div>

            <div class="services">
                <div class="services__item  services__item--border">
                    <img class="services__icon" src="img_about/b21.png" alt="">

                    <div class="services__title">5 років у туризмі</div>
                    <div class="services__text">Це значний досвід, довіра туристів і співпраця з кращими партнерами. Ми постійно розвиваємося і покращуємо тури, відкриваємо нове і пропонуємо особливе.</div>
                </div>
                <div class="services__item  services__item--border">
                    <img class="services__icon" src="img_about/b22.png" alt="">

                    <div class="services__title">Якість у всьому</div>
                    <div class="services__text">Спілкування, індивідуальний підхід, увага до дрібниць і нюансів, правильна логістика, якість готелів, інформаційний супровід, оперативність і чесна ціна.</div>
                </div>
                <div class="services__item  services__item--border">
                    <img class="services__icon" src="img_about/b23.png" alt="">

                    <div class="services__title">Кращі гіди</div>
                    <div class="services__text">Досвідчені, обізнані, закохані в свою роботу і уважні до людей гіди супроводжують всі наші тури. Ваш комфорт і зручність стоять для нас на першому місці.</div>
                </div>
                <div class="services__item">
                    <img class="services__icon" src="img_about/b24.png" alt="">

                    <div class="services__title">Найнижчі ціни</div>
                    <div class="services__text">Ми співпрацюємо з великою кількістю надійних партнерів, а це запорука величезного вибору турів і спеціальних пропозицій, а також гарантія кращої ціни для клієнтів.</div>
                </div>
                <div class="services__item">
                    <img class="services__icon" src="img_about/b25.png" alt="">

                    <div class="services__title">Уважні співробітники</div>
                    <div class="services__text">Наші співробітники проходять спеціальну підготовку і регулярно відвідують країни з освітньою метою. Ми можемо гарантувати уважне і сумлінне обслуговування.</div>
                </div>
                <div class="services__item">
                    <img class="services__icon" src="img_about/b26.png" alt="">

                    <div class="services__title">Сприятливі умови</div>
                    <div class="services__text">Наш офіс знаходиться в пішої доступності від метро, а тому зручно під'їхати. Ми прагнемо до розвитку, щоб ставати краще для вас, наші дорогі друзі-клієнти!</div>
                </div>
            </div>

        </div><!-- /.container -->
    </section>




    <section class="section  section--clients">
        <div class="container">

            <div class="section__header">
                <!--                <h3 class="section__suptitle">Happy Clients</h3>-->
                <h2 class="section_blue__title">Відгуки клієнтів</h2>
            </div>

            <div class="clients">
                <div class="clients__item">
                    <img class="clients__photo" src="img_about/b4.jpg" alt="">
                    <div class="clients__content">
                        <div class="clients__name">Валерія</div>
                        <!--                        <div class="clients__prof">Graphic Design</div>-->
                        <div class="clients__text">Дякую турагентству за організацію нашого відпочинку в Єгипті! Ми летіли з Петербурга, питань було багато. Ви допомогли розібратися, порадили як краще, відповіли на всі наші запитання, стійко перенесли всі наші зміни, і все це швидко, чітко і дуже доброзичливо. Спасибі ще раз, без вас наш відпочинок не був би такий прекрасний!</div>
                    </div>
                </div>

                <div class="clients__item">
                    <img class="clients__photo" src="img_about/b5.jpg" alt="">
                    <div class="clients__content">
                        <div class="clients__name">Тетяна</div>
                        <!--                        <div class="clients__prof">Graphic Design</div>-->
                        <div class="clients__text">Відпочивала з "World&Travel" в грудні 2019 Єгипті в Шарм-еш-Шейху. Відпочинок вдався на славу! Тур був підібраний чудово! Влаштувало все: погода, готель, номер, пляж. ціна. Насамперед, дуже грамотно проінструктували про поїздку, і з цієї причини ніяких ексцесів за час туру не відбулося. Сподіваюся, що це не остання поїздка з "World&Travel"!</div>
                    </div>
                </div>

                <div class="clients__item">
                    <img class="clients__photo" src="img_about/b6.jpg" alt="">
                    <div class="clients__content">
                        <div class="clients__name">Ігор</div>
                        <!--                        <div class="clients__prof">Graphic Design</div>-->
                        <div class="clients__text">Ось і закінчився мій черговий візит до Єгипту. Хочеться висловити тільки схвальні слова на адресу туристичного агенства "World&Travel". Підготовка документів, доведення інформації і т д, все на вищому рівні. Відпочинок пройшов ідеально. Наступна відпустка тільки з вами!!!</div>
                    </div>
                </div>

                <div class="clients__item">
                    <img class="clients__photo" src="img_about/b7.jpg" alt="">
                    <div class="clients__content">
                        <div class="clients__name">Володимир</div>
                        <!--                        <div class="clients__prof">Graphic Design</div>-->
                        <div class="clients__text">З турагенством "World&Travel" їжджу вже не перший рік, в основному Туреччина, або Егіпет. Хочется відзначити тільки позитивні емоції від відвідування молодої команди агентства і виняткову порядність співробітників. Дякую за ласкаве сонце і море в холодному листопаді.</div>
                    </div>
                </div>
            </div><!-- /.clients -->

        </div><!-- /.container -->
    </section>



    <footer class="foot">
        <div class="container">

            <div class="foot__inner">
                <div class="foot__col  foot__col--first">
                    <div class="foot__logo">World&Travel</div>
                    <div class="foot__text">Ми туристичне агентство по організації відпочинку та виїзного туризму. Досвідчена команда нашої компанії допоможе Вам у виборі та реалізації побажань пов'язаних з туризмом і подорожами. Ми дотримуємося принципів індивідуального підходу до наших клієнтів, що дозволить Вам відчути максимально комфортну подорож і незабутній відпочинок.</div>
                    <div class="foot__social">
                        <div class="foot__social-header">
                            <b>11,2k</b> followers
                        </div>

                        <div class="foot__social-content">
                            Приєднатись:
                            <a href="#" target="_blank">
                                <img src="img_about/facebook.png" alt="">
                            </a>
                            <a href="#" target="_blank">
                                <img src="img_about/instagram.png" alt="">
                            </a>
                            <a href="#" target="_blank">
                                <img src="img_about/youtube.png" alt="">
                            </a>
                        </div>

                    </div>


                </div><!-- /.foot__col -->
                <div class="foot__col  foot__col--second">
                    <div class="foot__title">Наші блоги</div>

                    <div class="blogs">
                        <div class="blogs__item">
                            <img class="blogs__img" src="img_about/b17.jpg" alt="">
                            <div class="blogs__content">
                                <a class="blogs__title" href="#">Які речі брати в подорож</a>
                                <div class="blogs__date">Jan 9, 2020</div>
                            </div>
                        </div>

                        <div class="blogs__item">
                            <img class="blogs__img" src="img_about/b18.jpg" alt="">
                            <div class="blogs__content">
                                <a class="blogs__title" href="#">Які курорти варто відвідати</a>
                                <div class="blogs__date">Feb 4, 2020</div>
                            </div>
                        </div>

                        <div class="blogs__item">
                            <img class="blogs__img" src="img_about/b19.jpg" alt="">
                            <div class="blogs__content">
                                <a class="blogs__title" href="#">Як легко оформити візу</a>
                                <div class="blogs__date">Mar 1,2020</div>
                            </div>
                        </div>
                    </div><!-- /.blogs -->
                </div>

                <div class="foot__col  foot__col--third">
                    <div class="foot__title">Instagram</div>

                    <div class="instagram">
                        <a class="instagram__item" href="#" target="_blank">
                            <img src="img_about/b8.jpg" alt="">
                        </a>
                        <a class="instagram__item" href="#" target="_blank">
                            <img src="img_about/b9.jpg" alt="">
                        </a>
                        <a class="instagram__item" href="#" target="_blank">
                            <img src="img_about/b10.jpeg" alt="">
                        </a>
                        <a class="instagram__item" href="#" target="_blank">
                            <img src="img_about/b11.jpg" alt="">
                        </a>
                        <a class="instagram__item" href="#" target="_blank">
                            <img src="img_about/b12.jpg" alt="">
                        </a>
                        <a class="instagram__item" href="#" target="_blank">
                            <img src="img_about/b13.jpg" alt="">
                        </a>
                        <a class="instagram__item" href="#" target="_blank">
                            <img src="img_about/b14.jpg" alt="">
                        </a>
                        <a class="instagram__item" href="#" target="_blank">
                            <img src="img_about/b15.jpg" alt="">
                        </a>
                        <a class="instagram__item" href="#" target="_blank">
                            <img src="img_about/b16.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div><!-- /.foot__inner -->
        </div><!-- /.container -->
    </footer>
</div>

@endsection
