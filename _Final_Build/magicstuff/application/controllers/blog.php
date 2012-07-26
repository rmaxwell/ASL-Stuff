<?PHP

class Blog extends Controller{

	function __construct()
	{
		parent::Controller();
 		$this->load->model('blog_model');
	}

	function index()
	{
		$data['blog_info'] = $this->blog_model->getBlogs();
		$this->load->view('blog', $data);
	}

}
?>