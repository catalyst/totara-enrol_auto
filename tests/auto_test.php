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

class enrol_auto_testcase extends advanced_testcase {

    public function test_basics() {
        // disabled by default
        $this->assertFalse(enrol_is_enabled('auto'));

        // correct enrol instance
        $plugin = enrol_get_plugin('auto');
        $this->assertInstanceOf('enrol_auto_plugin', $plugin);

        // default config checks
        $this->assertEquals('1', get_config('enrol_auto', 'defaultenrol'));
        $this->assertEquals('1', get_config('enrol_auto', 'status'));
        $this->assertEquals(ENROL_AUTO_COURSE_VIEWED, get_config('enrol_auto', 'enrolon'));
        $this->assertEquals('1', get_config('enrol_auto', 'sendcoursewelcomemessage'));
        $this->assertEquals('', get_config('enrol_auto', 'modviewmods'));
    }
}
