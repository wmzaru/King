<?php
/**
 *   File functions:
 *   Russian language for alchemik.php
 *
 *   @name                 : alchemik.php
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 1.2
 *   @since                : 04.07.2006
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
// $Id: alchemik.php 425 2006-07-04 19:02:38Z thindil $

define('ERROR', 'Ошибка!');

if (!isset($_GET['alchemik']))
{
    define('WELCOME', 'Добро пожаловать в дом Алхимика');
    define('A_RECIPES', 'Купить рецепт на зелье');
    define('A_MAKE', 'Пройти в кабинет');
    define('A_ASTRAL', 'Создать астральную смесь');
}

if (isset ($_GET['alchemik']) && $_GET['alchemik'] == 'przepisy')
{
    define('RECIPES_INFO', 'Добро пожаловать в магазин для алхимиков. Здесь вы можете купить рецепты зелья, по которым можно создать. Чтобы купить конкретный рецепт, вы должны иметь достаточно золота. Вот список доступных рецептов:');
}

if (isset ($_GET['alchemik']) && $_GET['alchemik'] == 'pracownia')
{
    define('NO_PLAN', 'У вас нету такого рецепта
	+!');
    if (!isset($_GET['rob']))
    {
        define('ALCHEMIST_INFO', 'Здесь вы можете делать зелья для которых у вас есть рецепты. Для того, чтобы создать зелье, вы должны иметь нужное количество трав. Каждая попытка будет стоить вам 1 очко энергии. Даже неудачная попытка дает вас 0,01 к навыку.<br />  Вот список зелий, которые вы можете сделать:');
        define('R_NAME', 'Название');
        define('R_LEVEL', 'Уровень');
        define('R_ILLANI', 'Illani');
        define('R_ILLANIAS', 'Illanias');
        define('R_NUTARI', 'Nutari');
        define('R_DYNALLCA', 'Dynallca');
    }
    if (isset($_GET['dalej']))
    {
        define('DEAD_PLAYER', 'Вы не можете делать зелья, потому что ты мертв!');
        define('P_START', 'Попробовать создать');
        define('P_AMOUNT', 'штук');
        define('A_MAKE', 'Выполнить');
    }
    if (isset($_GET['rob']))
    {
        define('NO_HERBS', 'У вас нет столько трав !');
        define('NO_ENERGY', 'У вас нету столько энергии!');
        define('NO_RECIPE', 'У вас нету такого рецепта');
        define('E_DB', 'Не могу прочитать базу данных!');
        define('E_DB2', 'Не могу добавить зелье! ');
        define('YOU_MAKE', 'Вы сделали');
        define('P_GAIN', 'штук. Получили');
        define('EXP_AND', 'опыта и');
        define('ALCHEMY_LEVEL', 'к уровню навыка в алхимии.');
    }
}
?>
