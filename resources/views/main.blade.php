@extends('layouts.app')
@section('content')
<style>
.lots-grid, .deals-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 24px;
    justify-content: center;
    margin-bottom: 32px;
    padding-left: 20px;
    padding-right: 20px;
}
.lot-card, .deal-card {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    width: 180px;
    padding: 12px 10px 16px 10px;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0,0,0,0.03);
    display: flex;
    flex-direction: column;
    align-items: center;
}
.lot-card img, .deal-card img {
    width: 120px;
    height: 120px;
    object-fit: cover;
    margin-bottom: 10px;
    border-radius: 8px;
}
.lot-title, .deal-title {
    font-weight: 500;
    font-size: 15px;
    margin-bottom: 4px;
}
.lot-price, .deal-meta {
    color: #d00;
    font-weight: bold;
    margin-bottom: 2px;
}
.section-title {
    font-size: 22px;
    margin: 30px 0 15px 0;
    font-weight: 600;
    letter-spacing: 1px;
}
.popular-searches {
    margin: 40px 0 20px 0;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.tags-list {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 8px;
    justify-content: center;
}
.tag-item {
    background: #F5F5F5;
    border-radius: 20px;
    padding: 7px 18px;
    font-size: 15px;
    color: #393939;
    display: flex;
    align-items: center;
    gap: 7px;
    border: 1px solid #bbb;
}
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}
.delivery-block {
    display: flex;
    justify-content: center;
    margin: 38px 0 0 0;
}
.delivery-inner {
    display: flex;
    align-items: center;
    border: 1px solid #222;
    border-radius: 40px;
    padding: 32px 48px 32px 38px;
    background: #fff;
    min-width: 480px;
    max-width: 520px;
    min-height: 120px;
    gap: 32px;
}
.delivery-img {
    width: 280px;
    height: 140px;
    object-fit: contain;
    margin-right: 18px;
}
.delivery-texts {
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.delivery-title {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 8px;
}
.delivery-desc {
    font-size: 16px;
    font-weight: 400;
    line-height: 1.25;
}
@media (max-width: 700px) {
    .delivery-inner { flex-direction: column; align-items: center; padding: 24px 10px; min-width: unset; max-width: 98vw; }
    .delivery-img { margin-right: 0; margin-bottom: 12px; }
    .delivery-title { text-align: center; }
    .delivery-desc { text-align: center; }
}
</style>
<div class="container">
    <!-- Популярные поиски -->
    <section class="popular-searches">
        <div class="section-title">Популярные поиски</div>
        <div class="tags-list">
            <div class="tag-item"><img src="{{ asset('img/zoloto.png') }}" style="width:18px; height:18px;">Золото</div>
            <div class="tag-item"><img src="{{ asset('img/serebro.png') }}" style="width:18px; height:18px;">Серебро</div>
            <div class="tag-item"><img src="{{ asset('img/faberje.png') }}" style="width:18px; height:18px;">Фаберже</div>
            <div class="tag-item"><img src="{{ asset('img/autograph.png') }}" style="width:18px; height:18px;">Автографы</div>
            <div class="tag-item"><img src="{{ asset('img/kartina.png') }}" style="width:18px; height:18px;">Картины</div>
            <div class="tag-item"><img src="{{ asset('img/krest.png') }}" style="width:18px; height:18px;">Крест</div>
        </div>
    </section>

    <!-- Топ-лоты -->
    <section class="top-lots">
        <div class="section-title" style="margin-left:50px;">Топ-лоты</div>
        <div class="lots-grid">
            <div class="lot-card">
                <a href="{{ route('lot.show', 1) }}" style="text-decoration:none; color:inherit; display:block;">
                    <img src="{{ asset('img/lot1.png') }}" alt="Лот 1">
                    <div class="lot-title">1 Рубль 1904</div>
                    <div class="lot-price">370 000 ₽</div>
                    <div class="lot-meta">Коллекционирование</div>
                </a>
            </div>
            <div class="lot-card">
                <a href="{{ route('lot.show', 2) }}" style="text-decoration:none; color:inherit; display:block;">
                    <img src="{{ asset('img/lot2.png') }}" alt="Лот 2">
                    <div class="lot-title">Антикварная картина</div>
                    <div class="lot-price">97 000 ₽</div>
                    <div class="lot-meta">Искусство</div>
                </a>
            </div>
            <div class="lot-card">
                <a href="{{ route('lot.show', 3) }}" style="text-decoration:none; color:inherit; display:block;">
                    <img src="{{ asset('img/lot3.png') }}" alt="Лот 3">
                    <div class="lot-title">Латунная люстра</div>
                    <div class="lot-price">370 000 ₽</div>
                    <div class="lot-meta">Коллекционирование</div>
                </a>
            </div>
            <div class="lot-card">
                <a href="{{ route('lot.show', 4) }}" style="text-decoration:none; color:inherit; display:block;">
                    <img src="{{ asset('img/lot4.png') }}" alt="Лот 4">
                    <div class="lot-title">Часы будильник</div>
                    <div class="lot-price">210 000 ₽</div>
                    <div class="lot-meta">Картины</div>
                </a>
            </div>
            <div class="lot-card">
                <a href="{{ route('lot.show', 5) }}" style="text-decoration:none; color:inherit; display:block;">
                    <img src="{{ asset('img/lot5.png') }}" alt="Лот 5">
                    <div class="lot-title">Мотошлем СССР</div>
                    <div class="lot-price">170 000 ₽</div>
                    <div class="lot-meta">Коллекционирование</div>
                </a>
            </div>
            <div class="lot-card">
                <a href="{{ route('lot.show', 6) }}" style="text-decoration:none; color:inherit; display:block;">
                    <img src="{{ asset('img/lot6.png') }}" alt="Лот 6">
                    <div class="lot-title">1 Талер 1795</div>
                    <div class="lot-price">57 000 ₽</div>
                    <div class="lot-meta">Коллекционирование</div>
                </a>
            </div>
            <div class="lot-card">
                <a href="{{ route('lot.show', 7) }}" style="text-decoration:none; color:inherit; display:block;">
                    <img src="{{ asset('img/lot7.png') }}" alt="Лот 7">
                    <div class="lot-title">Винтажный браслет</div>
                    <div class="lot-price">87 000 ₽</div>
                    <div class="lot-meta">Мода</div>
                </a>
            </div>
            <div class="lot-card">
                <a href="{{ route('lot.show', 8) }}" style="text-decoration:none; color:inherit; display:block;">
                    <img src="{{ asset('img/lot8.png') }}" alt="Лот 8">
                    <div class="lot-title">Кинокамера Braun</div>
                    <div class="lot-price">37 000 ₽</div>
                    <div class="lot-meta">Коллекционирование</div>
                </a>
            </div>
            <div class="lot-card">
                <a href="{{ route('lot.show', 9) }}" style="text-decoration:none; color:inherit; display:block;">
                    <img src="{{ asset('img/lot9.png') }}" alt="Лот 9">
                    <div class="lot-title">Немецкий фарфор</div>
                    <div class="lot-price">19 000 ₽</div>
                    <div class="lot-meta">Коллекционирование</div>
                </a>
            </div>
            <div class="lot-card">
                <a href="{{ route('lot.show', 10) }}" style="text-decoration:none; color:inherit; display:block;">
                    <img src="{{ asset('img/lot10.png') }}" alt="Лот 10">
                    <div class="lot-title">Китай 100 Юаней</div>
                    <div class="lot-price">17 000 ₽</div>
                    <div class="lot-meta">Коллекицонирование</div>
                </a>
            </div>
        </div>
    </section>

    <!-- Топ-сделки -->
    <section class="top-deals">
        <div class="section-title" style="margin-left:50px;">Топ сделки</div>
        <div class="deals-grid">
            <div class="deal-card">
                <img src="{{ asset('img/topsdelka1.png') }}" alt="Сделка 1">
                <div class="deal-title">Медаль 1796 г.</div>
                <div class="deal-meta">Продано за 320 000 ₽</div>
            </div>
            <div class="deal-card">
                <img src="{{ asset('img/topsdelka2.png') }}" alt="Сделка 2">
                <div class="deal-title">1 Рубль 1748 (MS63)</div>
                <div class="deal-meta">Продано за 210 000 ₽</div>
            </div>
            <div class="deal-card">
                <img src="{{ asset('img/topsdelka3.png') }}" alt="Сделка 3">
                <div class="deal-title">100 руб 2017 г.</div>
                <div class="deal-meta">Продано за 120 000 ₽</div>
            </div>
            <div class="deal-card">
                <img src="{{ asset('img/topsdelka4.png') }}" alt="Сделка 4">
                <div class="deal-title">Рубль 1897-1898 СПБ</div>
                <div class="deal-meta">Продано за 110 000 ₽</div>
            </div>
            <div class="deal-card">
                <img src="{{ asset('img/topsdelka5.png') }}" alt="Сделка 5">
                <div class="deal-title">Автограф Чехова</div>
                <div class="deal-meta">Продано за 95 000 ₽</div>
            </div>
            <div class="deal-card">
                <img src="{{ asset('img/topsdelka6.png') }}" alt="Сделка 6">
                <div class="deal-title">The Texas 1791 Half Dime</div>
                <div class="deal-meta">Продано за 92 000 ₽</div>
            </div>
            <div class="deal-card">
                <img src="{{ asset('img/topsdelka7.png') }}" alt="Сделка 7">
                <div class="deal-title">Рубль 1798 г.</div>
                <div class="deal-meta">Продано за 90 000 ₽</div>
            </div>
            <div class="deal-card">
                <img src="{{ asset('img/topsdelka8.png') }}" alt="Сделка 8">
                <div class="deal-title">10 рублей 1779 года</div>
                <div class="deal-meta">Продано за 80 000 ₽</div>
            </div>
            <div class="deal-card">
                <img src="{{ asset('img/topsdelka9.png') }}" alt="Сделка 9">
                <div class="deal-title">5 рублей 1779 года</div>
                <div class="deal-meta">Продано за 70 000 ₽</div>
            </div>
        </div>
    </section>

    <!-- Блок доставки -->
    <div class="delivery-block">
        <div class="delivery-inner">
            <img src="/img/dostavkagruzovik.png" alt="Доставка" class="delivery-img">
            <div class="delivery-texts">
                <div class="delivery-title">Товары с доставкой</div>
                <div class="delivery-desc">Оплачивайте прямо на сайте и<br>забирайте у дома!</div>
            </div>
        </div>
    </div>
</div>
@endsection