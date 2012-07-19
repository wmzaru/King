<?php
/**
 *   File functions:
 *   Russian language for fletcher shop
 *
 *   @name                 : bows.php                            
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 1.1
 *   @since                : 28.03.2006
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
// $Id: bows.php 127 2006-04-12 18:32:13Z thindil $

define('ERROR', 'Ошибка!');
if (isset ($_GET['buy']) || isset($_GET['step'])) 
{
    define('NO_ITEM', 'Нет такогопредмета');
    define('NO_MONEY', 'Слишком дорого!');
    define('E_DB', 'немогу добавить');
    define('YOU_BUY', 'Вы заплптили');
    define('GOLD_COINS', 'золота, но теперь у вас есь новый');
    define('DAMAGE', 'к ущербу.');
    define('WITH', 'с');
}
    else
{
    if ($player -> location != 'Ardulith')
    {
        define('SHOP_INFO', 'Описание хирурга');
        define('SHOP_INFO2', '<br> Описание хирурга 2');
    }
        else
    {
        define('SHOP_INFO', 'Описание хирурга');
    }
    define('I_NAME', 'Название');
    define('I_DUR', 'Wt.');
    define('I_EFECT', 'Эфект');
    define('I_COST', 'Цена');
    define('I_LEVEL', 'Требуемый уровень');
    define('I_SPEED', 'Скорость');
    define('I_OPTION', 'Параметры');
    define('A_BUY', 'Купить');
    define('A_STEAL', 'Украсть');
}

if (isset($_GET['arrows']))
{
    define('T_ARROWS', 'колчаны');
    define('T_AMOUNT', 'золото каждый раз');
    define('FOR_A', 'за');
    define('T_AMOUNT2', 'еденицу');
    define('T_AMOUNT3', 'золота за раз.');
}
?>
