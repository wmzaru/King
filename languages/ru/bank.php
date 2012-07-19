<?php
/**
 *   File functions:
 *   Russian language for bank
 *
 *   @name                 : bank.php
 *   @copyright            : (C) 2004,2005,2006,2007 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @author               : yeskov <yeskov@users.sourceforge.net>
 *   @author               : eyescream <tduda@users.sourceforge.net>
 *   @version              : 1.4
 *   @since                : 08.03.2007
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
// $Id: bank.php 950 2007-03-08 12:02:20Z thindil $

define('ERROR', 'Ошибка!');
define('MIN5', 'Слиток меди');
define('MIN8', 'Слиток железа');
define('MIN10', 'Куски угля');
define('MIN11', 'Твердый адамантит');
define('MIN12', 'Куски метеорита');
define('MIN13', 'Кристаллы');
define('MIN14', 'Древесина сосны');
define('MIN6', 'Слитки бронзы');
define('MIN7', 'Слитки латуни');
define('MIN9', 'Слитки стали');
define('MIN15', 'Древесина из лещины');
define('MIN16', 'Древесина тиса');
define('MIN17', 'Древесина из вяза');
define('MIN1', 'Руда меди');
define('MIN2', 'Руда цинка');
define('MIN3', 'Руда олова');
define('MIN4', 'Руда железа');
define('HERB1', 'Illani')
define('HERB2', 'Illanias');
define('HERB3', 'Nutari');
define('HERB4', 'Dynallca');
define('HERB5', 'семена Illani');
define('HERB6', 'семена Illanias');
define('HERB7', 'семена Nutari');
define('HERB8', 'семена Dynallca');
define('A_CRIME', 'Банк Цезарь');
define('BAD_PLAYER', 'Нельзя передавать самому себе!');
define('NO_PLAYER', 'Нет такого игрока!');
define('T_PLAYER', 'Игрок');
define('T_GIVE', 'Передали Вы');
define('NO_MINERAL', 'Вам не хватает');
define('YOU_SEND', 'Передать игроку');
define('T_AMOUNT', '</b> штук<b>');
define('NOT_YOUR', 'Это не твой перевод!');
define('NO_ITEM', 'Нет такого перевода!');
define('E_DB4', 'невозможно добавить!');
define('GOLD_COINS', 'золота.');
define('YOU_SEND2', 'Далее');
define('BANK_INFO', '<p>Добро пожаловать в хранилище. Здесь ты можешь хранить свое золото, чтобы у вас никто его не украл. Также из этого помещения вы можете пересылать другому игроку ресурсы или материалы.</p>');
define('I_WANT', 'Я хочу');
define('A_WITHDRAW', 'вывести');
define('A_DEPOSIT', 'депозит');
define('A_GIVE', 'дать');
define('D_PLAYER', 'игроку ID (номер)');
define('M_AMOUNT', 'кусков мифрила');
define('I_AMOUNT', 'штук');
define('I_AMOUNT2', 'число');
define('H_AMOUNT', 'в размере');
define('G_AMOUNT', 'в количестве');
define('T_ID', ' , ID ');
define('A_ASTRAL', 'Хранилище астральных компонентов (карты, планы, рецепты)');
define('A_ASTRAL2', 'Казна остральных компонентов (компоненты, конструкции, микстуры)');
define('ASTRAL_GOLD', ' золота');
define('ASTRAL_MITH', ' мифрила');
define('ADAMANTIUM', 'адамантина');
define('CRYSTAL', 'кристаллов');
define('BUY_SAFE', 'Увеличить место для астральных компонентов (увеличение на ');
define('BUY_SAFE2', ' уровне). Стоимость: ');
define('NO_MITHRIL', 'У вас недостаточно мифрила!');

define('I_DUR', 'сила:');  //Прочность элемента а не статистика игрока 'выносливость'!
define('I_AGI', 'zr:');
define('I_SPE', 'szyb:');
define('I_POWER', '');  // пустая строка для колеци элементов, добавленых в будущем приведет в главный бонус 'Magic super item (+50)', 'Adept's ring of wisdom (+1)' etc.
define('I_DEF', 'броня:');
define('I_ATT', 'атака:');
define('I_MANA', 'мана:'); //Добавляется и магической робе.


if (isset ($_GET['action']) && $_GET['action'] == 'minerals')
{
    define('COPPER', 'слиток меди');
    define('IRON', 'слиток железа');
    define('COAL', 'кусок угля');
    define('METEOR', 'кусок метеорита');
    define('PINE', 'древесина сосны');
    define('COPPERORE', 'руда меди');
    define('ZINCORE', 'руда цинку');
    define('TINORE', 'руда олова');
    define('IRONORE', 'руда железа');
    define('BRONZE', 'слиток бронзы');
    define('BRASS', 'слиток латуни');
    define('STEEL', 'слиток стали');
    define('HAZEL', 'древесина орешника');
    define('YEW', 'древесина тиса');
    define('ELM', 'древесина из вяза');
    define('NO_MINERALS', 'У вас мало минералов!');
    define('E_DB', 'ошибка при добавлении нового минерала!');
    define('E_DB2', 'ошибка при добавлении существующего минерала!');
}

if (isset ($_GET['action']) && $_GET['action'] == 'mithril')
{
    define('M_AMOUNT2', 'мифрила игроку ID');
}

if (isset ($_GET['action']) && $_GET['action'] == 'herbs')
{
    define('NO_HERBS', 'Нету трав!');
}

if (isset ($_GET['action']) && $_GET['action'] == 'potions')
{
    define('E_DB3', 'немогудобавить в журнал!');
}

if (isset ($_GET['action']) && $_GET['action'] == 'withdraw')
{
    define('EMPTY_FIELD', 'Введите сколько вы хотите вывести из банка');
    define('NO_MONEY', 'Нельзя вывести такую сумму.');
    define('WITHDRAW', 'Вывести');
}

if (isset ($_GET['action']) && $_GET['action'] == 'deposit')
{
    define('EMPTY_FIELD', 'Введите сколько золота вы хотите оставить в банке');
    define('NO_MONEY', 'Вы не можете вложить так много.');
    define('DEPOSIT', 'Вложить');
}

if (isset ($_GET['action']) && $_GET['action'] == 'donation')
{
    define('NO_GOLD', 'Не хватает золота в банке!');
    define('MINUS_GOLD', 'Вы неможете передать золото другим ирокам, если у вас отрицательная сумма!');
}

if (isset ($_GET['action']) && $_GET['action'] == 'steal')
{
	define('YOU_DEAD', 'Мертвый вор неможет воровать!');
    define('NO_CRIME', 'Вы не сможете обворовать банк, после вашей последней попытки!');
    define('VERDICT', 'Попытка кражи из банка в городе '.$city1a.'');
    define('L_REASON', 'Вы были брошены в тюрьму на 1 деньза попытку ограбления банка. Вы можете выйти из игры под залог.');
    define('C_CACHED', 'Пойманый(Опис...)');
    define('C_SUCCES', 'Украдено ');
    define('C_SUCCES2', ' золота. (Опис...)');
}

if (isset($_GET['action']) && $_GET['action'] == 'astral')
{
    define('T_NAME', 'Название');
    define('T_MAPS', 'Куски карты');
    define('T_PLANS', 'Куски плана');
    define('T_RECIPES', 'Куски рецептов');
    define('T_FORMULAS', 'Куски формул');
    define('MAP1', 'План демона');
    define('MAP2', 'План огня');
    define('MAP3', 'План жизни');
    define('MAP4', 'План пустыни');
    define('MAP5', 'План воды');
    define('MAP6', 'План бога');
    define('MAP7', 'План сметри');
    define('PLAN1', 'Астральный компонент');
    define('PLAN2', 'Звездный портал');
    define('PLAN3', 'Светлый обелиск');
    define('PLAN4', 'Факел пламени');
    define('PLAN5', 'Серебряный фонтан');
    define('RECIPE1', 'Магическая ессенция');
    define('RECIPE2', 'Звезный цвет');
    define('RECIPE3', 'Еликсир Иллюминатов');
    define('RECIPE4', 'Астральная среда');
    define('RECIPE5', 'Магия обсента');
    define('FORMULA1', 'Браслеты рассыета');
    define('FORMULA2', 'Ожерелье правды');
    define('FORMULA3', 'Скипетр мудрости');
    define('FORMULA4', 'Игриставя диадема');
    define('FORMULA5', 'Кольцо судьбы');
    define('YOU_MERGE', 'Создать план');
    define('T_MAPS2', 'Созданые карты');
    define('T_PLANS2', 'Собраные планы');
    define('T_RECIPES2', 'Созданые рецепты');
    define('T_FORMULAS2', 'Созданые формулы');
    define('T_SEND', 'Отправить игроку ID:');
    define('T_PIECE', 'часть компонента');
    define('T_COMPONENT', 'компонент');
    define('T_NUMBER', 'Номер:');
    define('T_AMOUNT2', 'Количество:');
    define('NO_AMOUNT', 'У вас нету столько компанентов!');
    define('YOU_GIVE', 'Вы передали');
    define('YOU_GET', 'Получили');
    define('PIECE', ' кусок(ов) карты/плана <b>');
    define('COMPONENT', ' кусков компонетов <b>');
    define('M_AMOUNT2', '</b> штук: ');
    define('D_PLAYER2', ' от игрока ID: ');
    define('A_GIVE2', 'Передать');
    define('COMP1', 'Зуб Glabrezu');
    define('COMP2', 'Огненая пыль');
    define('COMP3', 'Коготь Zgłębiczarta');
    define('COMP4', 'Шкала Skorpendry');
    define('COMP5', 'Маска Krakena');
    define('COMP6', 'Гром титана');
    define('COMP7', 'Ребро Лича');
    define('CONST1', 'Астральный компонент');
    define('CONST2', 'Звездный портал');
    define('CONST3', 'Светлый обелиск');
    define('CONST4', 'Факел пламени');
    define('CONST5', 'Серебряный фонтан');
    define('POTION1', 'Магическая ессенсия');
    define('POTION2', 'Звездный цвет');
    define('POTION3', 'Эликсир Иллюминатов');
    define('POTION4', 'Астральная среда');
    define('POTION5', 'Магия абсента');
    define('JEWELLERY1', 'Браслеты рассвета');
    define('JEWELLERY2', 'Ожерелье правды');
    define('JEWELLERY3', 'Скипетр мудрости');
    define('JEWELLERY4', 'Игристая диадема');
    define('JEWELLERY5', 'Кольцо судьбы');
    define('MAGICCOMP', 'Магия ингридиентов');
    define('MAGICCONST', 'Магия конструкций');
    define('MAGICPOTIONS', 'Магия микстур');
    define('MAGICJEWELLERY', 'Магия бижутерии');
}

if (isset($_GET['action']) && $_GET['action'] == 'safe')
{
    define('SAFE_ENOUGH', 'Вы не можете расширить, так как кэш достиг своего максимального уровня!');
    define('NO_MONEY', 'У вас нет столько золота!');
    define('YOU_UPGRADE', 'Построено расширение для астральных компонентов.');
}
?>
