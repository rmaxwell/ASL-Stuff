<?PHP

class Videos extends Controller{
	
	public function __construct()
	{
		parent::Controller();
		$this->load->model('video_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('blog_model');
	}
	
	function index()
	{
		$videos = $this->video_model->get_videos();
		
		$data['main_content'] = '/videos';
		$data['videos'] = $videos;
		$data["blog_info"] = $this->blog_model->getBlogs();
		$this->load->view('videos', $data);
				
	}

}
?>