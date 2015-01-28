<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 商品展示控制器
 *
 */
class Goods extends CI_Controller {

	/**
	 * 首页
	 *
	 *
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */