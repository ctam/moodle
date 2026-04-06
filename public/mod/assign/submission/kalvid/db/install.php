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
 * Post-install hook for kalvid submission plugin.
 */
function xmldb_assignsubmission_kalvid_install() {
    global $DB;

    // Ensure default config exists for this plugin.
    if (!$DB->record_exists('assign_plugin_config', [
        'plugin' => 'kalvid',
        'subtype' => 'assignsubmission',
        'name' => 'enabled'
    ])) {
        $record = new stdClass();
        $record->assignment = 0;
        $record->plugin = 'kalvid';
        $record->subtype = 'assignsubmission';
        $record->name = 'enabled';
        $record->value = 0;

        $DB->insert_record('assign_plugin_config', $record);
    }
}
