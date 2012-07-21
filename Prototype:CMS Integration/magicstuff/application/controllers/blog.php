<?PHP

class Blog extends Controller{

	function __construct()
	{
		parent::Controller();
/* 		$this->is_logged_in(); */
	}

	function index()
	{
		$data['main_content'] = '/blog';
		$data['title'] = 'STUFF the Magic Mascot | Update Blog Info | Content Management System';
		//$data["blog_info"] = $this->blog_model->get_bio();
		$this->load->view('blog', $data);
	}

}
?>