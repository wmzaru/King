<?php
/**
 *   File functions:
 *   Russian language for turnfight player vs monster
 *
 *   @name                 : turnfight.php                            
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 1.3
 *   @since                : 16.10.2006
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
// $Id: turnfight.php 727 2006-10-16 15:48:33Z thindil $

if (isset($title) && $title == 'Arena Walk')
{
    define('NO_ENEMY', 'Nie masz z kim walczyć. <a href="battle.php?action=monster">Odejdź</a>');
    define('ONLY_MAGE', 'Tylko mag może walczyć używając czarów obronnych! (<a href="battle.php?action=monste">Назад</a>)');
    define('B_OPTIONS', 'Opcje</b><br /><a href="battle.php?action=monster">Odejdź');
}

if (!defined('ERROR'))
{
    define('ERROR', 'Ошибка!');
}

define('DEFEATED_BY', 'został pokonany przez ');
define('DEFEAT', 'pokonał');
// define('YOU_DEFEAT', 'Wynik:</b> Pokonałeś');
define('AND_GAIN', 'oraz');
define('COINS', 'sztuk złota');
define('YOU_ATTACK1', 'Atakujesz przy pomocy');
define('BY_SPELL', 'przy pomocy czaru');
define('YOU_FAIL1', 'próbował rzucić czar');
define('YOU_FAIL2', 'ale niestety nie udało mu się opanować mocy. Traci przez to');
define('YOU_FAIL3', 'ale stracił panowanie nad swoją koncentracją. Traci przez to wszystkie punkty magii');
define('YOU_FAIL4', 'stracił całkowicie panowanie nad czarem');
define('YOU_FAIL5', 'Czar wybuchł mu prosto w twarz! Traci przez to');
define('ENEMY_HIT2', 'atakuje ciebie i zadaje');
define('D_ATTACK', 'Defensywny atak (-15% obrażeń, -10% trafienia, +15% obrony, +10% uniku)');
define('N_ATTACK', 'Normalny atak (statystyki bez zmian)');
define('A_ATTACK', 'Agresywny atak (+15% obrażeń, +10% trafienia, -15% obrony, -10% uniku)');
define('ATTACK_MONSTER', 'Atakuj potwora');
define('LIFE', 'życia');
define('SPELL_ATTACK', 'Atak czarem');
define('POWER', 'moc');
define('DRINK_POTION', 'Wypij miksturę');
define('AMOUNT', 'ilość');
define('NEW_QUIVER', 'Załadowanie nowego kołczanu');
define('POWER2', 'siła');
define('CHANGE_WEAPON', 'Zmiana broni');
define('BATTLE_RAGE', 'Szał bojowy (+100% obrażeń, brak obrony)');
define('SPELL_BURST', 'Doładowanie czaru bojowego (doładuj czar o maks');
define('POWER3', 'siły');
define('SPELL_BURST2', 'Doładowanie czaru obronnego (doładuj czar o maks');
define('F_ROUND', 'Runda');
define('ACTION_PTS', 'Punkty Akcji');
define('LIFE_PTS', 'Punkty Życia');
define('Mana_PTS', 'Punkty Magii');
define('EXHAUSTED', 'Zmęczenie');
define('A_ESCAPE', 'Ucieczka (żadnych więcej akcji w rundzie)');
define('A_REST', 'Odpoczynek (żadnych więcej akcji w rundzie');
define('EXHAUST', 'zmęczenia');
define('S_FIGHT', 'Дальше');
define('NOT_DECIDE', 'Walka nie została rozstrzygnięta!');
define('QUIVER', 'Strzał w kołczanie');

if (isset($_POST['action']) && $_POST['action'] == 'escape')
{
    define('ESCAPE_SUCC', 'Udało ci się uciec przed');
    define('YOU_GAIN1', '! Zdobywasz za to');
    define('ESCAPE_FAIL', 'Nie udało ci się uciec przed');
}

if (isset($_POST['action']) && $_POST['action'] == 'rest')
{
    define('REST_SUCC', 'Udało ci się nieco odpocząć');
}
?>
