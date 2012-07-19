<?php
/**
 *   File functions:
 *   Russian language for astral market
 *
 *   @name                 : amarket.php                            
 *   @copyright            : (C) 2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @author               : eyescream <tduda@users.sourceforge.net>
 *   @version              : 1.3
 *   @since                : 02.12.2006
 *
 */

//
//
//       This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; either version 2 of the License, or
//   (at your option) any later version.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
//
// $Id$

define('ERROR', 'Ошибка!');
define('A_BACK', 'Назад');
define('ASTRAL', 'Название компонента');
define('MAP1', 'План демона');
define('MAP2', 'План огня');
define('MAP3', 'План ада');
define('MAP4', 'План пустыни');
define('MAP5', 'План воды');
define('MAP6', 'План божеста');
define('MAP7', 'План смерти');
define('PLAN1', 'Астральный компонент');
define('PLAN2', 'Звездный портал');
define('PLAN3', 'Сияющий обелиск');
define('PLAN4', 'Факел пламени');
define('PLAN5', 'Серебряный фонтан');
define('RECIPE1', 'Магическая эссенсия');
define('RECIPE2', 'Звездный цвет');
define('RECIPE3', 'Элексир Иллюминатов');
define('RECIPE4', 'Астральная среда');
define('RECIPE5', 'Магия абсента');
define('FORMULA1', 'Браслеты рассвета');
define('FORMULA2', 'Ожерелье правды');
define('FORMULA3', 'Скипетр мудрости');
define('FORMULA4', 'Игристая диадема');
define('FORMULA5', 'Кольцо судьбы');
define('COMP1', 'Зуб Глабреза');
define('COMP2', 'Огненая пыль');
define('COMP3', 'Коготь Zgłębiczarta');
define('COMP4', 'Шкала Skorpendry');
define('COMP5', 'Маска Кракена');
define('COMP6', 'Гром Титана');
define('COMP7', 'Ребро Лича');
define('CONST1', 'Астральный компонент (конструкция)');
define('CONST2', 'Звездный портал (конструкция)');
define('CONST3', 'Сияющий обелиск (конструкция)');
define('CONST4', 'Факел пламени (конструкция)');
define('CONST5', 'Серебряный фонтан (конструкция)');
define('POTION1', 'Магическая эссенция (микстура)');
define('POTION2', 'Звездный цвет (микстура)');
define('POTION3', 'Элексир Иллюминатов (микстура)');
define('POTION4', 'Астральная среда (микстура)');
define('POTION5', 'Магия абсента (микстура)');
define('JEWELLERY1', 'Браслеты рассвета');
define('JEWELLERY2', 'Ожерелье правды');
define('JEWELLERY3', 'Скипетр мудрости');
define('JEWELLERY4', 'Игристая диадема');
define('JEWELLERY5', 'Кольцо судьбы');
define('T_NUMBER', 'Количество');

if (!isset($_GET['view']) && !isset($_GET['buy']) && !isset($_GET['wyc']))
{
    define('A_BACK2', 'Вернуться на рынок.');
    define('A_VIEW', 'Смотреть предложения');
    define('A_SEARCH', 'Искать предложения');
    define('A_ADD', 'Добавить предложение');
    define('A_DELETE', 'Удалить все свои предложения');
    define('A_LIST', 'Список всех предложений на рынке');
    define('M_INFO', 'Тут есть рынок с астральными компонентами. Есть несколько вариантов');
}

if (isset ($_GET['view']) && $_GET['view'] == 'szukaj') 
{
    define('S_INFO', 'Искать предложения на рынке или');
    define('S_INFO2', 'Введите точное название компонента');
    define('A_SEARCH', 'Искать');
}

if (isset ($_GET['view']) && $_GET['view'] == 'market') 
{
    define('NO_OFERTS', 'На рынке нет никаких предложений.');
    define('A_BUY', 'Купить');
    define('A_DELETE', 'Очистить');
    define('A_PREVIOUS', 'Предыдущие');
    define('A_NEXT', 'Следующее');
    define('VIEW_INFO', 'Показать цену компонента или');
    define('T_AMOUNT', 'Количество');
    define('T_COST', 'Стоимость');
    define('T_SELLER', 'Продавец');
    define('T_OPTIONS', 'Параметры');
    define('A_STEAL', 'Украсть');
}

