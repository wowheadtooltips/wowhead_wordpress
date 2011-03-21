<?php

/*
  Plugin Name: Wowhead Tooltips
  Description: Adds support for Wowhead tooltips
  Version: FINAL
  Author: crackpot
  Author URI: http://crackpot.us
*/

/*  Copyright 2009  Adam Koch  (email : admin@crackpot.us)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

// figure out where parse.php is located

if (file_exists(dirname(__FILE__) . '/../../wowhead/parse.php'))		// plugin is in the plugins directory
	require_once(dirname(__FILE__) . '/../../wowhead/parse.php');
elseif (file_exists(dirname(__FILE__) . '/../../../wowhead/parse.php'))	// plugin is in a directory inside of the plugins directory (via install from zip)
	require_once(dirname(__FILE__) . '/../../../wowhead/parse.php');
elseif (file_exists(dirname(__FILE__) . '/wowhead/parse.php'))			// the wowhead directory was put into the same as the plugin
	require_once(dirname(__FILE__) . '/wowhead/parse.php');
else																	// otherwise trigger an error
	trigger_error('The script\'s parser (parse.php) was not found.  It should be located in the base directory of your WordPress installation (inside the wowhead folder).', E_USER_ERROR);


//*********************************************
//	Hooks
//*******
add_filter("the_content", "whp_parse");

?>
