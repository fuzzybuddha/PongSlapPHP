<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/main
	 *	- or -
	 * 		http://example.com/index.php/main/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model("Score");
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function add_score($user, $score)
	{
		// $user = $this->input->post('user');
		// $score = $this->input->post('score');
		$this->Score->add_score($user, $score);
	}

	public function get_all_scores(){
		$data = $this->Score->get_all_scores();
		print(json_encode($data));
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/main.php */
