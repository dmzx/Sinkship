<?php
/**
*
* @package phpBB Extension - Sinkship
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\sinkship\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\user */
	protected $user;
	/** @var \phpbb\template\template */
	protected $template;
	/** @var \phpbb\controller\helper */
	protected $controller_helper;

	/**
	* Constructor
	*
	* @param \phpbb\user						$user
	* @param \phpbb\template\template			$template
	* @param \phpbb\controller\helper			$controller_helper
	*
	*/
	public function __construct(\phpbb\user $user, \phpbb\template\template $template, \phpbb\controller\helper $controller_helper)
	{
		$this->user					= $user;
		$this->template				= $template;
		$this->controller_helper 	= $controller_helper;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'		=> 'load_language_on_setup',
			'core.page_header'		=> 'page_header',
		);
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'dmzx/sinkship',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function page_header($event)
	{
		$this->template->assign_vars(array(
			'L_DM_SINKSHIP'			=> $this->user->lang['SINK_TITLE'],
			'U_DM_SINKSHIP'			=> $this->controller_helper->route('dmzx_sinkship_controller'),
		));
	}
}