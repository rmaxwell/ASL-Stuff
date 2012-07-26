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
		$data['post_data'] = $this->blog_model->getPosts(5);
		$this->load->view('blog', $data);
	}

}
?>