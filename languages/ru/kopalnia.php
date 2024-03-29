<?php
/**
 *   File functions:
 *   Russian language for mines in moutanins
 *
 *   @name                 : kopalnia.php                            
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 1.3
 *   @since                : 19.10.2006
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
// $Id: kopalnia.php 742 2006-10-19 12:14:59Z thindil $

define('ERROR', 'Ошибка!');
define('A_SEARCH', 'Szukaj');
define('T_MINERALS', 'minerałów');
define('T_AMOUNT', 'razy.');

if (!isset ($_GET['action'])) 
{
    define('MINES_INFO', '<p>Witaj w kopalniach Gór Migotliwych, czy chcesz wyruszyć na poszukiwanie minerałów? Każde poszukiwanie zabiera 1 punkt energii.</p>');
}

if (isset($_GET['action']) && $_GET['action'] == 'dig')
{
    define('NO_ENERGY', 'Nie masz tyle energii!');
    define('YOU_DEAD', 'Nie możesz pracować w kopalni, ponieważ jesteś martwy!');
    define('M_LOST_HP1', '<br /><br />Nagle poczułeś, jak całe wyrobisko powoli zaczyna się rozpadać. Najszybciej jak potrafisz próbowałeś biec w kierunku wyjścia. Niestety, tym razem żywioł okazał się szybszy od Ciebie. Potężna lawina kamieni spadła na Ciebie, Tracisz ');
    define('M_LOST_HP2', ' punktów życia.');
    define('M_LUCK', '<br /><br />Nagle poczułeś, jak całe wyrobisko powoli zaczyna się rozpadać. Najszybciej jak potrafisz próbowałeś biec w kierunku wyjścia. W ostatnim momencie udało Ci się wybiec z zagrożonego wyrobiska, poczułeś jedynie na plecach podmuch walących się ton skał.');
    define('MINES_INFO', 'Czy chcesz wyruszyć na poszukiwanie minerałów ponownie?');
    define('YOU_GO', 'Wybrałeś się na poszukiwanie minerałów ');
    define('T_AMOUNT2', ' razy.');
    define('YOU_FIND', '<br /><br />Zdobyłeś:<br /><br />');
    define('T_ABILITY', ' punktów do umiejętności górnictwo oraz ');
    define('T_GAIN_EXP', ' punktów doświadczenia.<br />');
    define('T_CRYSTALS', ' kryształów<br />');
    define('T_ADAMANTIUM', ' brył adamantium<br />');
    define('T_MITHRIL', ' sztuk mithrilu<br />');
    define('T_GOLD', 'nieco diamentów wartych ');
    define('T_GOLD2', ' sztuk złota<br />');
    define('T_NOTHING', '<br /><br />Niestety nic nie znalazłeś.');
    define('DEAD_MAN', 'Niestety podczas kopania zawalił się strop wprost na Ciebie. Tracisz wszystkie punkty życia');
}
?>
