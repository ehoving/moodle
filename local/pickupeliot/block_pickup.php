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
 * TODO describe file block_pickup
 *
 * @package    local_pickupeliot
 * @copyright  2024 YOUR NAME <your@email.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use block_recentlyaccesseditems\helper;
use core_completion\progress;
use core_course\external\course_summary_exporter;

/**
 * @package block_pickup
 * @copyright 2024
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_pickup extends block_base {

    /**
     * @return string
     */
    public function init() {
        $this->title = get_string('pickup', 'block_pickup');
        return $this->title;
    }

    public function get_content(): stdClass {
        global $CFG, $USER, $DB, $OUTPUT;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();
    }
}