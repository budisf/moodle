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


$page = new admin_settingpage('theme_space_settingsfooter', get_string( 'settingsfooter', 'theme_space'));

        $name = 'theme_space/footerblock1';
        $title = get_string('footerblock1', 'theme_space');
        $description = get_string('footerblock1_desc', 'theme_space');
        $default = '<p>Sample paragraph lorem ipsum dolar set...</p>
        <ol class="px-4 mt-3">
            <li>Stanrad list</li>
            <li>Lorem ipsum</li>
            <li>Dolar set...</li>
        </ol>';
        $setting = new space_setting_confightmleditor($name, $title, $description, $default);
        $page->add($setting);

        $name = 'theme_space/footerblock2';
        $title = get_string('footerblock2', 'theme_space');
        $description = get_string('footerblock2_desc', 'theme_space');
        $default = '<div class="rui-footer-nav row text-sm-center text-md-left my-5">
        <div class="col-sm-12 col-md-6 col-lg my-sm-2 my-md-0">
            <h5 class="rui-footer-nav-title">Company</h5>
            <ul class="rui-footer-nav-items list-unstyled mb-0">
                <li> <a href="#">About Us</a> </li>
                <li> <a href="#">Blog</a><span class="badge-xs badge-success ml-2">New</span> </li>
                <li> <a href="#">FAQ</a> </li>
                <li> <a href="#">Contact</a> </li>
                <li> <a href="#">Help</a> </li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-6 col-lg my-sm-2 my-md-0">
            <h5 class="rui-footer-nav-title">Products</h5>
            <ul class="rui-footer-nav-items list-unstyled mb-0">
                <li> <a href="#">Parents</a> </li>
                <li> <a href="#">Schools</a> </li>
                <li> <a href="#">Partners</a> </li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-6 col-lg my-sm-2 my-md-0">
            <h5 class="rui-footer-nav-title">Legal</h5>
            <ul class="rui-footer-nav-items list-unstyled mb-0">
                <li> <a href="#">Privacy Policy</a> </li>
                <li> <a href="#">Terms of Service</a> </li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-6 col-lg my-sm-2 my-md-0">
            <h5 class="rui-footer-nav-title">Office</h5>
            <ul class="rui-footer-nav-items list-unstyled mb-0">
                <li>
                    <p> Victoria Garden City, Lagos </p>
                </li>
                <li> 1234 Fruitvale Avenue, Oakland, Califonia, USA. </li>
            </ul>
        </div>
    </div>';
        $setting = new space_setting_confightmleditor($name, $title, $description, $default);
        $page->add($setting);

        $name = 'theme_space/footerblock3';
        $title = get_string('footerblock3', 'theme_space');
        $description = get_string('footerblock3_desc', 'theme_space');
        $default = 'Get this theme exclusively on the ThemeForest: More premium moodle themes: <a href="https://rosea.io">rosea.io</a>';
        $setting = new space_setting_confightmleditor($name, $title, $description, $default);
        $page->add($setting);

        $name = 'theme_space/footercopy';
        $title = get_string('footercopy', 'theme_space');
        $description = get_string('footercopy_desc', 'theme_space');
        $default = '<p><strong>Copyright © 2020 space Moodle Theme. All right reserved.</strong></p>space premium moodle theme by RoseaThemes.';
        $setting = new space_setting_confightmleditor($name, $title, $description, $default);
        $page->add($setting);

        $name = 'theme_space/hfootercolors';
        $heading = get_string('hfootercolors', 'theme_space');
        $setting = new admin_setting_heading($name, $heading, format_text(get_string('hfootercolors_desc', 'theme_space'), FORMAT_MARKDOWN));
        $page->add($setting);
    
        $name = 'theme_space/colorfooterbg';
        $title = get_string('colorfooterbg', 'theme_space');
        $description = get_string('color_desc', 'theme_space');
        $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
    
        $name = 'theme_space/colorfooterborder';
        $title = get_string('colorfooterborder', 'theme_space');
        $description = get_string('color_desc', 'theme_space');
        $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
    
        $name = 'theme_space/colorfootertext';
        $title = get_string('colorfootertext', 'theme_space');
        $description = get_string('color_desc', 'theme_space');
        $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
    
        $name = 'theme_space/colorfooterlink';
        $title = get_string('colorfooterlink', 'theme_space');
        $description = get_string('color_desc', 'theme_space');
        $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
    
        $name = 'theme_space/colorfooterlinkhover';
        $title = get_string('colorfooterlinkhover', 'theme_space');
        $description = get_string('color_desc', 'theme_space');
        $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);

        $fileid = 'footerbgimg';
        $name = 'theme_space/footerbgimg';
        $title = get_string('footerbgimg', 'theme_space');
        $description = get_string('footerbgimg_desc', 'theme_space');
        $opts = array('accepted_types' => array('.png', '.jpg', '.gif', '.webp', '.tiff', '.svg'), 'maxfiles' => 1);
        $setting = new admin_setting_configstoredfile($name, $title, $description, $fileid, 0, $opts);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);

        $name = 'theme_space/footercustomcss';
        $title = get_string('footercustomcss', 'theme_space');
        $description = get_string('footercustomcss_desc', 'theme_space');
        $default = '';
        $setting = new admin_setting_configtextarea($name, $title, $description, $default);
        $page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);
