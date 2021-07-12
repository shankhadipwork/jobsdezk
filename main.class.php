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
		$login=$this->db->query("select * from `candidates_info` where `email`='$username' and `password`='$password' AND `status`='1' ");
		$rowcount=$login->rowCount($login); 
		$singlRc=$login->fetchAll();		    
		if($rowcount>0)
		{
		$fetch_singel=$singlRc[0];   
		$encripted = base64_encode($fetch_singel['id']);
		if($fetch_singel['profile_complete']=='0'){
           echo "
            <script type=\"text/javascript\">           
		   window.location='candidate/personal-info?cid=$encripted';
            </script>
        ";	
        }else{
        	echo "
            <script type=\"text/javascript\">           
		   window.location='candidate/dashboard';
            </script>
        ";	

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
	//Function Start For Jobs
	public function findAllUrgentOpenings()
	{
		$sql=$this->db->query("SELECT * FROM `jobs` WHERE `status`='1' ");
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
	//Function End For Skills
	// Function Start For Sliding Banner
	function specificSlidingBanner()
	{
		$sq=$this->db->prepare("SELECT * FROM `sliding_banner` LIMIT 1");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}

	// Function End For Sliding Banner

}	

$objectvtv=new main();
?>
