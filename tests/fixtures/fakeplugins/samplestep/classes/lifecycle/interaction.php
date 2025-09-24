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

use tool_lifecycle\local\entity\process;
use tool_lifecycle\local\entity\step_subplugin;
use tool_lifecycle\step\interactionlibbase;

global $CFG;
require_once($CFG->dirroot . '/admin/tool/lifecycle/step/interactionlib.php');

/**
 * Fake class
 */
class interaction extends interactionlibbase {

    /**
     * Fake function
     */
    public function get_relevant_capability() {
    }

    /**
     * Fake function
     * @param process $process process
     */
    public function get_action_tools($process) {
    }

    /**
     * Fake function
     * @param process $process process
     */
    public function get_status_message($process) {
    }

    /**
     * Fake function
     * @param string $action Identifier of action
     * @param string $user html-link with username as text that refers to the user profile
     */
    public function get_action_string($action, $user) {
    }

    /**
     * Fake function
     * @param process $process instance of the process the action was triggered upon.
     * @param step_subplugin $step instance of the step the process is currently in.
     * @param string $action action string. The function is called with 'default', during interactive processing.
     */
    public function handle_interaction($process, $step, $action = 'default') {
    }
}
