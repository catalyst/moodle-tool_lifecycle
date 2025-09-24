<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Fake component for testing
 * @package    tool_lifecycle
 * @copyright  2025 Catalyst IT Australia Pty Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace tool_samplestep\lifecycle;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/admin/tool/lifecycle/step/lib.php');

use tool_lifecycle\step\libbase;

/**
 * Fake class
 */
class step extends libbase {
    /**
     * Fake function
     */
    public function get_subpluginname() {
        return 'sample step';
    }

    /**
     * Fake function
     */
    public function get_plugin_description() {
        return "Sample step plugin";
    }

    /**
     * Fake function
     * @param int $processid of the respective process.
     * @param int $instanceid of the step instance.
     * @param mixed $course to be processed.
     */
    public function process_course($processid, $instanceid, $course) {
        return null;
    }

}
