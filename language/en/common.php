<?php
/**
*
* @package phpBB Extension - Sinkship
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'SINK_TITLE' 		=> 'DM Sinkship',
	'SINK_DESC'			=> 'Here you can play the famous game sink ships against the computer.<br />You simply start by clicking any field in the computers field.<br />If you hit a ship, the filed will be marked red. Otherwise it\'s marked blue.<br />If a ship sunk, you will be informed through a small popup.<br /><br />Have fun!',
	'SINK_COPY'			=> 'Powered by DM Sinkship &copy; 2008, 2010 <a href="http://die-muellers.org" onclick="window.open(this.href); return false">Die Muellers</a>',
	'SINK_COPYRIGHT'	=> '&copy; 2015 <a href="http://www.dmzx-web.net" onclick="window.open(this.href); return false">dmzx-web.net</a>',
	'MINE_SWEEPER'		=> 'MineSweeper',
	'FRIGATE'			=> 'Frigate',
	'CRUSIER'			=> 'Cruiser',
	'BARTTLESHIP'		=> 'Battleship',
	'RELOAD_PAGE'		=> 'Reload Page',
	'LOADING'			=> 'Loading pictures ... Please wait',
	'THE_COMPUTER'		=> 'The Computer ',
	'COMPUTER_FLEET'	=> 'Computer Fleet',
	'YOUR_FLEET'		=> 'Your Fleet',
	'I_SUNK'			=> 'The computer has sunk: ',
	'YOU_SUNK'			=> 'You have sunk: ',
	'YOU_WON'			=> 'You won! Click Reload Page to start a new game.',
	'YOU_LOST'			=> 'You lost! Click Reload Page to start a new game.',
	'YOU_GUILT'			=> 'is nothing left, your guilt!',
));
