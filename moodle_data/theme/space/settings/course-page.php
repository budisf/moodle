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
 *
 * @package   theme_space
 * @copyright 2022 Marcin Czaja (https://rosea.io)
 * @license   Commercial https://themeforest.net/licenses
 *
 */


defined('MOODLE_INTERNAL') || die();


$page = new admin_settingpage('theme_space_settingscourses', get_string( 'settingscourses', 'theme_space'));

   $name = 'theme_space/ipcoursesummary';
   $title = get_string('ipcoursesummary', 'theme_space');
   $description = get_string('ipcoursesummary_desc', 'theme_space');
   $default = 1;
   $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
   $page->add($setting);
   
   $name = 'theme_space/ipcourseimage';
   $title = get_string('ipcourseimage', 'theme_space');
   $description = get_string('ipcourseimage_desc', 'theme_space');
   $default = 1;
   $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
   $page->add($setting);


    //TODO: Dodać nagłówek i zdjęcie z opisem
    $name = 'theme_space/cccteachers';
    $title = get_string('cccteachers', 'theme_space');
    $description = get_string('cccteachers_desc', 'theme_space');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $page->add($setting);

    //Progress Bar
    $name = 'theme_space/courseprogressbar';
    $title = get_string('courseprogressbar', 'theme_space');
    $description = get_string('courseprogressbar_desc', 'theme_space');
    $default = 0;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $page->add($setting);

	$name = 'theme_space/setcourseimage';
	$title = get_string('setcourseimage','theme_space');
	$setting = new admin_setting_configselect($name,$title,'',0, array(
		0 => get_string('none', 'theme_space'),
		1 => get_string('courseimagefullwidth', 'theme_space'),
		2 => get_string('courseimagecontent', 'theme_space')
	) );
	$page->add($setting);


    $name = 'theme_space/hcoursecard';
	$heading = get_string('hcoursecard', 'theme_space');
	$setting = new admin_setting_heading($name, $heading, format_text(get_string('hcoursecard_desc', 'theme_space'), FORMAT_MARKDOWN));
	$page->add($setting);

    $name = 'theme_space/cccfooter';
    $title = get_string('cccfooter', 'theme_space');
    $description = get_string('cccfooter_desc', 'theme_space');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_space/stringaccess';
    $title = get_string('stringaccess', 'theme_space');
    $description = get_string('stringaccess_desc', 'theme_space');
    $default = 'Get access';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $page->add($setting);

    //TODO: Dodać nagłówek i zdjęcie z opisem
    //Customize Course Card Desc Limit
    $name = 'theme_space/coursecarddesclimit';
    $title = get_string('coursecarddesclimit', 'theme_space');
    $description = get_string('coursecarddesclimit_desc', 'theme_space');
    $setting = new admin_setting_configtext($name, $title, $description,'100');
    $page->add($setting);


// Must add the page after definiting all the settings!
$settings->add($page);