if (isset ($_GET['view']) && $_GET['view'] == 'add') 
{
    define('NO_AMOUNT', 'У вас нету столько ');
    define('YOU_ADD', 'Вы добавили продукт на рынок.');
    define('A_REFRESH', 'Обновить');
    define('ADD_INFO', 'Добавить продукт на рынок или');
    define('H_AMOUNT', 'Количество компонентов');
    define('H_COST', 'Цена за штуку');
    define('A_NUMBER', 'Номер куска');
    define('A_ADD', 'Добавить');
    define('T_ADD', 'Добавить кусок карты, плана, правила');
    define('T_ADD2', 'Добавить компонент, конструкцию, микстуру');
    define('YOU_WANT', 'Вы хотите добавить к своим существущим продажам?');
}

if (isset ($_GET['view']) && $_GET['view'] == 'del') 
{
    define('YOU_DELETE', 'Вы удалили все свои предложения, и ваше астральное компоненты возвращаются к вам.');
}

if (isset($_GET['buy'])) 
{
    define('BUY_INFO', 'Закупить компонентов или');
    define('O_AMOUNT', 'Количество в предложении');
    define('H_COST', 'Цена за штуку');
    define('SELLER', 'Продавец');
    define('B_AMOUNT', 'Количество');
    define('A_BUY', 'Купить');
    define('NO_OFERTS', 'Нету такого предложения на рынке.');
    define('IS_YOUR', 'Вы неможете купить свои компоненты!');
    if (isset($_GET['step']) && $_GET['step'] == 'buy') 
    {
        define('NO_MONEY', 'Нехватает денег!');
        define('NO_AMOUNT', 'Нет такого количества ');
        define('ON_MARKET', ' на рынке!');
        define('L_ACCEPT', '</a></b>, ID <b>');
        define('L_ACCEPT2', '</b> принял твое предложение ');
        define('L_AMOUNT', ' штук ');
        define('YOU_GET', '. Вы получили <b>');
        define('TO_BANK', '</b> золота в банк.');
        define('YOU_BUY', 'Вы купили <b>');
        define('I_AMOUNT', ' штук</b> ');
        define('FOR_A', ' за ');
        define('GOLD_COINS', ' золота.');
    }
}

if (isset($_GET['wyc'])) 
{
    define('NOT_YOUR', 'Вы неможете торговать за другого!');
    define('YOU_DELETE', 'Вы удалили предложения о покупке ваших компонентов.');
}

if (isset($_GET['view']) && $_GET['view'] == 'all') 
{
    define('LIST_INFO', 'Здесь находятся все преложения, заявленные на рынке.');
    define('H_NAME', 'Название');
    define('H_AMOUNT', 'Предложение');
    define('H_ACTION', 'Действие');
    define('A_SHOW', 'Показать');
}

if (isset($_GET['steal']))
{
    define('NO_CRIME', 'Вам запрещено воровать астральный компонент, подождите  немного!');
    define('YOU_DEAD', 'Вы неможете украсть у других, потомучто вы мертвы');
    define('VERDICT', 'Попытка украсть астральный компонент');
    define('L_REASON', 'Вы были брошены в тюрьму на 2 дня за попытку украсть астральный компонент. Вы можете выйти из тюрьмы под залог: ');
    define('C_CACHED', 'Пойман (Опис...)');
    define('NO_AMOUNT', 'Нет эффектов(Опис..)');
    define('SUCCESFULL', 'Успешно (Опис...)');
    define('L_CACHED', 'Житель ');
    define('L_CACHED2', ' ID: ');
    define('L_CACHED3', ' пытался украсть астральный компонент из рынка. К счастью он был схвачен охраниками.');
    define('ASTRAL_GONE', 'Изчез/Украли Ваш компонент (Опис...)');
    define('PIECE', ' кусок карты/плана <b>');
    define('COMPONENT', ' полный комплект <b>');
}
?>
