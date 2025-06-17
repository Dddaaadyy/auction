<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Auction')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', Arial, sans-serif; margin: 0; background: #fff; color: #181818; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        header { background: #fff; }
        .header-main-row { display: flex; align-items: center; justify-content: center; height: 80px; padding: 0; }
        .logo { display: flex; align-items: center; margin-right: 36px; }
        .logo img { width: 90px; height: 90px; margin-top: 0; }
        .header-search-center { width: 520px; display: flex; justify-content: center; margin-right: 28px; }
        .search-form { display: flex; align-items: center; width: 100%; position: relative; background: #fff; border: 1.5px solid #222; border-radius: 16px; box-shadow: none; padding: 0; height: 40px; transition: border-color 0.2s; }
        .search-form:focus-within { border-color: #2196f3; }
        .search-form input[type="text"] { width: 220px; padding: 0 0 0 16px; border: none; border-radius: 16px 0 0 16px; font-size: 16px; background: #fff; outline: none; height: 40px; }
        .search-form select { appearance: none; -webkit-appearance: none; -moz-appearance: none; border: none; background: transparent; font-size: 15px; color: #222; padding: 0 16px 0 12px; margin: 0; width: auto; min-width: unset; height: 40px; line-height: 40px; outline: none; z-index: 2; cursor: pointer; border-radius: 0; left: 140px; position: relative; }
        .search-form button { background: none; border: none; padding: 0 8px 0 0; cursor: pointer; display: flex; align-items: center; z-index: 3; border-radius: 0; height: 40px; margin: 100px; line-height: 40px; }
        .search-form button img { width: 20px; height: 20px; }
        .search-form .custom-arrow {
            position: absolute;
            top: 50%;
            right: 40px;
            transform: translateY(-50%);
            pointer-events: none;
            width: 18px;
            height: 18px;
            z-index: 3;
        }
        .auth-section { display: flex; align-items: center; gap: 18px; margin: 0; }
        .auth-icons-box { background: none; border-radius: 0; box-shadow: none; display: flex; align-items: center; padding: 0; gap: 16px; }
        .profile-icon img, .cart-icon img { width: 24px; height: 24px; }
        .login-btn, .register-btn { background: #fff; color: #333; border: none; border-radius: 6px; padding: 8px 18px; font-size: 15px; font-weight: 500; cursor: pointer; transition: color 0.2s; }
        .login-btn:hover, .register-btn:hover { color: #7C4A03; background: #fff; }
        .categories-bar { width: 100%; background: #f3f3f3; border-bottom: 2px solid #e5e5e5; }
        .categories-menu { max-width: 1200px; margin: 0 auto; display: flex; gap: 36px; font-size: 16px; font-weight: 600; color: #222; align-items: center; height: 54px; padding: 0 20px; justify-content: center; }
        .categories-menu .category { cursor: pointer; transition: color 0.2s; display: flex; flex-direction: column; align-items: center; padding: 0 2px; color: #222; line-height: 1.1; height: auto; justify-content: center; position: relative; }
        .categories-menu .category-caption { display: block; font-size: 13px; font-weight: 400; color: #888; margin-top: 2px; position: static; left: auto; transform: none; top: auto; white-space: nowrap; }
        .categories-menu .active { color: #222 !important; font-weight: 600; }
        footer {
            background: #000;
            color: #fff;
            margin-top: 40px;
            padding: 0;
            font-family: 'Inter', Arial, sans-serif;
        }
        .footer-divider {
            width: 100%;
            height: 1px;
            background: #fff;
            margin: 38px 0 0 0;
        }
        .footer-main {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            gap: 0;
            padding: 48px 0px 0 130px;
        }
        .footer-col {
            flex: 1 1 0;
            min-width: 220px;
        }
        .footer-col h4 {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 12px;
            color: #fff;
        }
        .footer-col ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .footer-col ul li {
            margin-bottom: 10px;
 
        }
        .footer-col ul li a {
            color: #fff;
            text-decoration: none;

        }
        .footer-col ul li a:hover {
            text-decoration: underline;

        }
        .footer-col ul li a.red-link {
            color: #D60000;
        }
        .footer-col ul li a.red-link:hover {
            text-decoration: underline;
        }
        .footer-bottom {
            padding: 18px 40px 10px 40px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            font-size: 12px;
            color: #fff;
            max-width: 1200px;
            margin-left: 375px;
            margin-right: auto;
        }
        .footer-bottom .footer-copy {
            max-width: 700px;
            line-height: 1.3;
            opacity: 0.85;
        }
        .footer-bottom .footer-domain {
            font-weight: 700;
            font-size: 15px;
            color: #fff;
        }
        @media (max-width: 900px) {
            .footer-main { flex-direction: column; gap: 32px; padding: 32px 0 0 0; }
            .footer-col { min-width: unset; margin-bottom: 0; }
            .footer-bottom { flex-direction: column; align-items: flex-start; gap: 10px; }
            .footer-bottom .footer-domain { font-size: 17px; }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-main-row">
                <div class="logo">
                    <a href="{{ route('main') }}">
                        <img src="{{ asset('img/logo.png') }}" alt="Логотип">
                    </a>
                </div>
                <div class="header-search-center">
                    <form class="search-form" action="#" method="get">
                        <input type="text" placeholder="Поиск">
                        <select>
                            <option>Все категории</option>
                            <option>Коллекционирование</option>
                            <option>Искусство</option>
                            <option>Книги</option>
                            <option>Винтаж</option>
                            <option>Мода</option>
                        </select>
                        <button type="submit"><img src="{{ asset('img/lupa.png') }}" alt="Поиск"></button>
                        <span class="custom-arrow">
                            <svg width="18" height="18" viewBox="0 0 18 18"><path d="M4 7l5 5 5-5" stroke="#222" stroke-width="2" fill="none" stroke-linecap="round"/></svg>
                        </span>
                    </form>
                </div>
                <div class="auth-section">
                    @guest
                        <button class="login-btn" id="loginBtn">Войти</button>
                        <button class="register-btn" id="registerBtn">Регистрация</button>
                    @endguest
                    @auth
                        <div class="auth-icons-box">
                            <a href="{{ route('profile') }}" class="profile-icon"><img src="{{ asset('img/profile.png') }}" alt="Профиль"></a>
                            <a href="{{ route('cart') }}" class="cart-icon"><img src="{{ asset('img/cart.png') }}" alt="Корзина"></a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
        <div class="categories-bar">
            <nav class="categories-menu">
                <div class="category active">Коллекционирование
                    <span class="category-caption">товаров</span>
                </div>
                <div class="category">Искусство
                    <span class="category-caption">и Антиквариат</span>
                </div>
                <div class="category">Книги
                    <span class="category-caption">Букинистика</span>
                </div>
                <div class="category">Винтаж
                    <span class="category-caption">и Ретротехника</span>
                </div>
                <div class="category">Мода
                    <span class="category-caption">и Красота</span>
                </div>
                <div class="category">Все
                    <span class="category-caption">остальное</span>
                </div>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="footer-main">
            <div class="footer-col">
                <h4>О компании</h4>
                <ul>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Форум</a></li>
                    <li><a href="#">Интернет журнал</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Как продавать?</h4>
                <ul>
                    <li><a href="#">Как покупать?</a></li>
                    <li><a href="#" class="red-link">Увеличить рейтинг?</a></li>
                    <li><a href="#">Загрузить товары через YML, XLS, API</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Соглашение и Политики торгов</h4>
                <ul>
                    <li><a href="#">Политика обработки данных</a></li>
                    <li><a href="#">Помощь</a></li>
                    <li><a href="#">Служба поддержки</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-divider"></div>
        <div class="footer-bottom">
            <div class="footer-copy">
                Copyright © торговая площадка и интернет-аукцион 2025-2025<br>
                Все права защищены<br>
                Используя сайт, вы принимаете соглашение и политику сбора данных о пользователях, в частности, использовании файлов cookie. На информационном ресурсе применяются рекомендательные технологии.
            </div>
            <div class="footer-domain">Auction.com</div>
        </div>
    </footer>
    <div class="modal-bg" id="modal-bg" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.25); z-index:1000;"></div>
    <div class="modal-window" id="loginModal" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; z-index:1001; align-items:center; justify-content:center;">
        <div class="modal-content" style="background:#fff; border-radius:12px; padding:40px 32px 32px 32px; min-width:400px; box-shadow:0 8px 32px rgba(0,0,0,0.18); position:relative; display:flex; flex-direction:column; align-items:center;">
            <span class="close" id="closeLogin" style="position:absolute; top:16px; right:20px; font-size:28px; cursor:pointer;">&times;</span>
            <div style="font-size:24px; font-weight:500; margin-bottom:24px;">Авторизация</div>
            <form method="POST" action="{{ route('login') }}" style="width:100%; display:flex; flex-direction:column; align-items:center; gap:18px;">
                @csrf
                <div style="width:100%; display:flex; flex-direction:column; align-items:flex-start; gap:8px;">
                    <label style="font-size:16px;">Логин или E-Mail</label>
                    <input type="text" name="email" placeholder="Введите логин или e-mail" required style="width:320px; padding:8px 12px; font-size:15px; border:1px solid #bbb; border-radius:6px;">
                </div>
                <div style="width:100%; display:flex; flex-direction:column; align-items:flex-start; gap:8px;">
                    <label style="font-size:16px;">Пароль</label>
                    <input type="password" name="password" placeholder="Введите пароль" required style="width:320px; padding:8px 12px; font-size:15px; border:1px solid #bbb; border-radius:6px;">
                </div>
                <div style="width:100%; text-align:right; margin-bottom:8px;">
                    <a href="#" style="font-size:13px; color:#888;">Забыли пароль?</a>
                </div>
                <div style="display:flex; gap:18px; width:100%; justify-content:center;">
                    <button type="submit" style="background:#C4511A; color:#fff; border:none; border-radius:8px; padding:10px 32px; font-size:16px; font-weight:500; cursor:pointer;">Войти</button>
                    <button type="button" id="modalRegisterBtn" style="background:#4CD137; color:#fff; border:none; border-radius:8px; padding:10px 32px; font-size:16px; font-weight:500; cursor:pointer;">Регистрация</button>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-window" id="registerModal" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; z-index:1001; align-items:center; justify-content:center;">
        <div class="modal-content" style="background:#fff; border-radius:12px; padding:40px 32px 32px 32px; min-width:400px; box-shadow:0 8px 32px rgba(0,0,0,0.18); position:relative; display:flex; flex-direction:column; align-items:center;">
            <span class="close" id="closeRegister" style="position:absolute; top:16px; right:20px; font-size:28px; cursor:pointer;">&times;</span>
            <div style="font-size:24px; font-weight:500; margin-bottom:24px;">Регистрация</div>
            <form method="POST" action="{{ route('register') }}" style="width:100%; display:flex; flex-direction:column; align-items:center; gap:18px;">
                @csrf
                <div style="width:100%; display:flex; flex-direction:column; align-items:flex-start; gap:8px;">
                    <label style="font-size:16px;">Имя</label>
                    <input type="text" name="name" placeholder="Введите имя" required style="width:320px; padding:8px 12px; font-size:15px; border:1px solid #bbb; border-radius:6px;">
                </div>
                <div style="width:100%; display:flex; flex-direction:column; align-items:flex-start; gap:8px;">
                    <label style="font-size:16px;">E-Mail</label>
                    <input type="email" name="email" placeholder="Введите e-mail" required style="width:320px; padding:8px 12px; font-size:15px; border:1px solid #bbb; border-radius:6px;">
                </div>
                <div style="width:100%; display:flex; flex-direction:column; align-items:flex-start; gap:8px;">
                    <label style="font-size:16px;">Телефон</label>
                    <input type="tel" name="phone" placeholder="Введите телефон" required style="width:320px; padding:8px 12px; font-size:15px; border:1px solid #bbb; border-radius:6px;">
                </div>
                <div style="width:100%; display:flex; flex-direction:column; align-items:flex-start; gap:8px;">
                    <label style="font-size:16px;">Пароль</label>
                    <input type="password" name="password" placeholder="Введите пароль" required style="width:320px; padding:8px 12px; font-size:15px; border:1px solid #bbb; border-radius:6px;">
                </div>
                <div style="width:100%; display:flex; flex-direction:column; align-items:flex-start; gap:8px;">
                    <label style="font-size:16px;">Подтвердите пароль</label>
                    <input type="password" name="password_confirmation" placeholder="Подтвердите пароль" required style="width:320px; padding:8px 12px; font-size:15px; border:1px solid #bbb; border-radius:6px;">
                </div>
                <div style="display:flex; gap:18px; width:100%; justify-content:center;">
                    <button type="submit" style="background:#4CD137; color:#fff; border:none; border-radius:8px; padding:10px 32px; font-size:16px; font-weight:500; cursor:pointer;">Зарегистрироваться</button>
                </div>
            </form>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var modalBg = document.getElementById('modal-bg');
        var loginModal = document.getElementById('loginModal');
        var registerModal = document.getElementById('registerModal');
        var loginBtn = document.getElementById('loginBtn');
        var registerBtn = document.getElementById('registerBtn');
        var closeLogin = document.getElementById('closeLogin');
        var closeRegister = document.getElementById('closeRegister');
        var modalRegisterBtn = document.getElementById('modalRegisterBtn');
        function openModal(modal) {
            modalBg.style.display = 'block';
            modal.style.display = 'flex';
            document.body.classList.add('modal-open');
        }
        function closeModal() {
            modalBg.style.display = 'none';
            loginModal.style.display = 'none';
            registerModal.style.display = 'none';
            document.body.classList.remove('modal-open');
        }
        if (loginBtn) loginBtn.onclick = function() { openModal(loginModal); };
        if (registerBtn) registerBtn.onclick = function() { openModal(registerModal); };
        if (closeLogin) closeLogin.onclick = closeModal;
        if (closeRegister) closeRegister.onclick = closeModal;
        if (modalRegisterBtn) modalRegisterBtn.onclick = function() { closeModal(); openModal(registerModal); };
        if (modalBg) modalBg.onclick = closeModal;
    });
    </script>
</body>
</html> 