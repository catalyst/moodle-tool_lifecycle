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

namespace tool_lifecycle;

use tool_lifecycle\local\manager\lib_manager;
use tool_lifecycle\local\manager\trigger_manager;

class subplugin_test extends \advanced_testcase {

    public function test_builtin_triggers() {
        $this->resetAfterTest();
        $builtintriggers = \core_component::get_plugin_list('lifecycletrigger');
        $triggers = trigger_manager::get_trigger_types();

        // All builtin triggers are also in the list of triggers.
        $this->assertEmpty(array_diff_key($builtintriggers, $triggers));

        // Trigger classes are loadable.
        foreach ($builtintriggers as $triggername => $triggerpath) {
            $this->assertNotEmpty(lib_manager::get_trigger_lib($triggername));
        }
    }

    public function test_builtin_steps() {
        $this->resetAfterTest();
        $builtinsteps = \core_component::get_plugin_list('lifecyclestep');
        $steps = step_manager::get_step_types();

        // All builtin steps are also in the list of steps.
        $this->assertEmpty(array_diff_key($builtinsteps, $steps));

        // Step classes are loadable.
        foreach ($builtinsteps as $stepname => $steppath) {
            $this->assertNotEmpty(lib_manager::get_step_lib($stepname));
        }
    }

    public function test_additional_triggers() {
        $this->assertFalse(true);
    }

    public function test_additional_steps() {
        $this->assertFalse(true);
    }

}

