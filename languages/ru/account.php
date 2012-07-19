<?php
/**
 *   File functions:
 *   Russi language for account.php
 *
 *   @name                 : account.php
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @author               : Erechail <kuba.stasiak at gmail.com>
 *   @version              : 1.3a
 *   @since                : 17.07.2006
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
// $Id: account.php 879 2007-01-23 17:19:03Z thindil $

define('ERROR', 'Забудьте об этом!');
define('EMPTY_FIELDS', 'Заполните все поля!');
define('WELCOME', 'Добро пожаловать в настройки своего аккаунта. Что Вы хотите сделать:');
define('A_NAME', 'Изменить имя');
define('A_PASS', 'Изменить пароль');
define('A_PROFILE', 'Редактировать профиль');
define('A_EMAIL', 'Изменить контактную информацю');
define('A_AVATAR', 'Изменить аватар');
define('A_RESET', 'Сбросить настройки');
define('A_IMMU', 'Иммунитет');
define('A_STYLE', 'Настройка внешнего вида игры');
define('A_LANG', 'Выберите язык игры');
define('CHANGE', 'Изменить');
define('DELETE', 'Удалить');
define('A_FREEZE', 'Заморозить счет');
define('A_OPTIONS', 'Дополнительные опции');
define('A_CHANGES', 'Последние изменения');
define('A_BUGREPORT', 'Сообщить об ошибке');
define('A_BUGTRACK', 'Список ошибок');
define('A_LINKS', 'Пользовательские ссылки');
define('DESCRIPTION', 'Описание');
define('SIGNATURES', 'Подпись');

if (isset($_GET['view']) && $_GET['view'] == 'links')
{
    define('LINKS_INFO', 'Здесь вы можете добавлять или редактировать дополнительные ссылки, которые появляются в меню навигации. Вы можете добавлять ссылки или только имя файла (пример. "city.php") или полный адрес (пример. "'.$gameadress.'/city.php").');
    define('FILENAME', 'Адрес');
    define('T_NAME', 'Название');
    define('T_ACTIONS', 'Акции');
    define('A_DELETE', 'Удалить');
    define('A_EDIT', 'Изменить');
    define('A_ADD', 'Добавить');
    define('NOT_YOUR', 'Это не ваша ссылка!');
    define('YOU_CHANGE', 'Вы изменили ссылку в меню навигации.');
    define('YOU_ADD', 'Вы добавили ссылку в меню навигации.');
    define('LINK_DELETED', 'Вы удалили ссылку из меню навигации.');
}

if (isset($_GET['view']) && ($_GET['view'] == 'bugtrack' || $_GET['view'] == 'bugreport'))
{
    define('BUG_TYPE', 'Тип ошибки');
    define('BUG_TEXT', 'Опечатка');
    define('BUG_CODE', 'Ошибка в игре');
    define('BUG_LOC', 'Локация');
    define('BUG_NAME', 'Название сообщения');
}

if (isset($_GET['view']) && $_GET['view'] == 'bugtrack')
{
    define('BUGTRACK_INFO', 'Ниже представлен список заявленных, но не исправленных ошибок.');
    define('BUG_ID', 'Номер');
}

if (isset($_GET['view']) && $_GET['view'] == 'bugreport')
{
    define('BUG_DESC', 'Описание ошибки (минимум 100 символов)');
    define('A_REPORT', 'Сообщить');
    define('TOO_SHORT', 'Сообщение слишком короткое!');
    define('B_REPORTED', 'Сообщение отправлено.');
    define('BUG_INFO', 'Здесь вы можете сообщить об ошибке в игре. Попробуйте описать, что же случилось, что вы делали до этого произошла ошибка на экране, и если есть информация по этому вопросу, введите его. Попробуйте дать название приложения. приложения типа \'Ошибка\' или с небольшим значимые названия не будут приниматься во внимание: если вы не знаете, что писать, пользоваться этим руководством <a href="http://www.chiark.greenend.org.uk/~sgtatham/bugs-pl.html">Как эффективно сообщать ошибки</a>');
}

if (isset($_GET['view']) && $_GET['view'] == 'changes')
{
    define('CHANGES_INFO', 'Ниже представлена информация о 30 последних изменений в '.$gamename.'.');
    define('CHANGE_LOC', 'Локация');
}

if (isset ($_GET['view']) && $_GET['view'] == 'options')
{
    define('T_OPTIONS', 'Здесь вы можете задать дополнительные параметры для вашей учетной записи.');
    define('T_BATTLELOGA', 'Отправить боевые действия на почту, если нападение');
    define('T_BATTLELOGD', 'Отправить боевые действий на почту, если на вас нападают');
    define('T_GRAPHBAR', 'Показывать графическую полоску жизни/здоровья/опыта');
    define('T_OVERLIB', 'Показывать список игроков');
    define('T_LOGINFO', 'Высплывающее уведомление о записи в журнале (pop-up)');
    define('T_MAILINFO', 'Высплывающее уведомление о почте (pop-up)');
    define('A_NEXT', 'Далее');
    define('A_SAVED', 'Дополнительные параметры были сохранены.');
}

if (isset ($_GET['view']) && $_GET['view'] == 'freeze')
{
    define('FREEZE_INFO', 'Здесь вы можете заморозить ваш счет в течение определенного периода времени. В течение этого времени вы не можете пойти на это, но вы не можете быть ограблены или нападению. К сожалению, существует также возможность замораживания ваших охранников.Замороженный счет энергии не стало сбросить. Максимальное время блокировки - 21 дней. Блокировка начинается сегодня.');
    define('HOW_MANY', 'Введите количество дней вы хотите отключить учетную запись');
    define('A_FREEZE2', 'Заблокировать');
    define('TOO_MUCH', 'Вы ввели слишком длинную блокировку.');
    define('YOU_BLOCK', 'Вы заблокировали ваш аккаунт на ');
    define('NOW_EXIT', ' дней. Вы вышли из игры, потому что ваш аккаунт уже заблокирован.');
}

if (isset ($_GET['view']) && $_GET['view'] == 'lang')
{
    define('YOU_SELECT', 'Вы выбрали в качестве основного языка ');
    define('AND_SECOND', ' и в качестве дополнительного языка ');
    define('LANG_INFO', 'Здесь вы можете выбрать язык, на котором появляются '.$gamename.'. Основной язык, что делает всю игру будет на этом языке. Родной дополнительные влияет только на разговор в гостинице, и на форуме. Если вы не хотите, чтобы установить язык Кроме того, просто выберите ту же опцию, как и для основного языка.');
    define('F_LANG', 'Основной язык:');
    define('S_LANG', 'Дополнительный язык:');
    define('A_SELECT', 'Выбрать');
    define('A_REFRESH', 'Обновить');
}

if (isset($_GET['view']) && $_GET['view'] == 'immu')
{
	define('IMMU_INFO1', '<b>Иммунитет</b> представляет собой особую защиту, которая охраняет ремеслинников которые производят свои товары в игре. Ремесленники, которые согласились на такую помощь, не могут быть атакованы другими людьми, и могут сражаться только с монстрами. Rezygnacja z ochrony Namiestników niesie ze sobą obniżenie statystyk postaci o 25%. <b>Как только вы выберете путь борьбы и кражи, у вас снимается иммунитет</b>.');
	define('IMMU_INFO2', 'Если вы не хотите вмешиваться в вашу работу вы людей, которые хотят бросить вам вызов на дуэль, губернаторы предлагает Вам защиту. под свою опеку и ни один из жителей вторгнутся вас, но он будет только иметь возможность сражаться с монстрами. Прежде чем вы решите для защиты правителей помнить, что это будет отказ от значительного ослабления вашего персонажа');
	define('QUESTION1', 'Вы хотите получить иммунитет?');
	define('DISCARD_INFO', 'У вас уже есть иммунитет Теперь Вы можете снять его, но это связано с потерей статистики (-25% от текущего значения).');
	define('QUESTION2', 'Вы хотите снять иммунитет?');
	define('YOU_HAVE', 'У вас уже есть иммунитет!');
	define('NO_CLASS', 'Вы должны выбрать класс символов!<ul><li><a href=account.php>Назад</a></li><li><a href=klasa.php>Выберите класс</a></li></ul>');
	define('ONLY_FOR_ARTISAN', 'Ты мастер!');
	define('IMMU_SELECT', 'С сегодняшнего дня, у вас есть иммунитет.');
	define('CLICK1', 'Нажми');
	define('HERE', 'здесь');
	define('CLICK2', ', вернуться к опциям вашего аккаунта.');
	define('NO_IMMU', 'У вас нету иммунитета!');
	define('DISCARDED', 'Иммунитет был снят');
	define('NO_CONFIRMATION', 'Не подтверждено!');
}

if (isset ($_GET['view']) && $_GET['view'] == 'reset')
{
    define('RESET_INFO', 'Здесь вы можете изменить свой характер. На Ваш электронный адрес будет отправлена специальная ссылка активации. И только когда вы надмете на нее, ваш персонаж вернется в исходное положение. Останется только <b>id</b>, <b>имя</b>, <b>пароль</b>, <b>mail</b>, <b>профиль</b>, <b>репутация</b> и <b>возраст</b>. Вы хотите сбросить форму');
    if (isset ($_GET['step']) && $_GET['step'] == 'make')
    {
        define('MESSAGE1', 'Вы получили это письмо, потому что вы хотите сбросить форму. Если вы все еще хотите, чтобы изменить свой характер в');
        define('ID', 'ID');
        define('MESSAGE2', 'перейдите по этой ссылке');
        define('MESSAGE3', 'Если вы не хотите, чтобы восстановить форму (или кто-то другой поднял на вас так хотят) перейдите по этой ссылке');
        define('MESSAGE4', 'Поздравляем');
        define('MSG_TITLE', 'Сброс аккаунта игрока в ');
        define('E_MAIL', 'Сообщение небыло отправлено. Ошибка.');
        define('E_DB', 'Невозможно выполнить запрос!');
        define('RESET_SELECT', 'На вашу электронную почту было отправлено сообщение для подтверждения сброса формы');
    }
}

if (isset($_GET['view']) && $_GET['view'] == 'avatar')
{
    define('REFRESH', 'Обновить');
    define('AVATAR_INFO', 'Здесь вы можете изменить свой аватар <b>Внимание!</b> Если у вас уже есть аватар, старая будет удалена Максимальный размер аватар <b>10 kB</b>. Avatar Вы можете загрузить только, с собственного компьютера. Он должен иметь расширение *.<b>jpg</b>, *.<b>jpeg</b>, *.<b>gif</b> или *.<b>png</b>.');
    define('A_DELETE', 'Удалить');
    define('FILE_NAME', 'Отправить изображение');
    define('A_SELECT', 'Отправить');
    if (isset($_GET['step']) && $_GET['step'] == 'usun')
    {
        define('E_DB', 'Невозможно удалить!');
        define('DELETED', 'Аватар удален');
        define('NO_FILE', 'Нет такого файла!');
    }
    if (isset($_GET['step']) && $_GET['step'] == 'dodaj')
    {
        define('NO_NAME', 'Вы не ввели имя файла!');
        define('BAD_TYPE', 'Неверный тип файла!');
        define('NOT_COPY', 'Файл не скопирован');
        define('LOADED', 'Аватар загружен');
    }
}

if (isset($_GET['view']) && $_GET['view'] == 'name')
{
    define('MY_NAME', 'мое имя на');
    if (isset($_GET['step']) && $_GET['step'] == 'name')
    {
        define('EMPTY_NAME', 'Вы ввели пустое имя.');
        define('NAME_BLOCK', 'Это имя уже занято.');
        define ('INVALID_NICK', 'Неверное имя. Допускаются только латинские буквы, польский диакритических знаков, пространство и апостроф. Кроме того, название должно начинаться с заглавной буквы, и все, может быть найден только в начале каждого члена именем. (<a href="account.php?view=name">Назад</a>)');
        define('YOU_CHANGE', 'Вы изменили имя на');
        define('LONG_NICK', 'Ваше имя слишком длинное, разрешена длина имени до 15 символов.');
    }
}

if (isset($_GET['view']) && $_GET['view'] == 'pass')
{
    define('PASS_INFO', 'Не используйте HTML, или одинарные кавычки. Не пытайтесь использовать его, он будет удален');
    define('OLD_PASS', 'Текущий пароль');
    define('NEW_PASS', 'Новый пароль');
	define('PASSWORD_MISMATCH', 'Неверный старый пароль!');
    if (isset($_GET['step']) && $_GET['step'] == 'cp')
    {
        define('YOU_CHANGE', 'Вы изменили пароль');
        define('ON', 'на');
    }
}

if (isset($_GET['view']) && $_GET['view'] == 'profile')
{
    define('PROFILE_INFO', 'Добавить/изменить свой профиль. Не используйте HTML или одинарные кавычки!');
    define('NEW_PROFILE', 'Новый профиль');
    define('NEW_PROFILE2', 'Твой новый профиль');
}

if (isset($_GET['view']) && $_GET['view'] == 'eci')
{
    define('OLD_EMAIL', 'Старый e-mail адрес');
    define('NEW_EMAIL', 'Новый e-mail адрес');
    define('NEW_GG', 'Идентификатор');
    define('COMM1', 'GG');
    define('COMM2', 'Tlen');
    define('COMM3', 'Jabber');
	define('COMM4', 'Skype');
    define('COMLINK1', 'gg:');
    define('COMLINK2', 'http://ludzie.tlen.pl/');
    define('COMLINK3', 'xmpp:');
	define('COMLINK4', 'skype:');
    define('T_COMMUNICATOR', 'Коммуникатор');
    define('T_DELETE', 'Удалить');
    if (isset($_GET['step']) && $_GET['step'] == 'gg')
    {
        define('GG_BLOCK', 'Кто-то уже имеет такой ндентификатор.');
        define('E_DB', 'Не могу сохранить в базу данных!');
        define('YOU_CHANGE', 'Изменить идентификатор коммуникатора');
        define('YOU_DELETE', 'Вы удалили информацию о коммуникаторе.');
    }
    if (isset($_GET['step']) && $_GET['step'] == 'ce')
    {
        define('BAD_EMAIL', 'Неправильный адрес электронной почты.');
        define('EMAIL_BLOCK', 'Кто-то уже имеет адрес электронной почты.');
        define('YOU_CHANGE', 'Изменение адреса электронной почты, чтобы завершить процедуру, чтобы получить новый адрес, отправить вам письмо, а затем нажмите на ссылку в письме, только тогда будет изменить адрес электронной почты.');
        define('MESSAGE_PART1', 'Вы получили это письмо, потому что вы хотите изменить пароль в');
        define('MESSAGE_PART2', 'AЧтобы активировать ваш новый адрес электронной почты, нажмите на ссылку ниже:');
        define('MESSAGE_PART3', 'Удачи в');
        define('MESSAGE_SUBJECT', 'Изменение адреса электронной почты на ');
        define('MESSAGE_NOT_SEND', 'Сообщение небыло отправлено. Ошибка:<br />');
    }
}

if (isset($_GET['view']) && $_GET['view'] == 'style')
{
    define('S_SELECT', 'Выбрать');
    define('TEXT_STYLE', 'текстовый вид игры');
    define('GRAPH_TEXT', 'графический вид игры');
    define('YOU_CHANGE', 'Вы изменили вид игры');
    define('ERROR2', 'Ошибка!');
    define('REFRESH', 'Обновить');
    define('GRAPHLESS', 'Стиль игры без картинок(рекомендуется для слабого соединения)');
}
if (isset($_GET['view']) && $_GET['view'] == "description")
{
	define('PODPIS_TEXT', 'Здесь вы можете изменить описание вашего характера. Это будет видно в двух местах: на воздушном шаре при наведении на персонажа или резидентов зарегистрированы в списке под названием (манипулирования ссылку "Показать/Скрыть описания"). Описание может содержать до 25 символов, а остальные будут обрезаны');
	define('NEW_OPIS', 'Добавить свое новое описание');
	if (isset($_GET['step']) && $_GET['step'] == "change")
	{
		define('NEW_OPIS2', 'Вы изменили предыдущее описание на');
	}
}

if (isset($_GET['view']) && $_GET['view'] == 'signatures')
{
    define('HEAD_TEXT', '<p>Здесь вы можете выбрать персональный стиль подписи, которые вы можете вставить в ваш любимый форум или на сайте. Это очень интересный способ сообщить другим о своих приключениях в игре.</p><p>Это доступные подписи, а также готовый код для вставки:</p>');
}
?>
