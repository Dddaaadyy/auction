<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $popularTags = ['Золото', 'Серебро', 'Фаберже', 'Авторгаф', 'Картина', 'Крест'];
        $topLots = [
            ['img' => '/img/lot1.jpg', 'title' => '1 рубль 1904', 'desc' => 'СПБ, АГ, Николай II', 'price' => '370 000₽'],
            ['img' => '/img/lot2.jpg', 'title' => 'Антикварный документ', 'desc' => 'XIX век', 'price' => '370 000₽'],
            ['img' => '/img/lot3.jpg', 'title' => 'Литография поэта', 'desc' => 'Окунев', 'price' => '370 000₽'],
            ['img' => '/img/lot4.jpg', 'title' => 'Часы', 'desc' => 'СССР', 'price' => '370 000₽'],
            ['img' => '/img/lot5.jpg', 'title' => 'Мячик', 'desc' => 'Мозаика СССР', 'price' => '370 000₽'],
            ['img' => '/img/lot6.jpg', 'title' => '1 рубль 1596г.', 'desc' => 'Петр I', 'price' => '370 000₽'],
            ['img' => '/img/lot7.jpg', 'title' => 'Витойный браслет', 'desc' => 'XIX век', 'price' => '370 000₽'],
            ['img' => '/img/lot8.jpg', 'title' => 'Кофейник', 'desc' => 'ВИЛЛ', 'price' => '370 000₽'],
            ['img' => '/img/lot9.jpg', 'title' => 'Немецкий фарфор', 'desc' => 'Фарфор', 'price' => '370 000₽'],
            ['img' => '/img/lot10.jpg', 'title' => 'Купюра 100', 'desc' => 'Купюра 100', 'price' => '370 000₽'],
        ];
        $topDeals = [
            ['img' => '/img/deal1.jpg', 'title' => 'Медаль "За отвагу"', 'desc' => 'СССР', 'price' => '370 000₽'],
            ['img' => '/img/deal2.jpg', 'title' => '1 рубль 1746 года', 'desc' => 'СПБ, Анна Иоанновна', 'price' => '370 000₽'],
            ['img' => '/img/deal3.jpg', 'title' => '10 руб 2011 г.', 'desc' => 'Памятная монета', 'price' => '370 000₽'],
            ['img' => '/img/deal4.jpg', 'title' => 'Рубль 1898', 'desc' => 'Бунт', 'price' => '370 000₽'],
            ['img' => '/img/deal5.jpg', 'title' => 'Медаль за храбрость', 'desc' => 'СССР', 'price' => '370 000₽'],
            ['img' => '/img/deal6.jpg', 'title' => 'Токен 1991', 'desc' => 'ММД', 'price' => '370 000₽'],
            ['img' => '/img/deal7.jpg', 'title' => '10 рублей 1901 года', 'desc' => 'Золото', 'price' => '370 000₽'],
            ['img' => '/img/deal8.jpg', 'title' => '5 рублей 1779 года', 'desc' => 'Золото', 'price' => '370 000₽'],
            ['img' => '/img/deal9.jpg', 'title' => '5 рублей 2000 года', 'desc' => 'Памятная монета', 'price' => '370 000₽'],
        ];
        return view('main', compact('popularTags', 'topLots', 'topDeals'));
    }
}