<?PHP

class Videos extends Controller{
	
	public function __construct()
	{
		parent::Controller();
		$this->load->model('video_model');
		$this->load->helper('url');
		$this->load->helper('form');
	}
	
	function index()
	{
		$videos = $this->video_model->get_videos();
		
		$data['main_content'] = '/videos';
		$data['videos'] = $videos;
		$this->load->view('videos', $data);
				
	}

}
?>