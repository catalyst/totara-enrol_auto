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
 * Auto enrolment plugin tests.
 *
 * @package     enrol_auto
 * @autor       Eugene Venter <eugene@catalyst.net.nz>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot.'/enrol/auto/lib.php');
require_once($CFG->dirroot.'/enrol/auto/locallib.php');

class enrol_auto_testcase extends advanced_testcase { //todo

    public function test_basics() {
        $this->assertTrue(enrol_is_enabled('auto'));
        $plugin = enrol_get_plugin('auto');
        $this->assertInstanceOf('enrol_auto_plugin', $plugin);
        $this->assertEquals(1, get_config('enrol_auto', 'defaultenrol'));
    }

    public function test_sync_nothing() {
        global $SITE;

        $autoplugin = enrol_get_plugin('auto');

        // Just make sure the sync does not throw any errors when nothing to do.
        $autoplugin->sync(NULL, false);
        $autoplugin->sync($SITE->id, false);
    }
}
