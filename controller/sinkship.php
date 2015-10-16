<?php
/**
*
* @package phpBB Extension - Sinkship
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\sinkship\controller;

class sinkship
{
	/** @var \phpbb\template\template */
	protected $template;
	/** @var \phpbb\user */
	protected $user;
	/** @var \phpbb\controller\helper */
	protected $controller_helper;

	/**
	* Constructor
	* @param \phpbb\template\template		 	$template
	* @param \phpbb\user						$user
	* @param \phpbb\controller\helper		 	$controller_helper
	*/
	public function __construct(\phpbb\template\template $template, \phpbb\user $user, \phpbb\controller\helper $controller_helper)
	{
		$this->template = $template;
		$this->user = $user;
		$this->controller_helper = $controller_helper;
	}

	public function handle_sinkship()
	{
		$this->template->assign_block_vars('navlinks', array(
			'FORUM_NAME'		=> $this->user->lang['SINK_TITLE'],
			'U_VIEW_FORUM'	=> $this->controller_helper->route('dmzx_sinkship_controller'),
		));

		page_header($this->user->lang['SINK_TITLE']);

		$this->template->set_filenames(array(
			'body' => 'dm_sinkship_body.html',
		));

		page_footer();
	}
}
