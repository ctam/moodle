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
 * Upgrade code for install
 *
 * @package   assignsubmission_kalvid
 * @copyright 2025 Kaltura Inc
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Execute kalvid submission plugin upgrade steps.
 *
 * @param int $oldversion
 * @return bool
 */
function xmldb_assignsubmission_kalvid_upgrade($oldversion) {
    global $CFG;

    // Disable plugin during PHPUnit runs to avoid interfering with core tests.
    if (defined('PHPUNIT_TEST') && PHPUNIT_TEST) {
        set_config('disabled', 1, 'assignsubmission_kalvid');
    }

    return true;
}
