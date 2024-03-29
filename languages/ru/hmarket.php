<?php
/**
 *   File functions:
 *   Russian language for herbs market
 *
 *   @name                 : hmarket.php                            
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @author               : eyescream <tduda@users.sourceforge.net>
 *   @version              : 1.3
 *   @since                : 27.11.2006
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
// $Id: hmarket.php 856 2006-11-29 17:30:36Z thindil $

define('ERROR', 'Ошибка!');
define('A_BACK', 'Назад');
define('HERB', 'Zioło');
define('N_HERB1', 'Zioło1 (Illani)');
define('N_HERB2', 'Zioło2 (Illanias)');
define('N_HERB3', 'Zioło3 (Nutari)');
define('N_HERB4', 'Zioło4 (Dynallca)');
define('N_HERB5', 'nasiona Zioła1 (Illani)');
define('N_HERB6', 'nasiona Zioła2 (Illanias)');
define('N_HERB7', 'nasiona Zioła3 (Nutari)');
define('N_HERB8', 'nasiona Zioła4 (Dynallca)');

if (!isset($_GET['view']) && !isset($_GET['buy']) && !isset($_GET['wyc']))
{
    define('A_BACK2', 'Wróć na rynek.');
    define('A_VIEW', 'Zobacz oferty');
    define('A_SEARCH', 'Szukaj ofert');
    define('A_ADD', 'Dodaj ofertę');
    define('A_DELETE', 'Skasuj wszystkie swoje oferty');
    define('A_LIST', 'Spis wszystkich ofert na rynku');
    define('M_INFO', 'Tutaj jest rynek z ziołami. Masz parę opcji');
}

if (isset ($_GET['view']) && $_GET['view'] == 'szukaj') 
{
    define('S_INFO', 'Szukaj ofert na rynku lub');
    define('S_INFO2', 'Jeżeli nie znasz dokładnej nazwy zioła, użyj znaku * zamiast liter');
    define('A_SEARCH', 'Szukaj');
}

if (isset ($_GET['view']) && $_GET['view'] == 'market') 
{
    define('NO_OFERTS', 'Nie ma ofert na rynku.');
    define('A_BUY', 'Kup');
    define('A_DELETE', 'Wycofaj');
    define('A_PREVIOUS', 'Poprzednie');
    define('A_NEXT', 'Następne');
    define('VIEW_INFO', 'Zobacz ceny ziół lub');
    define('T_AMOUNT', 'Ilość');
    define('T_COST', 'Koszt');
    define('T_SELLER', 'Sprzedający');
    define('T_OPTIONS', 'Opcje');
}

if (isset ($_GET['view']) && $_GET['view'] == 'add') 
{
    define('NO_AMOUNT', 'Nie masz takiej ilości ');
    define('YOU_ADD', 'Dodałeś <b>');
    define('ON_MARKET', ' na rynku za <b>');
    define('FOR_GOLDS', ' sztuk złota</b>');
    define('A_REFRESH', 'Обновить');
    define('ADD_INFO', 'Dodaj ofertę na rynku lub');
    define('H_AMOUNT', 'Ilość ziół');
    define('H_COST', 'Cena za sztukę');
    define('A_ADD', 'Добавить');
    define('YOU_WANT', 'Czy chcesz dodać tę ofertę do już istniejącej własnej oferty?');
    define('ON_MARKET2', ' do już istniejącej własnej oferty.');
    define('T_AMOUNT', 'ilość');
}

if (isset ($_GET['view']) && $_GET['view'] == 'del') 
{
    define('YOU_DELETE', 'Usunąłeś wszystkie swoje oferty i twoje zioła wróciły do ciebie.');
}

if (isset($_GET['buy'])) 
{
    define('BUY_INFO', 'Zakup zioła lub');
    define('O_AMOUNT', 'Ilość w ofercie');
    define('H_COST', 'Cena za sztukę');
    define('SELLER', 'Sprzedający');
    define('B_AMOUNT', 'Ilość');
    define('A_BUY', 'Kup');
    define('NO_OFERTS', 'Nie ma takiej oferty na rynku.');
    define('IS_YOUR', 'Nie możesz kupić swoich ziół!');
    if (isset($_GET['step']) && $_GET['step'] == 'buy') 
    {
        define('NO_MONEY', 'Nie stać cię!');
        define('NO_AMOUNT', 'Nie ma takiej ilości ');
        define('ON_MARKET', ' na rynku!');
        define('L_ACCEPT', '</a></b>, ID <b>');
        define('L_ACCEPT2', '</b> zaakceptował Twoją ofertę za ');
        define('L_AMOUNT', ' sztuk ');
        define('YOU_GET', '. Dostałeś <b>');
        define('TO_BANK', '</b> sztuk złota do banku.');
        define('YOU_BUY', 'Kupiłeś <b>');
        define('I_AMOUNT', ' sztuk</b> ');
        define('FOR_A', ' za ');
        define('GOLD_COINS', ' sztuk złota.');
    }
}

if (isset($_GET['wyc'])) 
{
    define('NOT_YOUR', 'Nie możesz wycofać cudzych ofert!');
    define('YOU_DELETE', 'Usunąłeś swoją ofertę i twoje zioła wróciły do ciebie.');
}

if (isset($_GET['view']) && $_GET['view'] == 'all') 
{
    define('LIST_INFO', 'Tutaj masz spis wszystkich ofert jakie są na rynku.');
    define('H_NAME', 'Nazwa');
    define('H_AMOUNT', 'Ofert');
    define('H_ACTION', 'Akcja');
    define('A_SHOW', 'Pokaż');
}
?>
