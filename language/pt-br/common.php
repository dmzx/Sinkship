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
	'SINK_TITLE' 		=> 'Batalha Naval',
	'SINK_DESC'			=> 'Aqui você pode jogar o famoso jogo <strong>Batalha Naval</strong> contra o computador do Mundoaz.<br />Inicie clicando em qualquer lugar no campo do computador.<br />Se você acertar uma embarcação, o campo será marcado em vermelho. Caso contrário será marcado em azul.<br />Se uma embarcação afundar, você será informado através de uma pequena janela pop-up.<br /><br /><strong>Divirta-se!</strong>',
	'SINK_COPY'			=> 'Powered by DM Sinkship &copy; 2008, 2010 <a href="http://die-muellers.org" onclick="window.open(this.href); return false">Die Muellers</a>',
	'SINK_COPYRIGHT'	=> '&copy; 2015 <a href="http://www.dmzx-web.net" onclick="window.open(this.href); return false">dmzx-web.net</a>',
	'MINE_SWEEPER'		=> 'Corveta',
	'FRIGATE'			=> 'Fragata',
	'CRUSIER'			=> 'Cruzador',
	'BARTTLESHIP'		=> 'Encouraçado',
	'RELOAD_PAGE'		=> 'Atualiza página',
	'LOADING'			=> 'Carregando imagens, aguarde',
	'THE_COMPUTER'		=> 'Computador',
	'COMPUTER_FLEET'	=> 'Frota do computador',
	'YOUR_FLEET'		=> 'Sua frota',
	'I_SUNK'			=> 'O computador afundou: ',
	'YOU_SUNK'			=> 'Você afundou: ',
	'YOU_WON'			=> 'Você ganhou! Clique em <strong>Atualiza página</strong> para novo jogo.',
	'YOU_LOST'			=> 'Você perdeu! Clique em <strong>Atualiza página</strong> para novo jogo.',
	'YOU_GUILT'			=> 'é nada, sua culpa!',
));
