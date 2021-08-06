<?php 
class main
{
	protected $name='jobsdezk2.0';
	protected $localhost='localhost';
	protected $root='root';
	protected $password='';
	protected $connect;
	public $db;
	
	 function __construct()
	 {
		 $this->connect();
	 }
	
	public function connect()
	{
		$this->db=new PDO("mysql:host=$this->localhost;dbname=$this->name",$this->root,$this->password);
	}
	//Function Start For Candidate	
	function createCandidate()
	{
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		$location = $_POST['location'];
		$last_updated =  time();
		$sql="INSERT INTO `candidates_info`( `first_name`, `last_name`, `email`, `password`, `phone`, `location`, `last_updated`, `status`)
		 VALUES ('".$first_name."','".$last_name."','".$email."','".$password."','".$phone."','".$location."','".$last_updated."', '1')";
		$result = $this->db->prepare($sql);			
		if($result->execute())
		{
			$liid = $this->db->lastInsertId();
			$encriptedLiid = base64_encode($liid);
			echo "
            <script type=\"text/javascript\">           
		   window.location='candidate/personal-info?cid=$encriptedLiid';
            </script>
        ";
		}
	   
		else
		return "<span style='color:red;font-size: 16px; font-weight=800;font-style: oblique;font-weight: 600;'> Already Inserted In Data Base</span>";	
	}
	function candidateLogin()
	{
		$username=$_POST['user_email'];
		$password=$_POST['password'];
		$JobID=$_POST['job_id'];
		$login=$this->db->query("select * from `candidates_info` where `email`='$username' and `password`='$password' AND `status`='1' ");
		$rowcount=$login->rowCount($login); 
		$singlRc=$login->fetchAll();		    
		if($rowcount>0)
		{
		$fetch_singel=$singlRc[0];   
		$encripted = base64_encode($fetch_singel['id']);
		if($fetch_singel['profile_complete']=='0'){
		$_SESSION['cid'] = $encripted;
		if($JobID != ''){
			$this->applyJobs($JobID, $fetch_singel['id']);
		}
           echo "
            <script type=\"text/javascript\">           
		   window.location='candidate/personal-info?cid=$encripted';
            </script>
        ";	
        }else{
			if($JobID != ''){
				$this->applyJobs($JobID, $fetch_singel['id']);
			}
				echo "
			    <script type=\"text/javascript\">           
			   window.location='candidate/dashboard?cid=$encripted';
			    </script>
				";	
			// echo "
            // <script type=\"text/javascript\">           
		   	// 	window.location='index';
            // </script>
        	// ";
        }	
		
		}
		else
		return "<span style='color:red;font-size: 16px;font-weight:600'>User ID Or Password is Incorrect</span>";		
	}
	function speciAdminDetails($id)
	{
		$sq=$this->db->prepare("SELECT * FROM `admin_login` WHERE `id`=$id");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}
	
	function logout()
	{		
		session_destroy();
	}
	//Function End For Candidate
	public function findAllCompany()
	{
		$sql=$this->db->query("SELECT * FROM `compnay` WHERE `status`='1' ");
		return $sql->fetchAll();
	}
	function speciCompanyDetails($id)
	{
		$sq=$this->db->prepare("SELECT * FROM `compnay` WHERE `id`=$id");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}
	function searchCompanyByName($companySearchKey)
	{
		$sq=$this->db->prepare("SELECT * FROM `compnay` WHERE `company_name` like '%".$companySearchKey."%' ");
		$sq->execute();
		return $sq->fetchAll();
	}
	//Function Start For Jobs
	public function findAllUrgentOpenings()
	{
		$sql=$this->db->query("SELECT * FROM `jobs` WHERE `status`='1' LIMIT 6 ");
		return $sql->fetchAll();
	}
	public function findAllJobsByCompany($companyId)
	{
		$sql=$this->db->query("SELECT * FROM `jobs` WHERE `company_id`='".$companyId."' ");
		return $sql->fetchAll();
	}
	public function findAllJobsOpeningCountByCompany($companyId)
	{
		$sql=$this->db->query("SELECT * FROM `jobs` WHERE `company_id`='".$companyId."' ");
		return $sql->rowCount($sql); ;
	}
	function specificJobDetails($id)
	{
		$sq=$this->db->prepare("SELECT * FROM `jobs` WHERE `id`=$id");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}
	public function findAllInternShipOpenings()
	{
		$sql=$this->db->query("SELECT * FROM `jobs` WHERE `job_type`='3' AND `status`='1' ");
		return $sql->fetchAll();
	}
	function searchJobByTitle($jobSearchKey)
	{
		$sq=$this->db->prepare("SELECT * FROM `jobs` WHERE `title` like '%".$jobSearchKey."%' ");
		$sq->execute();
		return $sq->fetchAll();
	}
	//Function Start For City
	public function findAllActiveCity()
	{
		$sql=$this->db->query("SELECT * FROM `city` WHERE `status`='1' ");
		return $sql->fetchAll();
	}

