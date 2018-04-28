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

/*
 * Example Moodle script version information.
 *
 * @package   local_hello
 * @copyright 2018 Ahmed Sherif
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * Hint: To undestand the structure well read this: https://docs.moodle.org/dev/version.php
 * Hint: (Difference between version and release)
 *     # Version − a software build. New version is a different build.
 *     # Release − (public release) a version intended for use by general population.
 */

// It must be included from a Moodle page
defined('MOODLE_INTERNAL') || die();

// specify the plugin version, usually specified by YYYYMMDD followed by 00
$plugin->version   = 2018040700;

// The version of moodle that's at least required for this plugin to be functional
$plugin->requires  = 2011102700;

// The name of the plugin
$plugin->component = 'local_hello';

// This means that the plugin won't recieve major updates and is ready for the production
$plugin->maturity  = MATURITY_STABLE;

// The realease version of your plugin, in this case this is the first release
$plugin->release   = '1.0';