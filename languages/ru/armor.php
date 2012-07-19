<?php
/**
 *   File functions:
 *   Russian language for armor shop
 *
 *   @name                 : armor.php                            
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 1.3
 *   @since                : 12.10.2006
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
// $Id: armor.php 707 2006-10-12 16:23:29Z thindil $

define('ERROR', 'Ошибка!');

if (isset($_GET['buy']))
{
    define('NO_ITEM', 'Нет такой вещи!');
    define('BAD_STATUS', 'Тут такое не продается	!');
    define('NO_MONEY', 'Вы не можете себе это позволить!');
    define('YOU_PAY', 'Вы заплатили');
    define('AND_BUY', 'золота, и купили новый');
    define('I_POWER', 'к защите');
}
    else
{
    define('ARMOR_INFO', ' Оружейный магазин.');
    define('A_ARMORS', 'Броня');
    define('A_HELMETS', 'Шлемы');
    define('A_LEGS', 'Сапоги');
    define('A_SHIELDS', 'Щиты');
    define('I_NAME', 'Название');
    define('I_DUR', 'Срок');
    define('I_EFECT', 'Эффект');
    define('I_COST', 'Цена');
    define('I_LEVEL', 'Требуемый уровень');
    define('I_AGI', 'Минимальный навык');
    define('I_OPTION', 'Параметры');
    define('A_BUY', 'Купить');
    define('A_STEAL', 'Украсть');
}
?>
