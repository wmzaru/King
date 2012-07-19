<?php
/**
 *   File functions:
 *   Function to select ranks
 *
 *   @name                 : ranks.php                            
 *   @copyright            : (C) 2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 1.1
 *   @since                : 23.06.2006
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

/**
 * Get localization
 */
require_once("languages/".$player -> lang."/ranks.php");

/**
 * Function to select rank
 */
function selectrank($strRank, $strGender)
{
    $arrRank = array('Member', 'Admin', 'Staff', 'Sędzia', 'Ławnik', 'Prawnik', 'Żebrak', 'Barbarzyńca', 'Bibliotekarz', 'Rycerz', 'Dama', 'Marszałek Rady', 'Poseł', 'Kanclerz Sądu', 'Królewski Błazen', 'Redaktor', 'Karczmarka','Bohater', 'Prokurator', 'Techniczny');
    if ($strGender != 'F')
    {
        $arrRank2 = array(R_MEMBER, R_KING, R_STAFF, R_JUDGE, R_JUDGE2, R_LAWYER, R_BEGGAR, R_BARBARIAN, R_SCRIBE, R_KNIGHT, R_LADY, R_COUNT, R_COUNT2, R_JUDGE3, R_JOKER, R_REDACTOR, R_INNKEEPER, R_HERO, R_PROCURATOR, R_TECH);
    }
        else
    {
        $arrRank2 = array(R_MEMBER2, R_KING2, R_STAFF2, R_JUDGE21, R_JUDGE2, R_LAWYER2, R_BEGGAR2, R_BARBARIAN2, R_SCRIBE2, R_KNIGHT, R_LADY, R_COUNT, R_COUNT21, R_JUDGE3, R_JOKER, R_REDACTOR2, R_INNKEEPER2, R_HERO2, R_PROCURATOR, R_TECH2);
    }
    $intKey = array_search($strRank, $arrRank);
    return $arrRank2[$intKey];
}
?>
