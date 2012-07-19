<?php
/**
 *   File functions:
 *   Russian language for includes/artisan.php
 *
*   @name                 : artisan.php
 *   @copyright            : (C) 2007 Orodlin Team based on Vallheru Engine 1.3
 *   @author               : eyescream <tduda@users.sourceforge.net>
 *   @version              : 1.4
 *   @since                : 22.03.2007
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

define('YOU_HAVE_LOST_A_PLAN', 'При попытке соединения компонентов рецепт был уничтожен!');
define('ARTISAN', 'Мастер');

    define('I_NAME', 'Название');
    define('I_COST', 'Цена');
    define('I_LUMBER', 'Куски дерева');
    define('I_BARS', 'Слитки');
    define('I_LEVEL', 'Уровень');
    define('I_OPTION', 'Параметры');
    define('A_BUY', 'Купить');
    define('NO_MONEY', 'Вы не можете позволить себе!');
    define('YOU_PAY', 'Вы заплатили');
    define('NOT_FOR_SALE', 'Тут такого не продают.');
    define('CREATION_INFO', 'Здесь вы можете делать вещи, которые имеют рецепт. Чтобы создать элемент, у вас должно быть нужное количество сырья. Каждая попытка будет стоить вам, так много энергии на уровне элементов. Даже при неудачной попытке вы получите 0,01 к навыку.');
    define('INFO', 'Вот список вещей, которые вы можете сделать, если у вас недостаточно энергии, чтобы создать этот объект, вы можете просто сделать его по частям.');

    define('INFO2', 'Создать сейчас');
    define('I_PERCENT', 'Сделано (в %)');
    define('I_ENERGY', 'Нужно еще');
    define('I_ENERGY2', 'энергии');

if ( (isset ($_GET['kowal']) && $_GET['kowal'] == 'plany') || (isset ($_GET['mill']) && $_GET['mill'] == 'plany') || isset($_GET['step']) && $_GET['step'] == 'plans')
{
    define('YOU_HAVE', 'У вас уже есть рецепт!');
    define('NO_PLAN', 'У вас нет такого рецепта.');
    define('AND_BUY', 'золота, и купили новый план');
    define('WRONG_CLASS', 'Только мастер может купить этот план!'); // для ювелиров
}

if (isset ($_GET['alchemik']) && $_GET['alchemik'] == 'przepisy' && isset($_GET['buy']))
{
    define('YOU_HAVE', 'У вас уже есть рецепт!');
    define('NO_PLAN', 'Нет такого рецепта. Вернуться в <a href=\'alchemik.php?alchemik=przepisy\'>магазин</a>.');
    define('AND_BUY', 'золота, и купили новый рецепт');
}

if ( (isset($_GET['kowal']) && $_GET['kowal'] == 'astral') || (isset($_GET['mill']) && $_GET['mill'] == 'astral') || (isset($_GET['alchemik']) && $_GET['alchemik'] == 'astral') || (isset($_GET['step']) && $_GET['step'] == 'astral'))
{
    if ( (isset($_GET['kowal']) && $_GET['kowal'] == 'astral') || (isset($_GET['mill']) && $_GET['mill'] == 'astral') ||  (isset($_GET['step']) && $_GET['step'] == 'astral'))
    {
        define('ADAMANTIUM', 'Твердый адамантий');
        define('CRYSTAL', 'Кристал');
        define('METEOR', 'Штук метеорита');
        define('PINE', 'Древесина сосны');
        define('YEW', 'Древесина орешника');
        define('HAZEL', 'Древесина тиса');
        define('ELM', 'Древесина вяза');
        define('COPPER', 'Слитки меди');
        define('BRONZE', 'Слитки бронзы');
        define('BRASS', 'Слитки латуни');
        define('IRON', 'Слитки железа');
        define('STEEL', 'Слитки стали');
        define('COAL', 'Кусоки угля');

        define('ASTRAL_INFO', 'Здесь можно создавать разные астральные конструкции, если только у вас есть полностью их рецепты.');
        define('CONST1', 'Астральный компонент');
        define('CONST2', 'Звездный портал');
        define('CONST3', 'Светлый обелиск');
        define('CONST4', 'Факел пламени');
        define('CONST5', 'Серебряный фонтан');

        define('JEWELLERY1', 'Браслеты рассвета');
        define('JEWELLERY2', 'Ожерелье правды');
        define('JEWELLERY3', 'Скипетра мудрости');
        define('JEWELLERY4', 'Игристая диадема');
        define('JEWELLERY5', 'Кольцо судьбы');
        define('A_BUILD', 'Собрать');
    }
    if ( isset($_GET['alchemik']) && $_GET['alchemik'] == 'astral')
    {
        define('HERB1', 'Illani');
        define('HERB2', 'Nutari');
        define('HERB3', 'Illanias');
        define('HERB4', 'Dynalca');

        define('ASTRAL_INFO', 'Здесь вы можете создавать различные астральные зелья, если только у вас есть полностью их рецепты.');
        define('POTION1', 'Магическая эссенция');
        define('POTION2', 'Звездный цвет');
        define('POTION3', 'Элексир Иллюминатов');
        define('POTION4', 'Астральная среда');
        define('POTION5', 'Магия абсента');
        define('A_BUILD', 'Создать');
    }
    define('NO_ASTRAL_PLANS', 'У вас нет никаких рецептов чтобы закончить элементы, которые вы могли бы здесь сделать!');
    define('T_NAME', 'Название');
    define('NO_AMOUNT', 'У вас нету столько ');
    define('NO_MITH', 'У вас больше нет мифрила');
    define('NO_ENERGY', 'У вас мало энергии');
    define('YOU_MAKE', 'Вы сделали ');
    define('YOU_GAIN11', '! Заработали ');
    define('YOU_GAIN12', ' очков опыта и ');
    define('YOU_GAIN13', ' уровень(ей) в кузнечном мастерстве. ');
    define('YOU_FAIL', 'Попытка выполнить ');
    define('YOU_FAIL2',', к сожалению не удалась.');
    define('YOU_USE', 'Вы используете:<br />');
}