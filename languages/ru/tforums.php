<?php
/**
 *   File functions:
 *   Russian language for clans forums
 *
 *   @name                 : tforums.php                            
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 1.0
 *   @since                : 08.02.2006
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
define('A_BACK', 'Назад');
define('NO_TOPIC', 'Nie ma takiego tematu. <a href="tforums.php?view=topics">'.A_BACK.'</a>');
define('EMPTY_FIELDS', 'Wypełnij wszystkie pola <a href="tforums.php?view=topics">'.A_BACK.'</a>');
define('ERROR', 'Zapomnij o tym! <a href="tforums.php?view=topics">'.A_BACK.'</a>');

if (isset ($_GET['view']) && $_GET['view'] == 'topics') 
{
    define('T_TOPIC', 'Temat');
    define('T_AUTHOR', 'Autor');
    define('T_REPLIES', 'Odpowiedzi');
    define('ADD_TOPIC', 'Dodaj temat');
    define('T_TEXT', 'Tekst');
    define('A_SEARCH', 'Szukaj');
    define('T_WORD', 'słowa');
    define('T_STICKY', 'Dodaj temat jako ogłoszenie');
}

if (isset($_GET['topic'])) 
{
    define('A_DELETE', 'Skasuj');
    define('WRITE_BY', 'napisany przez');
    define('A_REPLY', 'Odpowiedz');
    define('R_TEXT', 'Tekst');
    define('WRITE', 'napisał(a)');
    define('A_STICKY', 'Przyklej');
    define('A_UNSTICKY', 'Odklej');
    define('A_QUOTE', 'Cytuj');
}

if (isset ($_GET['action']) && $_GET['action'] == 'addtopic') 
{
    define('TOPIC_ADD', 'Temat dodany. Kliknij');
    define('TO_BACK', 'tutaj</a> aby wrócić do listy tematów.');
    define('NO_PERM', 'Nie masz uprawnień do tego!');
}

if (isset($_GET['reply'])) 
{
    define('REPLY_ADD', 'Odpowiedź dodana. Kliknij');
    define('A_HERE', 'tutaj');
}

if (isset($_GET['sticky']))
{
    define('YOU_STICKY', 'Przykleiłeś temat');
    define('YOU_UNSTICKY', 'Odkleiłeś temat');
}

if (isset($_GET['kasuj'])) 
{
    define('POST_DEL', 'Post wykasowany');
}

if (isset($_GET['kasuj1'])) 
{
    define('TOPIC_DEL', 'Temat wykasowany');
}

if (isset($_GET['action']) && $_GET['action'] == 'search')
{
    define('NO_SEARCH', 'Nie ma takiego słowa na tym forum!');
    define('YOU_FIND', 'Oto lista tematów w których znajduje się szukane słowo');
}
?>
