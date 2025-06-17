@extends('layouts.app')
@section('content')
<style>
.profile-container {
    display: flex;
    max-width: 900px;
    margin: 40px auto 0 auto;
    background: #fff;
    border: 1px solid #ccc;
    border-radius: 0 0 8px 8px;
    min-height: 480px;
}
.profile-sidebar {
    width: 260px;
    background: #BFA98A;
    border-right: 1px solid #ccc;
    padding: 32px 0 0 0;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.profile-photo {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: #eee;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    color: #888;
    margin-bottom: 10px;
    font-weight: 600;
}
.profile-nickname {
    font-size: 20px;
    font-weight: 600;
    color: #222;
    margin-bottom: 2px;
}
.profile-rating {
    font-size: 13px;
    color: #007AFF;
    margin-bottom: 2px;
}
.profile-rating span { color: #222; }
.profile-id {
    font-size: 12px;
    color: #fff;
    opacity: 0.7;
    margin-bottom: 18px;
}
.profile-menu {
    width: 100%;
    background: #fff;
    border-radius: 0 0 0 8px;
    border-top: 1px solid #ccc;
    padding: 18px 0 0 0;
    display: flex;
    flex-direction: column;
    gap: 10px;
}
.profile-menu a, .profile-menu form button {
    color: #222;
    text-decoration: none;
    font-size: 15px;
    padding: 7px 32px;
    display: block;
    border-left: 3px solid transparent;
    transition: background 0.2s, border-color 0.2s;
    background: none;
    border: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
}
.profile-menu a.active, .profile-menu a:hover, .profile-menu form button.active, .profile-menu form button:hover {
    background: #F5F5F5;
    border-left: 3px solid #BFA98A;
}
.profile-content {
    flex: 1 1 auto;
    padding: 38px 38px 0 38px;
}
.cart-title {
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 24px;
}
.cart-empty {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 320px;
    color: #222;
    font-size: 17px;
}
.cart-lots-list {
    display: flex;
    flex-direction: column;
    gap: 24px;
}
.cart-lot-item {
    display: flex;
    align-items: center;
    gap: 24px;
    background: #fafafa;
    border: 1px solid #eee;
    border-radius: 10px;
    padding: 16px 18px;
}
.cart-lot-item img {
    width: 90px;
    height: 90px;
    object-fit: contain;
    border-radius: 8px;
    background: #fff;
}
.cart-lot-info {
    display: flex;
    flex-direction: column;
    gap: 8px;
}
.cart-lot-title {
    font-size: 16px;
    font-weight: 500;
    margin-bottom: 4px;
}
.cart-lot-price {
    color: #d00;
    font-weight: bold;
    font-size: 16px;
}
</style>
<div class="profile-container">
    <div class="profile-sidebar">
        <div class="profile-photo">PHOTO</div>
        <div class="profile-nickname">{{ $user->name ?? 'Nickname' }}</div>
        <div class="profile-rating"><span>0</span> Ваш рейтинг</div>
        <div class="profile-id">ID : {{ $user->id ?? '0000000000000000' }}</div>
        <nav class="profile-menu">
            <a href="#">Мои ставки</a>
            <a href="#" class="active">Корзина</a>
            <a href="#">Мои покупки</a>
            <a href="#">Мои продажи</a>
            <a href="#">Мои лоты</a>
            <a href="#">Отзывы</a>
            <a href="#">Помощь</a>
            <form method="POST" action="{{ route('logout') }}" style="margin:0;">
                @csrf
                <button type="submit">Выйти</button>
            </form>
        </nav>
    </div>
    <div class="profile-content">
        <div class="cart-title">Корзина</div>
        @if(empty($lots))
            <div class="cart-empty">К сожалению, ваша корзина пуста</div>
        @else
            <div class="cart-lots-list">
                @foreach($lots as $lot)
                    <div class="cart-lot-item">
                        <img src="{{ $lot['img'] }}" alt="{{ $lot['title'] }}">
                        <div class="cart-lot-info">
                            <div class="cart-lot-title">{{ $lot['title'] }}</div>
                            <div class="cart-lot-price">{{ $lot['price'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection 