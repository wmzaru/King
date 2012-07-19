<?php
/**
 *   File functions:
 *   Russian language for ap.php
 *
 *   @name                 : ap.php                            
 *   @copyright            : (C) 2004-2005 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 0.8 beta
 *   @since                : 05.03.2005
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
// 

define('NO_CLASS', 'Вы не можете распределять АБ без выбраной расы и класса! (<a href="stats.php">Назад</a>) ');
define('NO_AP3', 'Вы не имеете права для распределения АБ! (<a href="stats.php">Назад</a>)');
if (isset ($_GET['step']) && $_GET['step'] == 'add') 
{
    define('EMPTY_FIELDS', 'Заполните все поля!');
    define('ERROR', 'Запрещенная операция!');
    define('NO_AP', 'У вас нету столько Астральных Баллов!');
    define('NO_AP2', 'У вас закончились Астральных Баллов!');
    define('A_STRENGTH', 'Сила');
    define('A_AGILITY', 'Ловкость');
    define('A_INTELIGENCE', 'Интелект');
    define('A_WISDOM', 'Сила воли');
    define('A_SPEED', 'Скорость');
    define('A_CONDITION', 'Выносливость');
    define('YOU_GET', 'Увеличить');
    define('CLICK', 'Вернуть');
    define('FOR_A', ' в статистику');
}
if (!isset ($_GET['step']))
{
    define('AP_INFO', 'Вы можете использовать АБ для увеличения своих параметров. Введите количество AБ которые вы хотите потратить на развитие индивидуальных особеностей. У вас в настоящее время');
    define('AP', 'АБ');
    define('A_ADD', 'Добавить');
    define('PER_AP', 'за 1 АБ');
    $arrStatDesc = array('Сила', 'Ловкость', 'Скорость', 'Выносливость', 'Интелект', 'Сила воли');
    define('GET_BACK_DESC', 'Вы можете восстановить АБ и распределить их заново.');
    define('GET_BACK_LINK', 'Вернуть АБ');
}
if (isset ($_GET['step']) && $_GET['step'] == 'reassign')
{
    define('TOO_OLD', 'Вы выросли из этой игрушки!');
    define('MAX_AP', 'Вы больше не можете восстановить АБ!');
    define('RE_INFO', 'Вы можете вернуть баллы AP до момента распределения АБ. <br /> <b>Помните!</b> Восстановление АБ связано с потерей характеристик, полученые ранее за эти балы.<br /><br />');
    define('A_YES', 'Да');
    define('A_NO', 'Нет');
    define('GOT_BACK_PRE', 'У тебя есть');
    define('GOT_BACK_MID', 'Асстральных Балов. Тепер у вас есть всего');
    define('GOT_BACK_POST', 'АБ, которые можно повторно распределить.');
}
?>
