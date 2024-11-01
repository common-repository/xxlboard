<?php
/*
Plugin Name: XXLBoard
Plugin URI: http://wordpress.xxlboard.de
Description: Integriere dein XXLBoard Forum inkl. Kommentarfunktion
Version: 1.0
Author: XXLBoard
Author URI: http://xxlboard.de

ChangeLog:
1.0
- Plugin created

Copyright 2013 XXLBoard & Vanilla Forums Inc
This plugin is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
This plugin is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with this plugin. If not, see <http://www.gnu.org/licenses/>.
*/

define('VF_OPTIONS_NAME', 'vf-options');
define('VF_PLUGIN_PATH', dirname(__FILE__));
define('VF_PLUGIN_URL', WP_PLUGIN_URL.'/'.plugin_basename(dirname(__FILE__)));

include_once(VF_PLUGIN_PATH.'/functions.php'); 
include_once(VF_PLUGIN_PATH.'/admin.php');
include_once(VF_PLUGIN_PATH.'/embed.php');
include_once(VF_PLUGIN_PATH.'/widgets.php');
include_once(VF_PLUGIN_PATH.'/hooks.php');
