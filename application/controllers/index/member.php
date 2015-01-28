<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 用户中心控制器（非账号信息的管理）
 *
 */
class Member extends CI_Controller {

	/**
	 * 资料展示
	 *
	 *
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	/**
	 * 收藏
	 *
	 *
	 */
	public function collect()
	{
		$this->load->view('welcome_message');
	}
	/**
	 * 分享
	 *
	 *
	 */
	public function share()
	{
		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */