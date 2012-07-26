<?PHP

class Bio extends Controller{

	function __construct()
	{
		parent::Controller();
		$this->load->model('bio_model');
		$this->load->model('blog_model');
	}
	

	function index()
	{
		$data["bio_info"] = $this->bio_model->get_bio();	
		$data["blog_info"] = $this->blog_model->getBlogs();
		$this->load->view('bio', $data);	
	}

}
?>