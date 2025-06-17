@extends('layouts.app')
@section('content')
<style>
.lot-main-block {
    display: flex;
    align-items: flex-start;
    gap: 48px;
    margin-top: 48px;
}
.lot-image {
    width: 340px;
    height: 340px;
    background: #fff;
    border-radius: 12px;
    border: 1px solid #ddd;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}
.lot-image img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}
.lot-info {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}
.lot-title {
    font-size: 20px;
    font-weight: 500;
    margin-bottom: 18px;
}
.lot-price {
    color: #D60000;
    font-size: 22px;
    font-weight: 700;
    margin: 18px 0 0 0;
}
.lot-tabs {
    margin-top: 38px;
    display: flex;
    align-items: flex-end;
    gap: 0;
}
.tab-btn {
    background: #fff;
    border: 1px solid #bbb;
    border-bottom: none;
    border-radius: 12px 12px 0 0;
    padding: 8px 32px;
    font-size: 16px;
    font-weight: 500;
    cursor: pointer;
    margin-right: 6px;
    color: #222;
    transition: background 0.2s, color 0.2s;
}
.tab-btn.active {
    background: #fff;
    color: #222;
    border-bottom: 1px solid #fff;
    font-weight: 700;
}
.tab-content {
    border: 1px solid #bbb;
    border-radius: 0 0 16px 16px;
    padding: 32px 32px 24px 32px;
    margin-top: -1px;
    background: #fff;
    font-size: 15px;
    line-height: 1.6;
    min-height: 180px;
}
.lot-desc-params {
    text-align: left;
    font-size: 15px;
    color: #222;
    margin-bottom: 18px;
}
.lot-desc-params-title {
    font-weight: 500;
    margin-bottom: 4px;
}
.lot-desc-params ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
.lot-desc-params li {
    font-size: 13px;
    color: #444;
    margin-bottom: 2px;
}
.lot-desc-param-key {
    font-weight: 400;
}
.lot-desc-param-val {
    font-weight: 400;
}
.lot-desc-text {
    margin-top: 32px;
    text-align: center;
    font-size: 17px;
    color: #181818;
}
.lot-desc-bold {
    font-weight: bold;
    display: block;
    margin-top: 18px;
    margin-bottom: 0;
}
.buy-btn {
    background: #C4511A;
    color: #fff;
    border: none;
    border-radius: 8px;
    padding: 12px 38px;
    font-size: 18px;
    font-weight: 600;
    cursor: pointer;
    margin-top: 8px;
    transition: background 0.2s;
}
.buy-btn:hover {
    background: #a53d0f;
}
@media (max-width: 900px) {
    .lot-main-block { flex-direction: column; align-items: center; gap: 24px; }
    .lot-image { width: 90vw; height: 90vw; max-width: 340px; max-height: 340px; }
    .lot-info { width: 100%; }
    .tab-content { padding: 18px 8px; }
}
</style>
<div class="container">
    <div class="lot-main-block">
        <div class="lot-image">
            <img src="{{ $lot['image'] ?? asset('img/lot1.png') }}" alt="{{ $lot['title'] }}">
        </div>
        <div class="lot-info">
            <div class="lot-title">{{ $lot['title'] }}</div>
            <div class="lot-price">{{ $lot['price'] ?? 'Цена не указана' }}</div>
            @auth
            <form method="POST" action="{{ route('cart.add') }}" style="margin-top: 24px;">
                @csrf
                <input type="hidden" name="lot_id" value="{{ request()->route('id') }}">
                <button type="submit" class="buy-btn">Купить</button>
            </form>
            @endauth
        </div>
    </div>
    <div class="lot-tabs">
        <button class="tab-btn active" id="descTab">Описание</button>
        <button class="tab-btn" id="paramsTab">Параметры</button>
    </div>
    <div class="tab-content" id="descContent">
        <div class="lot-desc-text">
            @php
            $demoDescription = "1 рубль 1904 год. АР. Серебро, вес: 19.71 грамм. RRR. Экспертное заключение. 1.3.981\n\n<div class='lot-desc-bold'>Экспертное заключение Ширяков и Ко от 18.05.2023 года\nсерия НА №0001590\nСостояние как на фото\nОРИГИНАЛ!\nОТМЕНА СТАВОК ЗА СУТКИ ДО ОКОНЧАНИЯ АУКЦИОНА - НЕВОЗМОЖНА!!!\nБУДЬТЕ ВНИМАТЕЛЬНЕЕ!\nСпособы оплаты: при личной встрече в г. Москве\nм. АКАДЕМИЧЕСКАЯ\nБезналичная оплата по реквизитам (QR-код или ссылка)\nПо почте лот высылается только после полной предоплаты.\nЗа работу почты России, Службы доставки ответственность не несем.</div>";
            @endphp
            @if(isset($lot['description']) && is_array($lot['description']))
                Описание отсутствует
            @else
                {!! nl2br(str_replace(["<div class='lot-desc-bold'>","</div>"],["<div class='lot-desc-bold'>","</div>"],$lot['description'] ?? $demoDescription)) !!}
            @endif
        </div>
    </div>
    <div class="tab-content" id="paramsContent" style="display:none;">
        <div class="lot-desc-params">
            <div class="lot-desc-params-title">Параметры</div>
            @if(isset($lot['params']) && is_array($lot['params']))
                <ul>
                @foreach($lot['params'] as $k => $v)
                    <li><span class="lot-desc-param-key">{{ $k }}</span> : <span class="lot-desc-param-val">{{ $v }}</span></li>
                @endforeach
                </ul>
            @elseif(isset($lot['params']))
                {{ $lot['params'] }}
            @else
                Параметры: уточняйте у продавца
            @endif
        </div>
    </div>
</div>
<script>
// Простое переключение вкладок без перезагрузки
const descTab = document.getElementById('descTab');
const paramsTab = document.getElementById('paramsTab');
const descContent = document.getElementById('descContent');
const paramsContent = document.getElementById('paramsContent');
if(descTab && paramsTab && descContent && paramsContent) {
    descTab.onclick = function() {
        descTab.classList.add('active');
        paramsTab.classList.remove('active');
        descContent.style.display = '';
        paramsContent.style.display = 'none';
    };
    paramsTab.onclick = function() {
        paramsTab.classList.add('active');
        descTab.classList.remove('active');
        descContent.style.display = 'none';
        paramsContent.style.display = '';
    };
}
</script>
@endsection 