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
 * Auto enrolment plugin event handler definition.
 *
 * @package     enrol_auto
 * @category    event
 * @author      Eugene Venter <eugene@catalyst.net.nz>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$observers = array();

// Get all modules that are using the course_module_viewed event and add observers
$supportedmods = \enrol_auto\helper::get_mods_with_viewed_event();
foreach ($supportedmods as $modname) {
    $observers[] = array(
        'eventname'   => '\mod_'.$modname.'\event\course_module_viewed',
        'callback'    => '\enrol_auto\observer::course_module_viewed'
    );
}

$observers[] = array(
    'eventname'   => '\core\event\user_loggedin',
    'callback'    => '\enrol_auto\observer::user_loggedin'
);