	function specificCityDetails($id)
	{
		$sq=$this->db->prepare("SELECT * FROM `city` WHERE `id`=$id");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}
	//Function Start For Skills
	function specificSkillDetails($id)
	{
		$sq=$this->db->prepare("SELECT * FROM `skills` WHERE `id`=$id");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}
	public function findAllActiveSkills()
	{
		$sql=$this->db->query("SELECT * FROM `skills` WHERE `status`='1' ");
		return $sql->fetchAll();
	}
	//Function End For Skills
	// Function Start For Sliding Banner
	function specificSlidingBanner()
	{
		$sq=$this->db->prepare("SELECT * FROM `sliding_banner` LIMIT 1");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}
	function specificJobTokens()
	{
		$sq=$this->db->prepare("SELECT * FROM `job_tokens` LIMIT 1");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}	

	// Function End For Sliding Banner

	// Function Start For Tail Vertical Bar
	function specificTailVerticalBar()
	{
		$sq=$this->db->prepare("SELECT * FROM `tail_veertical_bar` LIMIT 1");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}
	// Function End For Tail Vertical Bar
	// Function Start For Search Job Module
	function searchJobByJobTitle($jobTitle)
	{
		$sq=$this->db->prepare("SELECT * FROM `jobs` WHERE `title` like '%".$jobTitle."%' ");
		$sq->execute();
		return $sq->fetchAll();
	}
	// Function End For Search Job Module
	// Function Start For About Us
	function aboutUs()
	{
		$sq=$this->db->prepare("SELECT * FROM `jobdezk_about_us` ");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}
	// Function End For About Us

	// Function Start For languages
	function languageSpoken()
	{
		$sq=$this->db->prepare("SELECT * FROM `languages_spoken` ");
		$sq->execute();
		return $sq->fetchAll();
	}
	// Function End For languages
	//Function Start For Jobs	
	function applyJobs($appyingJId, $cid)
	{
		$inTime =  time();		
		$checkJobApplicationCount = $this->checkJobApplicationCount($appyingJId, $cid);
		if($checkJobApplicationCount<1){
			$sql="INSERT INTO `appplied_jobs`(`job_id`, `candidate_id`, `status`, `created_at`, `updated_at`)
			VALUES ('".$appyingJId."','".$cid."','1','".$inTime."','".$inTime."')";
			$result = $this->db->prepare($sql);			
			if($result->execute())
			{
				return "Applied";
			}

		}	   
		else
		return "Already Applied";	
	}
	public function checkJobApplicationCount($appyingJId, $candidateID)
	{
		$sql=$this->db->query("SELECT * FROM `appplied_jobs` WHERE `candidate_id`='".$candidateID."' AND `job_id`='".$appyingJId."' ");
		$rowcount=$sql->rowCount($sql); 
		return $rowcount;
	}
	public function checkAppliedJobs($cid, $jobId)
	{
		$sql = $this->db->query("SELECT `job_id`, `candidate_id` FROM `appplied_jobs` WHERE
		`candidate_id`='".$cid."' AND `job_id`='".$jobId."' ");
		return $sql->rowCount($sql); 
	}
	public function checkJobSaveCount($appyingJId, $candidateID)
	{
		$sql=$this->db->query("SELECT * FROM `saved_jobs` WHERE `candidate_id`='".$candidateID."' AND `job_id`='".$appyingJId."' ");
		$rowcount=$sql->rowCount($sql); 
		return $rowcount;
	}
	function saveJobs($appyingJId, $cid)
	{
		$inTime =  time();		
		$checkJobSaveCount = $this->checkJobSaveCount($appyingJId, $cid);
		if($checkJobSaveCount<1){
			$sql="INSERT INTO `saved_jobs`(`candidate_id`, `job_id`, `created_at`, `updated_at`)
			 VALUES ('".$cid."','".$appyingJId."','".$inTime."','".$inTime."')";
			$result = $this->db->prepare($sql);			
			if($result->execute())
			{
				return "Saved";
			}

		}	   
		else{
			$sql="DELETE FROM `saved_jobs` WHERE `candidate_id`='".$cid."' AND `job_id`='".$appyingJId."'";
			$result = $this->db->prepare($sql);			
			if($result->execute())
			{
				return "Save";
			}
		}
			
	}

	//Function End For Jobs

}	

$objectvtv = new main();
?>
