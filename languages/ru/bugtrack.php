<?php
/**
 *   File functions:
 *   Russian language for bugtrack
 *
 *   @name                 : bugtrack.php
 *   @copyright            : (C) 2004-2005 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @author               : Marek 'marq' Chodor <marek.chodor@gmail.com>
 *   @version              : 0.8 beta
 *   @since                : 24.08.2007
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

define('NO_PERM', 'Вы не имеете права здесь находиться');
define('BUG_INFO', 'Вот список ошибок сообщает PHP');
define('A_DELETE', 'Удалить');
define('A_CLEAR', 'Очистить');
define('B_ID', 'ID');
define('B_TYPE', 'Тип');
define('B_FILE', 'Файл');
define('B_REF', 'Предоставил');
define('B_LINE', 'Линия');
define('B_INFO', 'Информация');
define('B_AMOUNT', 'Количество');

if (isset($_GET['action']) && ($_GET['action'] == 'delete' || $_GET['action'] == 'clear'))
{
    define('DELETED', 'Ошибки удалены! <a href="bugtrack.php">Назад</a>');
}
?>
