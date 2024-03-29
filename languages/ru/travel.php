<?php
/**
 *   File functions:
 *   Russian language for travel
 *
 *   @name                 : travel.php
 *   @copyright            : (C) 2004,2005,2006,2007 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @author               : eyescream <tduda@users.sourceforge.net>
 *   @version              : 1.4
 *   @since                : 28.03.2007
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

define('MESSAGE1', 'Podróż przebiegała spokojnie, po pewnym czasie widzisz przed sobą cel swej podróży.');
define('MESSAGE2', '<p>Straciłeś życie, ');
define('MESSAGE3', '<p>Bandyci!! Szybko przygotowujesz się do walki<br />');
define('MESSAGE4', '<br />Niestety tym razem przeznaczenie okazało się silniejsze od Ciebie. Straciłeś życie, ');
define('MESSAGE5', 'Po pokonaniu przeciwników karawana ponownie wyrusza w drogę. Tym razem przebiega ona bez niespodzianek.');
define('NO_MONEY', 'Nie masz tyle pieniędzy!');
if (!defined('YOU_DEAD'))
{
	define('YOU_DEAD', 'Nie możesz podróżować, ponieważ jesteś martwy!');
}
if (!defined('NO_ENERGY'))
{
define('NO_ENERGY', 'Nie masz energii aby podróżować!');
}
if (!defined('G_COINS'))
{
define('G_COINS', ' sztuk(i) złota oraz ');
}
define('A_HOSPITAL1', 'Mija wieczność i? Czyżby to zapach ');
define('A_HOSPITAL2', 'maści uśmierzających ból?');
define('PLATINUM', ' mithrilu!</p>');

// Location names for "players" database array.
define('L_ELVEN_CITY', 'Ardulith');
define('L_CAPITOL', 'Altara');
define('L_MOUNTAINS', 'Góry');
define('L_FOREST', 'Las');
define('L_TRAVEL', 'Podróż');
define('L_PORTAL', 'Portal');
define('L_DUNGEON', 'Lochy');
// Special player ranks.
define('RANK_HERO', 'Bohater');


if ($_GET['akcja'] == '' && $_GET['action'] == '')
{
    define('STABLES_INFO', 'Witaj w Stajniach. Stąd możesz wyruszyć do innych miejsc świata '.$gamename.'.');
    define('A_FOREST', 'Las Krętych Ścieżek');
    define('A_ELFCITY', $city2);
    define('A_MOUNTAINS', 'Góry Migotliwe');
    define('PORTAL1', 'Nieco na uboczu dostrzegasz dziwnego starca przyglądającego się Tobie z ciekawością. Kiedy zauważa że mu się przyglądasz, daje znak ręką abyś podszedł do niego. Obaj odchodzicie ze stajni w niewielką boczną uliczkę '.$city1b.'. Kiedy zatrzymujecie się starzec cichym głosem mówi: <i> Wyczuwam, iż chcesz wyruszyć na wyprawę po skarby dawno zaginione. Wiem że masz przy sobie odpowiednią rzecz, która pozwoli Ci znaleźć rzeczy Pierwszych. Jeżeli chcesz mogę cię przenieść w odpowiednie miejsce. Lecz uważaj - skarbów strzeże niebezpieczne istota pozostawiona  tam przez właścicieli. Czy chcesz wyruszyć w to miejsce?</i>');
    define('OUTSIDE', 'Witaj w Stajniach. Stąd możesz wyruszyć do innych miejsc świata '.$gamename.'.');
    define('A_CAPITOL', 'Jedź do '.$city1b.'');
    define('MAP1', 'Plan demoniczny');
    define('MAP2', 'Plan ognisty');
    define('MAP3', 'Plan piekielny');
    define('MAP4', 'Plan pustynny');
    define('MAP5', 'Plan wodny');
    define('MAP6', 'Plan niebiański');
    define('MAP7', 'Plan śmiertelny');
    define('T_PORTALS', 'Na jednej ze ścian stajni nagle zauważasz magiczne portale. Domyślasz się że prowadzą one do nieznanych, niebezpiecznych światów, a to że obecnie działają jest zasługą tego iż posiadasz przy sobie skompletowane mapy. Powoli podchodzisz w tym kierunku i przechodzisz przez portal na...');
}

if (isset($_GET['action']))
{
	define('YOU_IN', 'Tutaj się znajdujesz!');
	define('MNT_FREE', 'Podróż w Góry Migotliwe z Agarakar jest darmowa. Kliknij <a href="city.php?step=gory">tutaj</a>, aby tam dotrzeć.');
	define('CITY_FREE', 'Podróż do Agarakar z Gór Migotliwych jest darmowa. Kliknij <a href="gory.php?action2=city">tutaj</a>, aby tam dotrzeć.');
        define('A_CARAVAN', 'Podróżuj z karawaną');
        define('A_COST', 'sztuk złota');
        define('A_ENERGY1', 'punkt energii');
        define('A_ENERGY2', 'punktów energii');
        define('A_WALK', 'Idź na piechotę');
	define('A_TELEPORT', 'Teleportacja');
	define('A_BACK', 'Назад');
}

if (isset ($_GET['akcja']))
{
    switch ($_GET['akcja'])
    {
        case 'gory':
            define('YOU_REACH', ' Dotarłeś do Gór Migotliwych. Wejdź <a href=gory.php>tutaj</a>, aby zobaczyć co Ciebie czeka.');
            break;
        case 'las':
            define('YOU_REACH', ' Dotarłeś do Lasu Krętych Ścieżek. Wejdź <a href=las.php>tutaj</a>, aby zobaczyć co Ciebie czeka.');
            break;
        case 'city2':
            define('YOU_REACH', ' Dotarłeś do '.$city2.'. Wejdź <a href=city.php>tutaj</a>, aby zobaczyć co Ciebie czeka.');
            break;
        case 'tak':
            define('PORTAL2', 'Starzec zamyka oczy i bezgłośnie zaczyna wymawiać jakieś zaklęcie, kreśląc rękami w powietrzu dziwne wzory. Nagle tuż przed tobą otwiera się zielony portal. Niepewnie przechodzisz przez <a href=\'portal.php\'>portal</a>');
            break;
        case 'nie':
            define('PORTAL3', 'Starzec patrzy na Ciebie przez chwilę i odpowiada: <i>Dobrze więc, jeżeli będziesz chciał wyruszyć na poszukiwania przybądź w to samo miejsce gdzie spotkaliśmy się za pierwszym razem. Będę tam na Ciebie czekał.</i> Po tych słowach odchodzi. Ty natomiast wracasz do <a href=\'city.php\'>miasta</a>');
        default:
            define('YOU_REACH', ' Dotarłeś do '.$city1b.'. Wejdź <a href=city.php>tutaj</a> aby zobaczyć co Ciebie czeka.');
            break;
    }
}
?>
