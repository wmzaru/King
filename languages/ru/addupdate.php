<?php
/**
 *   File functions:
 *   Russian language for addupdate.php
 *
 *   @name                 : addupdate.php                            
 *   @copyright            : (C) 2004-2005 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 0.8 beta
 *   @since                : 16.02.2005
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

define('NOT_HAVE', 'Вы не имеете права здесь находиться!');
define('U_TITLE', 'Название');
define('U_TEXT', 'Содержание');
define('U_ADD', 'Добавить обновление');
define('U_LANG_S', 'Язык');
define('ERROR', 'Ошибка!');
define('EMPTY_FIELDS', 'Заполните все поля');

if (isset ($_GET['action']) && $_GET['action'] == 'add') 
{
    define('E_DB', 'Невозможно добавить!');
    define('U_SUCCES', 'Новость добавлена');
}

if (isset ($_GET['modify'])) 
{
    define('U_MODIFY', 'Изменение новостей');
}

if (isset ($_GET['action']) && $_GET['action'] == 'modify') 
{
    define('U_MODIFIED', 'Новость изменена.');
    define('NO_UPD', 'Новость не существует!');
}
?>
