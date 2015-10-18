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
	'SINK_TITLE' 		=> 'Batalla Naval',
	'SINK_DESC'			=> 'Aquí usted puede jugar el famoso juego <strong>Batalla Naval</strong> contra la computadora de Mundoaz.<br />Para comenzar simplemente haga clic en cualquier lugar dentro del área correspondiente a la flota de la computadora.<br />Si aciertas un buque, será marcado con una círculo roja. De lo contrario, será marcado con un círculo azul.<br />Si el buque se hunde, será informado de ello mediante una pequeña ventana emergente.<br /><br /><strong>¡Diviértase!</strong>',
	'SINK_COPY'			=> 'Desarrollado por DM Sinkship &copy; 2008, 2010 <a href="http://die-muellers.org" onclick="window.open(this.href); return false">Die Muellers</a>',
	'SINK_COPYRIGHT'	=> '&copy; 2015 <a href="http://www.dmzx-web.net" onclick="window.open(this.href); return false">dmzx-web.net</a>',
	'MINE_SWEEPER'		=> 'Dragaminas',
	'FRIGATE'			=> 'Fragata',
	'CRUSIER'			=> 'Crucero',
	'BARTTLESHIP'		=> 'Acorazado ',
	'RELOAD_PAGE'		=> 'Recargar Página',
	'LOADING'			=> 'Cargando dibujos... Por favor, espere',
	'THE_COMPUTER'		=> 'La Computadora',
	'COMPUTER_FLEET'	=> 'Flota de la Computadora',
	'YOUR_FLEET'		=> 'Su flota',
	'I_SUNK'			=> 'La computadora ha hundido: ',
	'YOU_SUNK'			=> 'Usted ha hundido: ',
	'YOU_WON'			=> '¡Usted ganó! Haga clic en <strong>Recargar Página</strong> para comenzar un nuevo juego.',
	'YOU_LOST'			=> '¡Usted perdió! Haga clic en <strong>Recargar Página</strong> para comenzar un nuevo juego.',
	'YOU_LOST'			=> 'No ha quedado nada, ¡es su culpa!',
));
