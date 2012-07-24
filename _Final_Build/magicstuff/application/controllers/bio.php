<?PHP

class Bio extends Controller{

	function __construct()
	{
		parent::Controller();
		$this->load->model('bio_model');
	}
	

	function index()
	{
		$data["bio_info"] = $this->bio_model->get_bio();	
		$this->load->view('bio', $data);	
	}

}
?>