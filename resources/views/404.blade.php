@extends('layouts.app')
@section('content')
<style>
.error-404-container {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 70vh;
    font-family: inherit;
}
.error-404-content {
    max-width: 600px;
    display: flex;
    align-items: center;
    gap: 48px;
}
.error-404-left {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.error-404-code {
    font-size: 96px;
    font-weight: 700;
    color: #555;
    line-height: 1;
}
.error-404-title {
    font-size: 26px;
    font-weight: 600;
    margin: 18px 0 8px 0;
    color: #222;
}
.error-404-text {
    font-size: 18px;
    color: #222;
    margin-bottom: 32px;
}
.error-404-btn {
    display: inline-block;
    font-size: 17px;
    color: #222;
    text-decoration: none;
    margin-top: 18px;
    transition: color 0.2s;
}
.error-404-btn:hover {
    color: #C4511A;
    text-decoration: underline;
}
.error-404-smile {
    width: 180px;
    height: 180px;
    background: #FF7575;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}
.error-404-smile-face {
    position: absolute;
    left: 0; right: 0; top: 0; bottom: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.error-404-eyes {
    display: flex;
    gap: 32px;
    margin-top: 54px;
}
.error-404-eye {
    width: 18px;
    height: 18px;
    background: #fff;
    border-radius: 50%;
}
.error-404-mouth {
    width: 80px;
    height: 40px;
    border-bottom: 6px solid #fff;
    border-radius: 0 0 60px 60px;
    margin: 18px auto 0 auto;
}
</style>
<div class="error-404-container">
    <div class="error-404-content">
        <div class="error-404-left">
            <div class="error-404-code">404</div>
            <div class="error-404-title">Ошибка!</div>
            <div class="error-404-text">К сожалению, запрашиваемая<br>Вами страница не найдена...</div>
            <a href="{{ route('main') }}" class="error-404-btn">Вернуться на главную</a>
        </div>
        <div class="error-404-smile">
            <div class="error-404-smile-face">
                <div class="error-404-eyes">
                    <div class="error-404-eye"></div>
                    <div class="error-404-eye"></div>
                </div>
                <div class="error-404-mouth"></div>
            </div>
        </div>
    </div>
</div>
@endsection 