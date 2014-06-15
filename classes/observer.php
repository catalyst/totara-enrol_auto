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
 * Event observers used in this plugin
 *
 * @package    enrol_auto
 * @copyright  Eugene Venter <eugene@catalyst.net.nz>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace enrol_auto;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/enrol/locallib.php');

/**
 * Event observer for enrol_auto.
 */
class observer {

    /**
     * Triggered via course_module_viewed event of a module.
     *
     * @param stdClass $event
     */
    public static function course_module_viewed($event) {
        global $DB;

        $eventdata = $event->get_data();

        if (!enrol_is_enabled('auto')) {
            return;
        }

        if (is_siteadmin()) {
            // Don't enrol site admins
            return;
        }

        $autoplugin = enrol_get_plugin('auto');

        if (!$instance = $autoplugin->get_instance_for_course($eventdata['courseid'])) {
            return;
        }

        if ($instance->customint3 != ENROL_AUTO_MOD_VIEWED || empty($instance->customtext2)) {
            // nothing to see here :D
            return;
        }

        $enabledmods = explode(',', $instance->customtext2);
        $modname = str_replace('mod_', '', $eventdata['component']);
        if (!in_array($modname, $enabledmods)) {
            return;
        }

        if (!$DB->record_exists('user_enrolments', array('enrolid' => $instance->id, 'userid' => $eventdata['userid']))) {
            $autoplugin->enrol_user($instance, $eventdata['userid'], $instance->roleid);
        }
    }
}
