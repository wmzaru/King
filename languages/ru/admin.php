<?php
/**
 *   File functions:
 *   Russian language for admin panel
 *
 *   @name                 : admin.php
 *   @copyright            : (C) 2004,2005,2006,2007 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @author               : eyescream <tduda@users.sourceforge.net>
 *   @version              : 1.4
 *   @since                : 19.04.2007
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

define('ERROR', 'Ошибка!');
define('NOT_ADMIN', 'Не администратор!');
define('REFRESH', 'Обновить');
define('E_DB', 'Не могу добавить запись!');
define('EMPTY_FIELDS', 'Заполните все поля!');
define('A_ADD', 'Добавить');
define('A_SEND', 'Отправить');
define('A_MAKE', 'Назад');
define('A_BACK', 'Назад в меню');
define('A_NEXT', 'Дальше');
define('M_NAME', 'Имя');
define('M_LEVEL', 'Уровень');
define('M_POWER', 'Сила');
define('M_HP', 'ХП');
define('M_AGI', 'Ловкость');
define('M_SPEED', 'Скорость');
define('M_COND', 'Выносливость');
define('M_MIN_GOLD', 'Мин золота');
define('M_MAX_GOLD', 'Макс золота');
define('M_MIN_EXP', 'Min опыта');
define('M_MAX_EXP', 'Max опыта');
define('M_LOCATION', 'Локация');
define('M_CITY1', 'Алтарь');
define('M_CITY2', 'Ardulith');
define('M_CITY3', 'Цитадель');
define('ONLY_MAIN', 'Только фождь имеет доступ к этой функции!');
define('ACCEPT', 'Новости/слухи/анкеты');
define('MODERATOR', 'Опции модератора');
define('GAME', 'Элементы игры');
define('PLAYERS', 'Операции с игроками');
define('BAN', 'Блокировка/Удаление учетных записей');
define('ADMINISTRATION', 'Настройки администрации');


if (!isset($_GET['view']))
{
    define('A_WELCOME', 'Добро пожаловать в панель администрирования Что вы будете делать.?');
    define('A_REPUTATION', 'Дать репутацию');
    define('A_ADDUPDATE', 'Добавить новость');
    define('A_ADDNEWS', 'Добавить слух');
    define('A_DELETE', 'Удалить пользователя');
    define('A_DONATION', 'Донат пользователей');
    define('A_TAKE', 'Дать золото игрокам');
    define('A_RANK', 'Изменить статус игрока');
    define('A_FORUM_P', 'Очистить форум');
    define('A_CHAT_P', 'Очистить гостиницу');
    define('A_EQUIP', 'Добавить экипировку');
    define('A_MONSTERS', 'Добавить монстра');
    define('A_SMITH', 'Добавить план кузнецу');
    define('A_SPELLS', 'Добавить заклинание');
    define('A_PM', 'Отправить сообщение всем игрокам');
    define('A_CHAT_BAN', 'Заблокировать/Разблокировать сообщения от игрока в чате');
    define('A_JAIL', 'Отправить игрока в тюрьму');
    define('A_BRIDGE', 'Добавить вопрос на мосту смерти ');
    define('A_MAIL', 'Отправить почту всем участникам');
    define('A_CLOSE', 'Открыть/Закрыть игру');
    define('A_DEL_PLAYERS', 'Удалить неактивных игроков');
    define('A_BAN', 'Бан/Разбан игрока');
    define('A_BUGTRACK', 'Bugtrack');
    define('A_REGISTER', 'Открыть/Закрыть регистрацию');
    define('A_CENSORSHIP', 'Добавить/удалить ключевые слова в список запрещенных слов');
    define('A_POLL', 'Добавить новую анкету');
    define('A_JAILBREAK', 'Выпустить игрока из тюрьмы');
    define('A_MONSTER2', 'Редактор монстров');
    define('A_DONATOR', 'Добавить игрока в Аллею за заслуги');
    define('A_MILL', 'Добавить план на мельницу');
    define('A_FORUMS', 'Добавить/Изменить категории форума');
    define('A_META', 'Изменить мета-теги');
    define('A_LOGS', 'Логи игроков');
    define('A_CHANGELOG', 'Добавить запись об изменениях в игре');
    define('A_INNARCHIVE', 'Архив гостиницы');
    define('A_PLAYERQUEST', 'Добавить квест игрокам');
    define('A_BAN_MAIL', 'Блокировать/Разблокировать сообщение от игроков в почте');
    define('A_BUG_REPORT', 'Сообщения об ошибке');
    define('A_ADD_NEWS', 'Добавить новые сплетни');
    define('A_CHANGE_NICK', 'Изменить имя игрока и профиль');
}


if(isset($_GET['view']) && $_GET['view'] == 'addreps')
{
    define('NO_PLAYER', 'Такого игрока несуществует!');
    define('T_AMOUNT', 'Кол-во пунктов ');
    define('T_PLAYER_ID', 'ID');
    define('T_DESC', 'Тип заслуги');
    define('T_ADDED', 'Репутация была добавлена');
    define('RECEIVE', 'Получил ');
    define('REPUTATION_POINTS', ' пунктов репутации: ');
}
if (isset($_GET['view']) && $_GET['view'] == 'addtext')
{
    define('MODIFIED', 'Изменить текст');
    define('ADDED', 'Текст добавлен к слухам!');
    define('DELETED', 'Текст удален!');
    define('ADMIN_INFO', 'Здесь вы можете добавлять, изменять и удалять тексты, которые находятся на листе ожидания Помните, что вы не должны изменять содержание работы, и только исправить ошибки в нем.!');
    define('ADMIN_INFO2', 'Изменить - см. содержание работы и, возможно, изменить');
    define('ADMIN_INFO3', 'Добавить - это только добавляет текст сразу, не читая слухи (не будет запрос на подтверждение)');
    define('ADMIN_INFO4', 'Delete - удаляет текст из листа ожидания будут добавлены к слухам (не будет запрос на подтверждение)');
    define('ADMIN_INFO5', 'Вот лист ожидания текст');
    define('A_DELETE', 'Удалить');
    define('A_CHANGE', 'Изменение');
    define('A_MODIFY', 'Изменить');
    define('T_AUTHOR', 'Автор');
    define('T_TITLE', 'Название');
    define('T_BODY', 'Содержание');
    define('YOUR_NEWS', 'Ваш слух <b>');
    define('HAS_ADDED', ' </b>был принят ');
    define('HAS_DELETED', ' </b>был отвергнут ');
    define('L_ID', ', ID ');
}

if (isset($_GET['view']) && $_GET['view'] == 'bugreport')
{
	define('BUG_REPAIR', 'Заняться этой работой');
	define('BUG_LEAVE', 'Отказаться от работы');
	define('BUG_PROGRAMMER', 'Он пытается исправить ошибку:');
	define('BUG_TAKEN', 'Взяли эту ошибку');
	define('BUG_LEFT', 'Вы отказались от исправления этой ошибки');
    define('BUG_TYPE', 'Тип ошибки');
    define('BUG_TEXT', 'Опечатка');
    define('BUG_CODE', 'Ошибка в игре');
    define('BUG_LOC', 'Локация');
    define('BUG_NAME', 'Название уведомления');
    define('BUG_ID', 'Номер');
    define('BUG_REPORTER', 'Отправитель');
    define('BUG_DESC', 'Описание');
    define('BUG_ACTIONS', 'Сделать');
	define('EMPTY_COMMENT', 'Вы не ввели комментарий. Конечно же отметить?');
	$arrOptions = array('Naprawiony', 'Это не ошибка', 'В моей работе', 'Нужно больше информации', 'Дубликат');
    define('YOUR_BUG', 'Ваше сообщение об ошибке: <b>');
    define('B_ID', '</b> ID: <b>');
    define('NOT_BUG3', '</b> не является ошибкой.');
    define('HAS_FIXED', '</b> была исправлена.');
    define('MORE_INFO2', '</b> требуется больше информации, для исправления.');
    define('WORK_FOR_ME2', '</b> была отвергнута. <b>Причина:</b> у меня работает хорошо.');
    define('BUG_DOUBLE2', '</b> была отвергнута. <b>Причина:</b> ошибка уже добавлена на расмотрение.');
    define('NOT_BUG2', 'Отметили эту ошибку неверной.');
    define('HAS_FIXED2', 'Эта ошибка отмечена, как исправлена.');
    define('WORK_FOR_ME3', 'Отметили эту ошибку, ошибка (у меня он работает).');
    define('MORE_INFO3', 'Отмечена как неисправимая ошибка (требуется больше информации).');
    define('BUG_DOUBLE3', 'Отмечена эта ошибка, как дубликат еще одна ошибка.');
    define('T_BUG', 'Ошибка исправлена (');
    define('REPORTED_BY', ' сообщил ID: ');
    define('BUG_COMMENT', 'Комментарий');
}

if (isset ($_GET['view']) && $_GET['view'] == 'banmail')
{
    define('BLOCK_LIST', 'Список заблокированных');
    define('A_BLOCK', 'Блокировать');
    define('A_UNBLOCK', 'Разблокировать');
    define('MAIL_ID', 'ID');
    define('YOU_BLOCK', 'Заблокировать почту, чтобы отправлять сообщение игрокам');
    define('YOU_UNBLOCK', 'Разблокировать почту, чтобы отправлять сообщение игрокам');
}

if (isset($_GET['view']) && $_GET['view'] == 'playerquest')
{
    define('ADD_PLAYER', 'игрок с ID');
    define('TO_QUEST', 'номер квеста');
    define('YOU_ADD', 'Вы здобавили игроку квест.');
}

if (isset($_GET['view']) && $_GET['view'] == 'innarchive')
{
    define('A_NEXT2', 'Несколько записей');
    define('A_PREVIOUS', 'Предыдущие записи');
    define('C_ID', 'ID');
}

if (isset($_GET['view']) && $_GET['view'] == 'changelog')
{
    define('CHANGE_INFO', 'Если ввести изменения в игру, введите здесь информацию о них информировав игроков.');
    define('CHANGE_LOCATION', 'Изменение локации');
    define('CHANGE_TEXT', 'Описание изменения');
    define('CHANGE_ADDED', 'Добавлена информация о изменениях.');
}

if (isset($_GET['view']) && $_GET['view'] == 'logs')
{
    define('LOGS_INFO', 'Здесь вы можете просмотреть журнал определенные действия игроков.');
    define('L_OWNER', 'Владелец (ID)');
    define('L_TEXT', 'Содержание');
    define('L_CLEAR', 'Очистить');
    define('NO_LOGS', 'Не имеют журнала');
    define('A_PREVIOUS', 'Назад');
    define('LOGS_CLEARED', 'Журнал очищен');
}

if (isset($_GET['view']) && $_GET['view'] == 'meta')
{
    define('META_INFO', 'Здесь вы можете изменить так называемые мета-теги - они используются для описания игры в поиске ключевые слова <br /> теги - слова, которые вы вводите в результатах поиска будет отображаться в вашей игре. Если вы ввели значения для этих маркеров, то теперь они заменены на новые <br /> тег описания - описание того, как игра будет выглядеть после просмотра результатов<br /><br />');
    define('META_KEY', 'ключевые слова');
    define('META_DESC', 'описание');
    define('META_UPGRADE', 'Обновление мета-тегов');
}

if (isset($_GET['view']) && $_GET['view'] == 'forums')
{
    define('CAT_LIST', 'Список категорий форума');
    define('T_NAME', 'Название категории');
    define('T_DESC', 'Описание категории');
    define('T_LANG', 'Язык категории');
    define('T_WRITE', 'Они могут писать в категории');
    define('T_VISIT', 'Погут просматривать категории');
    define('T_ALL', 'Все');
    define('T_STAFF', 'Князья');
    define('T_JUDGE', 'Судьи');
    define('T_JUDGE2', 'Канцлер суда');
    define('T_COUNT', 'Спикер совета');
    define('T_COUNT2', 'Пользователи');
    define('T_LAWYER', 'Юристы');
    define('T_JUDGE3', 'Присяжные');
    define('T_PROCURATOR', 'Прокуроры');
    define('CATEGORY_MODIFIED', 'Категория была изменена');
    define('CATEGORY_ADDED', 'Категория была добавлена');
}

if (isset ($_GET['view']) && $_GET['view'] == 'mill')
{
    define('S_NAME', 'Название');
    define('S_COST', 'Цена');
    define('S_AMOUNT', 'Количество минералов');
    define('S_LEVEL', 'Уровень');
    define('S_TYPE', 'Тип');
    define('S_BOW', 'Лук');
    define('S_ARROWS', 'стрелы');
}

if (isset($_GET['view']) && $_GET['view'] == 'donator')
{
    define('DONATOR_INFO', 'Добавить игрока в аллею заслуги');
    define('P_NAME', 'Имя');
    define('YOU_ADD', 'Вы добавили игрока по имени ');
    define('TO_DONATORS', ' в аллею заслуги.');
}

if (isset($_GET['view']) && $_GET['view'] == 'monster2')
{
    define('A_EDIT', 'Изменить');
    define('YOU_EDIT', 'Edycja zakończona pomyślnie. Zmieniłeś statystyki potworowi: ');
}

if (isset($_GET['view']) && $_GET['view'] == 'jailbreak')
{
    define('JAIL_ID', ' игрок с ID: ');
    define('A_FREE', 'Освобожден');
    define('T_MESSAGE', 'ID игрока освобожденного из тюрьмы: ');
    define('NO_PLAYER2', 'Нет такого игрока!');
}

if (isset($_GET['view']) && $_GET['view'] == 'poll')
{
    define('T_QUESTION', 'Вопрос');
    define('T_AMOUNT', 'Количество ответов');
    define('T_ANSWER', 'Ответ');
    define('POLL_ADDED', 'Опрос добавлен');
    define('T_DAYS', 'Продолжительность (дни)');
    define('NEW_POLL_MESSANGE', 'Выполните свой гражданский долг и проголосцйте в новом опросе.<br /> Чтобы проголосовать, перейдите в <a href="polls.php">Зал Встречь.</a>');
}

if (isset($_GET['view']) && $_GET['view'] == 'censorship')
{
    define('YOU_ADD', 'Вы добавили новое слово в список запрещенных слов: ');
    define('YOU_DELETE', 'Удалить слово из списка запрещенных: ');
    define('A_DELETE', 'Удалить');
    define('T_WORD', 'слово');
    define('WORDS_LIST', 'Список нецензурных слов');
}

if (isset($_GET['view']) && $_GET['view'] == 'register')
{
    define('YOU_CLOSE', 'Заблокировать регистрацию новых игроков');
    define('YOU_OPEN', 'Разблокировать регистрацию новых игроков');
    define('G_OPEN', 'Разблокировать');
    define('G_CLOSE', 'Заблокировать');
    define('IF_CLOSE', 'Если регистрация заблокированнна, указать причину.');
}

if (isset($_GET['view']) && $_GET['view'] == 'ban')
{
    define('YOU_BAN', 'Блокирован');
    define('YOU_UNBAN', 'Разблокирован');
    define('BAN_LIST', 'Список заблокированных');
    define('BAN_INFO', 'Вы можете заблокировать игрока, таким образом он не имеете доступ к игре по IP, адрес электронной почты, имя или идентификатор. Вы также можете разблокировать игрока');
    define('BAN_VALUE', 'Введите IP, адрес эл.почты, Ник или ID');
    define('BAN_IP', 'IP');
    define('BAN_EMAIL', 'почта');
    define('BAN_NICK', 'Ник');
    define('BAN_ID', 'ID');
    define('A_BAN_PL', 'Банить');
    define('A_UNBAN', 'Разбанить');
    define('BAN_TYPE', 'Тип');
    define('BAN_VAL', 'Стоимость');
    define('BANNED', 'Заблокирован');
}

if (isset($_GET['view']) && $_GET['view'] == 'delplayers')
{
    define('YOU_DELETE', 'Удалены');
    define('INACTIVE', 'неактивные пользователи');
    define('NEVER_LOGGED', 'никогда невходили в систему');
}

if (isset ($_GET['view']) && $_GET['view'] == 'mail')
{
    define('MAIL_INFO', 'Текст сообщения эл.почты, если вы хотите чтобы с новой строки, используйте тег \\n (backslash n) для этой цели');
    define('M_ERROR', 'Сообщение небыло отправлено. Ошибка:');
    define('M_SEND', 'Сообщение было отправлено.');
}

if (isset ($_GET['view']) && $_GET['view'] == 'bridge')
{
    define('YOU_ADD_Q', 'Вы добавили вопрос к мосту');
    define('WITH_AN', 'ответ');
    define('B_QUESTION', 'Вопрос');
    define('B_ANSWER', 'Ответить');
}

if (isset ($_GET['view']) && $_GET['view'] == 'jail')
{
    define('JAIL_ID', 'ID игрока');
    define('JAIL_REASON', 'Причина');
    define('JAIL_TIME', 'Время (в днях)');
    define('JAIL_COST', 'Стоимость за освобождение');
    define('PLAYER_IN_JAIL', 'Этот игрок уже находится в тюрьме!');
    define('PLAYER_JAIL', 'Игрок с ID');
    define('HAS_BEEN_J', 'был брошен в тюрьму на');
    define('DAYS', 'дней');
    define('HE_MAY', 'Может выйти из тюрьмы под залог');
    define('YOU_SURE', 'Вы уверены что вы хотите поместить в тюрьму?');
    define('A_YES', 'Да');
}

if (isset ($_GET['view']) && $_GET['view'] == 'del')
{
    define('YOU_DELETE2', 'Удалить ID');
    define('YOU_NOT_D', 'Не удален пользователем');
    define('DELETE_ID', 'Удалить ID');
    define('A_DELETE_PL', 'Удалить');
}

if (isset ($_GET['view']) && $_GET['view'] == 'add')
{
    define('YOU_ADD_R','Вы добавили ID');
    define('NEW_RANK', 'ранг');
    define('ADD_ID', 'Добавить ID');
    define('R_MEMBER', 'Житель');
    define('R_KING', 'Король');
    define('R_STAFF', 'Принц');
    define('R_JUDGE', 'Судья');
    define('R_JUDGE2', 'Присяжный');
    define('R_LAWYER', 'Юрист');
    define('R_BEGGAR', 'Нищий');
    define('R_BARBARIAN', 'Наемник');
    define('R_SCRIBE', 'Библиотекарь');
    define('R_KNIGHT', 'Рыцарь');
    define('R_LADY', 'Леди');
    define('R_COUNT', 'Спикер совета');
    define('R_COUNT2', 'Посланник');
    define('R_JUDGE3', 'Канцлер суда');
    define('R_REDACTOR', 'Редактор');
    define('R_INNKEEPER', 'Продавец');
    define('R_PROCURATOR', 'Адвокат');
    define('RANK_TECH', 'Техник');
}

if (isset ($_GET['view']) && $_GET['view'] == 'clearf')
{
    define('FORUM_PRUNE', 'Очистить форум.');
    define('F_QUESTION', 'Вы уверены?');
}

if (isset ($_GET['view']) && $_GET['view'] == 'clearc')
{
    define('CHAT_PRUNE', 'Очистить чат.');
}

if (isset ($_GET['view']) && $_GET['view'] == 'equipment')
{
    define('ITEM_NAME', 'Название');
    define('I_WEAPON', 'оружие');
    define('I_ARMOR', 'броня');
    define('I_LEGS', 'поножи');
    define('I_HELMET', 'шлем');
    define('I_BOW', 'лук');
    define('I_SHIELD', 'щит');
    define('I_ARROWS', 'стрелы');
    define('I_STAFF', 'посох');
    define('I_CAPE', 'халат');
    define('I_WITH', 'с');
    define('I_POWER', 'Сила');
    define('I_COST', 'и стоимость');
    define('I_REPAIR', 'Стоимость ремонта');
    define('I_MIN_LEV', 'с минимальным уровнем');
    define('I_AGI', 'с ограничением zr (доспехи, поножи и щит)');
    define('I_SPEED', 'добавив к скорости (только оружие)');
    define('I_DUR', 'выносливость(не халаты и посохи)');
    define('YOU_ADD_ITEM', 'Вы ввели');
    define('HAS_A', 'как');
    define('POWER', 'с силой');
    define('COST', 'стоимостью');
    define('MIN_LEVEL', 'только для тех, кто достиг');
    define('ITEM_LEVEL', 'ограничение уровня мастерства(поножи и броня)');
    define('ITEM_SPEED', 'добавив к скорости (только оружие)');
    define('ITEM_DUR', 'и выносливость (не посохи и халаты)');
}

if (isset ($_GET['view']) && $_GET['view'] == 'donate')
{
    define('YOU_SEND_M', 'Вы дали ресурсы!');
    define('DONATE_ID', 'ID');
    define('AMOUNT', 'Количество');
    define('A_DONATE', 'Выдать');

	//TODO:сделать это публичный порядок, чтобы не дублировать постоянной
	define ('CREDITS', 'золото');
	define ('PINE', 'сосна');
	define ('HAZEL', 'орешник');
	define ('COPPER', 'слитки меди');
	define ('COPPERORE', 'медная руда');
	define ('PLATINUM', MITHRIL);
	define ('COAL', 'уголь');
	define ('IRON', 'железо');
	define ('IRONORE', 'железная руда');
	define ('ZINCORE', 'циковая руда');
	define ('TINORE', 'руда олова');
	define ('STEEL', 'сталь');
	define ('BRONZE', 'бронза');
	define ('YEW', 'cis');
	define ('ELM', 'вяз');
	define ('BRASS', 'слитки латуни');
	define ('CRYSTAL', 'кристалл');
	define ('ADAMANTIUM', 'адамантит');
	define ('METEOR', 'метеор');
}

if (isset ($_GET['view']) && $_GET['view'] == 'takeaway')
{
    define('GOLD_TAKEN', 'золото переведено ID');
    define('TAKE_ID', 'ID');
    define('TAKE_AMOUNT', 'Количество');
    define('A_TAKE_G', 'Забрать');
    define('YOU_GET', 'Вы были наказаны за: ');
    define('T_AMOUNT', ' количесте ');
    define('GOLD_COINS', ' золота. Karę wymierzył: ');
    define('T_REASON', 'Причина:');
    define('T_INJURED', 'Потерпевший (ID):');
    define('TAKE_INFO', 'Денжный штраф:');
    define('T_PLAYER1', 'Игрок ');
    define('T_PLAYER2', ', ID ');
    define('HAS_TAKEN', ' был наказан за: ');
    define('SANCTION_SET', ' Наказание: ');
}

if (isset ($_GET['view']) && $_GET['view'] == 'kowal')
{
    define('S_NAME', 'Название');
    define('S_COST', 'Цена');
    define('S_AMOUNT', 'Количество минералов');
    define('S_LEVEL', 'Уровень');
    define('S_TYPE', 'Тип');
    define('S_WEAPON', 'оружие');
    define('S_ARMOR', 'броня');
    define('S_HELMET', 'шлем');
    define('S_SHIELD', 'щит');
    define('S_LEGS', 'поножи');
    define('S_TWOHAND', 'Две руки');
}

if (isset ($_GET['view']) && $_GET['view'] == 'poczta')
{
    define('YOU_SEND_PM', 'Послал сообщение');
    define('PLAYERS_A', 'игрок.');
    define('PM_SUBJECT', 'Тема');
    define('PM_BODY', 'Содержание');
}

if (isset ($_GET['view']) && $_GET['view'] == 'czat')
{
    define('BLOCK_LIST', 'Список заблокированных');
    define('A_BLOCK', 'Блок');
    define('A_UNBLOCK', 'Разблок');
    define('CHAT_ID', 'ID');
    define('YOU_BLOCK', 'Заблокированна отправка сообщений в чате для игрока');
    define('YOU_UNBLOCK', 'Разблокировать отправку сообшений в чате');
    define('T_DAYS', ' дни и причина: ');
    define('YOU_BLOCK2', 'Вы уже ввели запрет на вход в гостиницу ');
    define('BLOCK_BY', '. Заблокировал: ');
    define('ON_A', 'на');
}

if (isset ($_GET['view']) && $_GET['view'] == 'czary')
{
    define('YOU_ADD_SPELL', 'Вы добавили заклинание');
    define('HAS_A_S', 'заклинание');
    define('POWER_S', 'с силой');
    define('COST_S', 'стоимость');
    define('MIN_LEV_S', 'для игроков, которые достигли');
    define('SPELL_NAME', 'Название');
    define('S_BATTLE', 'Нападение');
    define('S_DEFENSE', 'Защита');
    define('S_WITH', 'с');
    define('S_POWER', 'Сила');
    define('S_COST', 'и стоимость');
    define('S_MIN_LEV', 'минимальный уровень');
}

if (isset ($_GET['view']) && $_GET['view'] == 'close')
{
    define('YOU_CLOSE', 'Закрыли игру');
    define('YOU_OPEN', 'Открыли игру');
    define('G_OPEN', 'Открыть');
    define('G_CLOSE', 'Закрыть');
    define('IF_CLOSE', 'Если закрываете игру, указать причину');
}

if (isset($_GET['view']) && $_GET['view'] == 'changenick')
{
    define('Информация', 'Вы можете изменить имя игрока или его профиль. Игроки будут проинформированы, вы должны дать причине (неправильное название, оскорбительного содержания, рекламировать другие игры). Изменить профиль подлежит стандартные ограничения (не используйте одинарные кавычки, <HTML> текст исчезает, и т.д.)');
    define('CHANGE_NAME1', 'Изменить имя игрока с ID');
    define('CHANGE_NAME2', 'на');
    define('SAVE', 'Сохранить');
    define('INVALID_ID', 'Игрок с таким ID существует!');
    define('EMPTY_NAME', 'Вы должны указать имя!');
    define('DEFAULT_NAME', 'Изменение имени персонажа');
    define('YOU_CHANGE', 'Вы изменили имя игрока с ID');
    define('YOUR_NICK_WAS_CHANGED_BY', 'Имя вашего персонажа был изменен');
    define('EDIT_PROFILE', 'Изменить профиль игрока с ID');
    define('EDIT', 'Изменить');
    define('CURRENTINFO', 'Текущий профиль игрока ');
    define('CHANGE_REASON', 'Причина вмешательства');
    define('DEFAULT1','Несоблюдение применимых правил именования символов обратитесь к Кодексу '.$gamename.' и закона о названии символы.');
    define('DEFAULT2','Включение в профиле недобросовестной рекламы без разрешения лордов..');
    define('DEFAULT3','Включение в профиль вульгарные слова и осколбление других');
    define('YOU_CHANGED_PROFILE', 'Вы изменили профиль игрока');
    define('YOUR_PROFILE_WAS_CHANGED_BY', 'Профиль персонажа был изменен');

    define('SET_ID', 'Установить игрока с ID');
    define('YOU_ADD_R','Установить ID');
    define('NEW_RANK', 'ранг');
    define('DESC_MEMBER', 'Житель');   // Описание ранго
    define('DESC_BEGGAR', 'Нищий');
    define('DESC_VILLAIN', 'Наемник');
    define('R_MEMBER', 'Игрок');           // Ряды записываются в базу данных
    define('R_BEGGAR', 'Нищий');
    define('R_VILLAIN', 'Наемник');
    define('WRONG_RANK', 'Вы не имеете правило присваивать это звание!');
    define('WRONG_PLAYER', 'Вы не можете изменить ранг этого игрока!');
}
?>
