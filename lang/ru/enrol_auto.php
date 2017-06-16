<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'enrol_auto', language 'ru'.
 *
 * @package     enrol_auto
 * @author      Eugene Venter <eugene@catalyst.net.nz>
 * @locale       Ingovatov
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['customwelcomemessage'] = 'Альтернативное приветственное сообщение';
$string['customwelcomemessage_help'] = 'Альтернативное приветственное сообщение добавляется в формате текста либо HTML, можно использовать теги HTML и теги для поддержки многоязыковых сообщений.

Следующие фразы могут быть включены в сообщение:

* Имя курсa {$a->coursename}
* Ссылка на профиль прользователя {$a->profileurl}';
$string['defaultrole'] = 'Роль назначаемая по умолчанию';
$string['defaultrole_desc'] = 'Выберите роль, которая будет назначена для пользователей использующих автоматический метод зачисления.';
$string['editenrolment'] = 'Редактировать зачисление';
$string['enrolon'] = 'Разрешить зачисление';
$string['enrolon_help'] = 'Выберите событие для автоматического зачисления на курс.

**Просмотр курса** - Зачислять всех, кто запрашивает просмотр кусра.<br>

**Вход в систему** - Зачислять всех авторизующихся пользователей.<br>

**Просмотр элемента курса/ресурса** - Зачислять всех, кто запросит просмотр соответствующего элемента курса / ресурса.<br>
*Примечание:* этот параметр требует начилия гостевого доступа к курсу. ';
$string['enrolon_desc'] = 'Событие, используемое для автоматического зачисления.';
$string['courseview'] = 'Просмотр курса';
$string['modview'] = 'Просмотр элемента курса/ресурса';
$string['modviewmods'] = 'Элемент курса/ресурс';
$string['modviewmods_desc'] = 'Просмотр любого из выбранных элементов курса/ресурса приведет к автоматической записи на него.';
$string['pluginname'] = 'Автозачисление';
$string['pluginname_desc'] = 'Плагин автоматического зачисления зачисляет на курс пользователей по заданным условиям.';
$string['requirepassword'] = 'Требовать пароль';
$string['requirepassword_desc'] = 'Требовать наличия ключа регистрации на новых курсах и предотвращать удаление ключа регистрации из существующих курсов.';
$string['role'] = 'Роль, назначаемая по умолчанию';
$string['auto:config'] = 'Конфигурировать автозачисление';
$string['auto:manage'] = 'Управлять зачисленными пользователями';
$string['auto:unenrol'] = 'Отчислять пользователей из курса';
$string['auto:unenrolself'] = 'Отчислить себя из курса';
$string['sendcoursewelcomemessage'] = 'Отправить приветственное сообщение';
$string['sendcoursewelcomemessage_help'] = 'Если включено, пользователю будет отправлено приветственное сообщение на адрес электронной почты в процессе автоматического зачисления.';
$string['status'] = 'Разрешить автоматическую регистрацию';
$string['status_desc'] = 'Разрешить автоматическую регистрацию пользователей на курс по умолчанию.';
$string['status_help'] = 'Этот параметр определяет, включен ли этот плагин автоматической регистрации для этого курса.';
$string['unenrol'] = 'Отменить зачисление пользователя';
$string['unenroluser'] = 'Вы действительно хотите отчислить пользователя из курса "{$a->course}"?';
$string['unenrolselfconfirm'] = 'Вы действительно хотите отчислиться из курса? "{$a}"?';
$string['userlogin'] = 'При входе в систему';
$string['welcometocourse'] = 'Добро пожаловать в {$a}';
$string['welcometocoursetext'] = 'Добро пожаловать в {$a->coursename}!

Если Вы еще этого не сделали, Вам необходимо отредактировать страницу своего профиля, чтобы мы могли узнать о Вас больше:

{$a->profileurl}';
