<?php
/**
 *   File functions:
 *   Russian language for bot class
 *
 *   @name                 : bot_class.php                            
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 1.0
 *   @since                : 28.01.2006
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
// $Id: bot_class.php 566 2006-09-13 09:31:08Z thindil $

$arrReflectionsorg = array('ciebie');
$arrReflectionsans = array('mnie');
$arrPatsreglang = array($strName." .+ для [0-9]+$", 
                        $strName." .+ ДЛЯ ВСЕХ!$",
                        $strName." ЕСТЬ НОВОСТИ?",
                        $strName." НУЖНО .*",
                        $strName." я .*",
                        $strName." приведствую",
                        $strName." я чуствую .*",
                        $strName." вы .*",
                        $strName." не можете .*",
                        $strName." для чего .*",
                        $strName." давай .*",
                        $strName." дай .*",
                        $strName." из них.*reset?",
                        $strName." что вы думаете о .*",
                        $strName." да");
$arrPatsanslang = array(array('Пожалуйста, %3 здесь%1из %2.'), 
                        array('Внимание %2 поместили все %1!'),
                        array('Выжившие! %1',
                              'Ничего интересного непроизошло.'),
                        array('Зачем вам %1?',
                              'Вы уверены что вам нужно %1?',
                              'Попробуй поискать %1 в другом месте?'),
                        array('Почему вы думаете,что вы %1?',
                              'Не волнуйся, это пройдет.',
                              'Вы уверены??'),
                        array('Приятно Вас сново видеть.',
                              'Привет путешественник. Что вам необходимо?',
                              'А, опять ты.'),
                        array('Почему вы считаете, %1?',
                              'Беспокоит вас?',
                              'Может быть, вы хотите что-то сельнее, потомучто я чуствую, %1?'),
                        array('Почему вы думаете, что я %1?',
                              'Или это просто так, как вы думаете?',
                              'Может вы правы.'),
                        array('Почему ты не можешь %1?',
                              'Скажи вас это беспокоит?',
                              'Вы действительно пытались %1?'),
                        array('Почему вы так думаете?',
                              'Я понятия неимею, почему %1',
                              'Наверное, потому, что это невозможно.'),
                        array('Может будете немного вежливее?',
                              'Я неимею %1, это только пиво.',
                              'У вас есть деньги на %1?'),
                        array('Дам %1 кjulf заплатите',
                              'сейчас продам.',
                              'И что еще?'),
                        array('Сброс игры происходит в такое время 8, 10, 12, 14, 16, 18, 20, 22, длавный сброс в 24.'),
                        array('Я не знаю.',
                              'Почему вы спрашиваете меня о %1?',
                              'Трудно сказать.'),
                        array('Я рад что вы согласны.',
                              'Почему вы так думаете?'),
                        array('Не понимаю',
                              'То что вы хотели?',
                              'Варнаа показывает клиенту дверь!',
                              'Хмм какой это язык?',
                              'Вопросы по тенденции',
                              'Говорить со мной?'));
?>
