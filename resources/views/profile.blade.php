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
.profile-menu a {
    color: #222;
    text-decoration: none;
    font-size: 15px;
    padding: 7px 32px;
    display: block;
    border-left: 3px solid transparent;
    transition: background 0.2s, border-color 0.2s;
}
.profile-menu a.active, .profile-menu a:hover {
    background: #F5F5F5;
    border-left: 3px solid #BFA98A;
}
.profile-content {
    flex: 1 1 auto;
    padding: 38px 38px 0 38px;
}
.profile-form {
    max-width: 420px;
    margin: 0 auto;
}
.profile-form label {
    font-size: 15px;
    color: #222;
    font-weight: 500;
}
.profile-form-row {
    display: flex;
    align-items: center;
    margin-bottom: 18px;
}
.profile-form-row label {
    width: 110px;
}
.profile-form-row input {
    flex: 1 1 auto;
    padding: 7px 12px;
    font-size: 15px;
    border: 1px solid #bbb;
    border-radius: 6px;
    background: #f9f9f9;
    margin-right: 12px;
}
.profile-form-row .edit-link {
    font-size: 13px;
    color: #888;
    cursor: pointer;
    text-decoration: underline;
    margin-left: 8px;
}
.profile-form .save-btn {
    background: #C4511A;
    color: #fff;
    border: none;
    border-radius: 8px;
    padding: 10px 32px;
    font-size: 16px;
    font-weight: 500;
    cursor: pointer;
    margin-top: 18px;
}
</style>
<div class="profile-container">
    <div class="profile-sidebar">
        <div class="profile-photo">PHOTO</div>
        <div class="profile-nickname">{{ $user->name ?? 'Nickname' }}</div>
        <div class="profile-rating"><span>0</span> Ваш рейтинг</div>
        <div class="profile-id">ID : {{ $user->id ?? '0000000000000000' }}</div>
        <nav class="profile-menu">
            <a href="#" class="active">Мои ставки</a>
            <a href="{{ route('cart') }}">Корзина</a>
            <a href="#">Мои покупки</a>
            <a href="#">Мои продажи</a>
            <a href="{{ route('my-lots') }}">Мои лоты</a>
            <a href="#">Отзывы</a>
            <a href="#">Помощь</a>
            <form method="POST" action="{{ route('logout') }}" style="margin:0;">
                @csrf
                <button type="submit" style="background:none; border:none; color:#222; font-size:15px; padding:7px 32px; width:100%; text-align:left; cursor:pointer; border-left:3px solid transparent; transition:background 0.2s, border-color 0.2s;">Выйти</button>
            </form>
        </nav>
    </div>
    <div class="profile-content">
        <div style="font-size:20px; font-weight:500; margin-bottom:24px;">Настройки учетной записи</div>
        <form class="profile-form">
            <div class="profile-form-row">
                <label>Логин:</label>
                <input type="text" value="{{ $user->name }}" readonly>
                <span class="edit-link">Изменить</span>
            </div>
            <div class="profile-form-row">
                <label>E-Mail:</label>
                <input type="text" value="{{ $user->email }}" readonly>
                <span class="edit-link">Изменить</span>
            </div>
            <div class="profile-form-row">
                <label>Пароль:</label>
                <input type="password" value="******" readonly>
                <span class="edit-link">Изменить</span>
            </div>
            <div class="profile-form-row">
                <label>Телефон:</label>
                <input type="text" value="{{ $user->phone }}" readonly>
                <span class="edit-link">Изменить</span>
            </div>
            <button type="submit" class="save-btn">Сохранить</button>
        </form>
    </div>
</div>
@endsection 