<?php
/**
 *   File functions:
 *   Russian language for mail
 *
 *   @name                 : mail.php                            
 *   @copyright            : (C) 2004,2005,2006,2007 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
  *   @author               : eyescream <tduda@users.sourceforge.net>
 *   @version              : 1.4
 *   @since                : 25.04.2007
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
// $Id: mail.php 919 2007-03-03 17:56:10Z thindil $

define('MAIL_DEL', '<br />Listy usunięte');
define('A_REFRESH', 'Обновить');
define('ERROR', 'Ошибка!');
define('A_INBOX', 'Skrzynka');
define('A_WRITE', 'Napisz');
define('DELETED', 'Wybrane wiadomości zostały wykasowane!');
define('T_SELECT', 'Zaznacz');
define('A_DELETE_S', 'Kasuj zaznaczone');
define('SAVED', 'Wybrane wiadomości zostały zapisane!');
define('A_SAVE_S', 'Zapisz zaznaczone');
define('A_DELETE_OLD', 'Kasuj starsze niż');
define('A_WEEK', 'tydzień');
define('A_2WEEK', '2 tygodnie');
define('A_MONTH', '30 dni');
define('DELETED2', 'Wykasowałeś stare wiadomości.');
define('A_READ_C', 'Z cenzurą');
define('A_READ_U', 'Bez cenzury');
define('A_READ2', 'Oznacz jako przeczytane');
define('A_UNREAD', 'Oznacz jako nieprzeczytane');
define('MARK_AS_READ', 'Wybrane wiadomości zostały oznaczone jako przeczytane.');
define('MARK_AS_UNREAD', 'Wybrane wiadomości zostały oznaczone jako nieprzeczytane.');
define('FROM', 'Od');
define('S_ID', 'ID');
define('M_TITLE', 'Temat');
define('M_READ', 'Czytaj');
define('UNREAD_MAIL', 'Nieprzeczytane listy:');
define('REPLY_PREFIX', 'Odp:');
    
if (!isset($_GET['view']) && !isset($_GET['read']) && !isset($_GET['zapisz']) && !isset($_GET['kasuj']))
{
    define('MAIL_INFO', 'Co chcesz zrobić?');
    define('A_SAVED', 'Zapisane');
    define('A_OUTBOX', 'Wysłane');
    define('A_BLOCK_LIST', 'Lista zablokowanych');
}

if (isset ($_GET['view']) && $_GET['view'] == 'inbox')
{
    define('A_CLEAR', 'Wyczyść Skrzynkę');
    define('A_SAVED', 'Zapisane');
}

if (isset ($_GET['view']) && $_GET['view'] == 'zapis')
{
    define("A_CLEAR", "Wykasuj zapisane listy");
}

if (isset ($_GET['view']) && $_GET['view'] == 'send') 
{
    define('S_TO', 'Do');
    define('A_CLEAR', 'Wykasuj wysłane listy');
    define('A_BACK', 'Назад');
}

if (isset ($_GET['view']) && $_GET['view'] == 'write') 
{
    define('NOT_YOUR', 'To nie jest list do ciebie!');
    define('EMPTY_FIELDS', 'Wypełnij wszystkie pola.');
    define('NO_PLAYER', 'Nie ma takiego gracza.');
    define('YOU_SEND', 'Wysłałeś wiadomość do ');
    define('S_TO', 'Do (ID Numer)');
    define('M_BODY', 'Содержание');
    define('A_SEND', 'Отправить');
    define('YOURSELF', 'Nie możesz wysyłać listu do samego siebie!');
    define('YOU_CANNOT', 'Nie możesz wysyłać listów, ponieważ zostałeś zablokowany!');
    define('PLAYER', 'Gracz');
    define('WROTE', 'napisał:');
}

if (isset ($_GET['read']) || isset ($_GET['zapisz']) || isset ($_GET['kasuj'])) 
{
    define('NO_MAIL', 'Nie ta wiadomość.');
    define('NOT_YOUR', 'To nie twój list.');
    define('MAIL_SAVE', '<br />Zapisano list');
    define('MAIL_DEL2', '<br />Usunięto list');
}

if (isset ($_GET['read'])) 
{
    define('A_SAVE', 'Zapisz');
    define('A_DELETE', 'Skasuj');
    define('A_REPLY', 'Odpisz');
    define('A_SEND', 'Wyślij do władcy lub księcia');
    define('T_WRITE', 'napisał(a)');
    define('T_DAY', 'Dnia ');
    define('A_BLOCK', 'Zablokuj/Odblokuj tego gracza');
}

if (isset ($_GET['send'])) 
{
    define('NO_PLAYER', 'Nie ma takiego gracza!');
    define('NOT_STAFF', 'Ten gracz nie jest ani władcą ani księciem!');
    define('NO_MAIL', 'Nie ma takiego listu!');
    define('NOT_YOUR', 'To nie twój list!');
    define('L_PLAYER', 'Gracz ');
    define('L_ID', ' o ID:');
    define('SEND_YOU', ' wysłał ci list od gracza ');
    define('M_TITTLE', 'List gracza ');
    define('M_TITLE2', '<b>Temat</b>:');
    define('M_BODY', '<br /><b>Treść</b>:');
    define('YOU_SEND', 'Wysłałeś(aś) list do ');
    define('SEND_THIS', 'Wyślij ten list do');
    define('A_SEND', 'Отправить');
    define('M_DATE', '<br /><b>Data wysłania</b>:');
}

if (isset($_GET['block']))
{
    define('NO_PLAYER', 'Nie ma takiego gracza.');
    define('YOU_BLOCK', 'Zablokowałeś wysyłanie maili do siebie przez tego gracza.');
    define('YOU_UNBLOCK', 'Odblokowałeś wysyłanie maili do siebie przez tego gracza.');
}

if (isset($_GET['view']) && $_GET['view'] == 'blocks')
{
    define('A_UNBLOCK', 'Odblokuj zaznaczonych');
    define('NO_BANNED', 'Nikogo jeszcze nie zablokowałeś.');
    define('A_BACK', 'Назад');
    define('YOU_UNBAN', 'Odblokowałeś wybranych graczy na poczcie.');
}
?>
