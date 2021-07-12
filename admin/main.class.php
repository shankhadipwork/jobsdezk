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
	function adminLogin()
	{
		$username=$_POST['user_id'];
		$password=$_POST['password'];
		$login=$this->db->query("select * from `admin_login` where `user_id`='$username' and `password`='$password' AND `status`='1' ");
		$rowcount=$login->rowCount($login); 
		$singlRc=$login->fetchAll();		    
		if($rowcount>0)
		{
		$fetch_singel=$singlRc[0];
		$encriptedaid = base64_encode($fetch_singel['id']);
           echo "
            <script type=\"text/javascript\">           
		   window.location='dashboard?aid=$encriptedaid';
            </script>
        ";		
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
	//Function Start For Super Recruiter

	function createSuperRecruiter()
	{
		$company_id = $_POST['company'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$insertSR = $this->db->query("INSERT INTO `supper_recruiter`(`company_id`, `name`, `email`, `password`, `status`)
		 VALUES ('".$company_id."','".$name."','".$email."','".$password."','1') ");
		 if($insertSR){
			return "<span style='color:green;font-size: 16px;font-weight:600'>Sucessfully inserted</span>";
		 }
		
		
		else
		return "<span style='color:red;font-size: 16px;font-weight:600'>Something went wrong</span>";		
	}

	//Function End For Super Recruiter
	//Function Start For Company
	function createNewCompany()
	{
		$companyName = trim($_POST['company_name']);
		$checkCompanyName = $this->getSpecificCompanyName($companyName);	    
		if($checkCompanyName==0)
		{
		$currentTime = time();
		$insertSR = $this->db->query("INSERT INTO `compnay`(`company_name`, `status`, `created_at`, `updated_at`)
		 VALUES ('".$companyName."','1','".$currentTime."','".$currentTime."') ");
		 if($insertSR){
			return "<span style='color:green;font-size: 16px;font-weight:600'>Sucessfully inserted</span>";
		 }
		 else
		return "<span style='color:red;font-size: 16px;font-weight:600'>Something went wrong</span>";	
		}
		else{
			return "<span style='color:red;font-size: 16px;font-weight:600'>Company name alredy exist</span>";	
		}			
	}
	function getSpecificCompanyName($companyName)
	{
		$getCompnayName=$this->db->query("select `company_name` from `compnay` where `company_name`='".$companyName."'  ");
		$companyRowcount=$getCompnayName->rowCount($getCompnayName); 
		return $companyRowcount;	
			
	}
	public function findAllCompanyByNameAndID()
	{
		$sql=$this->db->query("SELECT `id`, `company_name` FROM `compnay` ");
		return $sql->fetchAll();
	}
	public function findAllCompnay()
	{
		$sql=$this->db->query("SELECT * FROM `compnay` ");
		return $sql->fetchAll();
	}
	public function findAllJobsOpeningCountByCompany($companyId)
	{
		$sql=$this->db->query("SELECT * FROM `jobs` WHERE `company_id`='".$companyId."' ");
		return $sql->rowCount($sql); ;
	}
	function speciCompanyDetails($id)
	{
		$sq=$this->db->prepare("SELECT * FROM `compnay` WHERE `id`=$id");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}

	//Function End For Company 
	//Function Start For Jobs 

	public function findAllJobs()
	{
		$sql=$this->db->query("SELECT * FROM `jobs` WHERE `status`='1' ");
		return $sql->fetchAll();
	}
	//Function End For Jobs
	//Function Start For City
	function specificCityDetails($id)
	{
		$sq=$this->db->prepare("SELECT * FROM `city` WHERE `id`=$id");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}
	//Function End For City
	//Function Start For Jobs 

	public function findAllSupperRecruiter()
	{
		$sql=$this->db->query("SELECT * FROM `supper_recruiter`  ");
		return $sql->fetchAll();
	}
	//Function End For Jobs
	//Function Start For Candidates info

	public function findAllCandidatesInfo()
	{
		$sql=$this->db->query("SELECT * FROM `candidates_info`  ");
		return $sql->fetchAll();
	}

	//Function End For Candidates info
	//Function Start For Sliding Banner
	function insertSlidingBanner()
	{
		$image1 = $_FILES['sliding_banner1']['name'];
		$image2 = $_FILES['sliding_banner2']['name'];
		$image3 = $_FILES['sliding_banner3']['name'];
		if($image1 !=''){
			$image1 =  pathinfo($_FILES['sliding_banner1']['name'], PATHINFO_EXTENSION);
			$image1 = rand().time().'.'.$image1;
		}
		if($image2 !=''){
			$image2 =  pathinfo($_FILES['sliding_banner2']['name'], PATHINFO_EXTENSION);
			$image2 = rand().time().'.'.$image2;
		}
		if($image3 !=''){
			$image3 =  pathinfo($_FILES['sliding_banner2']['name'], PATHINFO_EXTENSION);
			$image3 = rand().time().'.'.$image3;
		} 
		$specificSlidingBanner=$this->specificSlidingBanner();		
		$currentTime = time();		
			$insertSlidingImage = $this->db->query("INSERT INTO `sliding_banner`(`image1`, `image2`, `image3`, `status`, `updated_at`)
		 VALUES ('".$image1."','".$image2."','".$image3."','1','".$currentTime."') ");
		 if($insertSlidingImage){
			move_uploaded_file($_FILES['sliding_banner1']['tmp_name'],'../images/sliding_banner/'.$image1);	
			move_uploaded_file($_FILES['sliding_banner2']['tmp_name'],'../images/sliding_banner/'.$image2);	
			move_uploaded_file($_FILES['sliding_banner3']['tmp_name'],'../images/sliding_banner/'.$image3);	
			return "<span style='color:green;font-size: 16px;font-weight:600'>Sucessfully inserted</span>";
		 }
		 else
		return "<span style='color:red;font-size: 16px;font-weight:600'>Something went wrong</span>";

		
			
	}
	function updateSlidingBanner()
	{
		$image1 = $_FILES['sliding_banner1']['name'];
		$image2 = $_FILES['sliding_banner2']['name'];
		$image3 = $_FILES['sliding_banner3']['name'];
		$specificSlidingBanner=$this->specificSlidingBanner();
		if($image1 !='')
		{
			$image1 =  pathinfo($_FILES['sliding_banner1']['name'], PATHINFO_EXTENSION);
			$image1 = rand().time().'.'.$image1;
			unlink('../images/sliding_banner/'.$specificSlidingBanner['image1']);
			move_uploaded_file($_FILES['sliding_banner1']['tmp_name'],'../images/sliding_banner/'.$image1);					 
		}
		if($image1 =='')
		{
			if($specificSlidingBanner['image1']!='')
			{
				$image1=$specificSlidingBanner['image1'];				
			}
			if($specificSlidingBanner['image1']=='')
			{
				$image1='';
			}   
		}
	    if($image2 !='')
		{
			$image2 =  pathinfo($_FILES['sliding_banner2']['name'], PATHINFO_EXTENSION);
			$image2 = rand().time().'.'.$image2;
			unlink('../images/sliding_banner/'.$specificSlidingBanner['image2']);
			move_uploaded_file($_FILES['sliding_banner2']['tmp_name'],'../images/sliding_banner/'.$image2);					 
		}
		if($image2 =='')
		{
			if($specificSlidingBanner['image2']!='')
			{
				$image2=$specificSlidingBanner['image2'];				
			}
			if($specificSlidingBanner['image2']=='')
			{
				$image2='';
			}   
		}
		if($image3 !='')
		{
			$image3 =  pathinfo($_FILES['sliding_banner3']['name'], PATHINFO_EXTENSION);
			$image3 = rand().time().'.'.$image3;
			unlink('../images/sliding_banner/'.$specificSlidingBanner['image3']);
			move_uploaded_file($_FILES['sliding_banner3']['tmp_name'],'../images/sliding_banner/'.$image3);					 
		}
		if($image3 =='')
		{
			if($specificSlidingBanner['image3']!='')
			{
				$image3=$specificSlidingBanner['image3'];				
			}
			if($specificSlidingBanner['image3']=='')
			{
				$image3='';
			}   
		}
		
		$currentTime = time();		
			$updateSlidingImage = $this->db->query("UPDATE `sliding_banner` SET `image1`='".$image1."',
			`image2`='".$image2."',`image3`='".$image3."',`status`='1',`updated_at`='".$currentTime."' WHERE 1 ");
			return "<span style='color:green;font-size: 16px;font-weight:600'>Sucessfully Updated</span>";
			
			
	}
	public function slidingBannerRowCount()
	{
		$sql=$this->db->query("SELECT * FROM `sliding_banner`");
		return $sql->rowCount($sql); ;
	}
	function specificSlidingBanner()
	{
		$sq=$this->db->prepare("SELECT * FROM `sliding_banner` LIMIT 1");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}

	// Function End For Sliding Banner
	// Function Start For job Dezk About Us
	function jobDezkAboutUsCU()
	{
		$about = trim($_POST['about']);
		$address = trim($_POST['address']);
		$checkAboutUsRowCount = $this->aboutUsRowCount();
		$currentTime = time();	    
		if($checkAboutUsRowCount==0)
		{		
		$insertAboutUs = $this->db->query("INSERT INTO `jobdezk_about_us`(`about`, `address`, `updated_at`) 
		VALUES ('".$about."','".$address."','".$currentTime."') ");
		 if($insertAboutUs){
			return "<span style='color:green;font-size: 16px;font-weight:600'>Sucessfully inserted</span>";
		 }
		 else
			return "<span style='color:red;font-size: 16px;font-weight:600'>Something went wrong</span>";	
		}
		else{

		$updateAboutUs = $this->db->query("UPDATE `jobdezk_about_us` SET `about`='".$about."',
		`address`='".$address."',`updated_at`='".$currentTime."' WHERE 1 ");
		 if($updateAboutUs){
			return "<span style='color:green;font-size: 16px;font-weight:600'>Sucessfully Updated</span>";
		 }
		 else
			return "<span style='color:red;font-size: 16px;font-weight:600'>Something went wrong</span>";	
		}		
	}
	public function aboutUsRowCount()
	{
		$sql=$this->db->query("SELECT * FROM `jobdezk_about_us` LIMIT 1 ");
		return $sql->rowCount($sql); ;
	}
	function specificAboutUs()
	{
		$sq=$this->db->prepare("SELECT * FROM `jobdezk_about_us` LIMIT 1");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}
	// Function End For job Dezk About Us
	

}	

$objectjda=new main();
?>
