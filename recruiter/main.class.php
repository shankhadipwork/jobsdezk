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
	//Function Start For Supper Recruiter	
	function superRecuiterLogin()
	{
		$username = $_POST['user_email'];
		$password = md5($_POST['password']);
		$login=$this->db->query("select * from `supper_recruiter` where `email`='$username' and `password`='$password' AND `status`='1' ");
		$rowcount=$login->rowCount($login); 
		$singlRc=$login->fetchAll();		    
		if($rowcount>0)
		{
		$fetch_singel=$singlRc[0];   
		$encripted = base64_encode($fetch_singel['id']);
           echo "
            <script type=\"text/javascript\">           
		   window.location='super-recruiter?srid=$encripted';
            </script>
        ";		
		}
		else
		return "<span style='color:red;font-size: 16px;font-weight:600'>User ID or Password is Incorrect</span>";		
	}
	function speciSupperRecruiterDetails($id)
	{
		$sq=$this->db->prepare("SELECT * FROM `supper_recruiter` WHERE `id`=$id");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}
	
	function logout()
	{		
		session_destroy();
	}
	//Function End For Candidate
	//Function Start For Sub Recruiter
	function subRecuiterLogin()
	{
		$username = $_POST['user_email'];
		$password = md5($_POST['password']);
		$login=$this->db->query("select * from `sub_recruiter` where `email`='$username' and `password`='$password' AND `status`='1' ");
		$rowcount=$login->rowCount($login); 
		$singlRc=$login->fetchAll();		    
		if($rowcount>0)
		{
		$fetch_singel=$singlRc[0];   
		$encripted = base64_encode($fetch_singel['id']);
           echo "
            <script type=\"text/javascript\">           
		   window.location='sub-recruiter-dashboard?subrid=$encripted';
            </script>
        ";		
		}
		else
		return "<span style='color:red;font-size: 16px;font-weight:600'>User ID or Password is Incorrect</span>";		
	}
	function createNewSubRecruiter($supRecruiterId)
	{
		$name = $_POST['sub_recruiter_name'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);		
		$city = $_POST['location'];
		$inTime = time();
		$status = '1';
		$specificSupRecDtls = $this->speciSupperRecruiterDetails($supRecruiterId);
		$companyId = $specificSupRecDtls['company_id'];
		$checkData=$this->subRecruiterCountBySuperRecruiter($supRecruiterId);				    
		if($checkData<4)
		{
		$sql="INSERT INTO `sub_recruiter`(`super_recruiter_id`, `name`, `email`, `password`, `city`, `company_id`,
		 `status`, `created_at`, `updated_at`) VALUES ('".$supRecruiterId."','".$name."','".$email."',
		 '".$password."','".$city."','".$companyId."','".$status."','".$inTime."','".$inTime."')";
		$result = $this->db->prepare($sql);			
		if($result->execute())
		{
			return "<span class='alert-msg success'>Sucessfully created</span>";	
		}
	   }
		else
		return "<span class='alert-msg err'> Already excide limite</span>";		
	}
	function specificSubRecruiterDetails($id)
	{
		$sq=$this->db->prepare("SELECT * FROM `sub_recruiter` WHERE `id`=$id");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}	
	function subRecruiterCountBySuperRecruiter($supRecruiterId)
	{
		$subRecruiterCount = $this->db->query("SELECT * FROM `sub_recruiter`
		 WHERE `super_recruiter_id`='$supRecruiterId' ");
		$rowcount = $subRecruiterCount->rowCount($subRecruiterCount);		
		return $rowcount;		
	}
	public function findAllSubRecruiterDtlsBySuperRecruiter($supRecruiterId)
	{
		$sql=$this->db->query("SELECT * FROM `sub_recruiter` WHERE `super_recruiter_id`='".$supRecruiterId."' ");
		return $sql->fetchAll();
	}

	


	//Function End For Sub Recruiter
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
	//Function End For City
	//Function Start For Skills
	public function findAllActiveSkills()
	{
		$sql=$this->db->query("SELECT * FROM `skills` WHERE `status`='1' ");
		return $sql->fetchAll();
	}
	function specificSkillDetails($id)
	{
		$sq=$this->db->prepare("SELECT * FROM `skills` WHERE `id`=$id");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}
	//Function End For Skills
	//Function Start For Jobs
	function createNewJobs($subRecruiterId, $superRecId)
	{
		$job_id = $_POST['job_id'];
		$job_type = $_POST['job_type'];	
		$title = $_POST['job_title'];
		$experience_needed = $_POST['experience'];
		$salary = $_POST['salary'];
		$locations = implode(',',$_POST['locations']);
		$skills_needed = implode(',',$_POST['skills']);
		$top_5_skills = $_POST['top5_1'].','.$_POST['top5_2'].','.$_POST['top5_3'].','.$_POST['top5_4'].','.$_POST['top5_5'];
		$candidate_role = $_POST['candidate_role'];
		$candidate_responsibilites = $_POST['candidate_responsibilites'];
		$specificSuperRecDtls = $this->speciSupperRecruiterDetails($superRecId);
		$companyId = $specificSuperRecDtls['company_id'];
		$inTime = time();
		$status = '1';

		$sql="INSERT INTO `jobs`(`sub_recruiter_id`, `company_id`, `job_id`, `job_type`, `title`, `experience_needed`, 
		`salary`, `locations`, `skills_needed`, `top_5_skills`, `candidate_role`, `candidate_responsibilites`, 
		`status`, `created_at`, `updated_at`) VALUES ('".$subRecruiterId."','".$companyId."','".$job_id."','".$job_type."','".$title."','".$experience_needed."',
		'".$salary."','".$locations."','".$skills_needed."','".$top_5_skills."','".$candidate_role."','".$candidate_responsibilites."',
		'".$status."',".$inTime.",'".$inTime."')";
		$result = $this->db->prepare($sql);			
		if($result->execute())
		{
			return "<span class='alert-msg success'>Sucessfully created</span>";	
		}
	// 	$specificSupRecDtls = $this->speciSupperRecruiterDetails($supRecruiterId);
	// 	$companyId = $specificSupRecDtls['company_id'];
	// 	$checkData=$this->subRecruiterCountBySuperRecruiter($supRecruiterId);				    
	// 	if($checkData<4)
	// 	{
	// 	$sql="INSERT INTO `sub_recruiter`(`super_recruiter_id`, `name`, `email`, `password`, `city`, `company_id`,
	// 	 `status`, `created_at`, `updated_at`) VALUES ('".$supRecruiterId."','".$name."','".$email."',
	// 	 '".$password."','".$city."','".$companyId."','".$status."','".$inTime."','".$inTime."')";
	// 	$result = $this->db->prepare($sql);			
	// 	if($result->execute())
	// 	{
	// 		return "<span style='color:green'>Sucessfully created</span>";	
	// 	}
	//    }
	// 	else
	// 	return "<span style='color:red;'> Already excide limite</span>";		
	}	
	function specificJobDetailsById($id)
	{
		$sq=$this->db->prepare("SELECT * FROM `jobs` WHERE `id`=$id");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}
	function jobPostedBySpecificSubRecruiter($subRecruiterId)
	{
		$subRecruiterJobsCount = $this->db->query("SELECT * FROM `jobs`
		 WHERE `sub_recruiter_id`='$subRecruiterId'  ");
		$rowcount = $subRecruiterJobsCount->rowCount($subRecruiterJobsCount);		
		return $rowcount;		
	}
	function activeJobPostedBySpecificSubRecruiter($subRecruiterId)
	{
		$subRecruiterJobsCount = $this->db->query("SELECT * FROM `jobs`
		 WHERE `sub_recruiter_id`='$subRecruiterId' AND `status`='1' ");
		$rowcount = $subRecruiterJobsCount->rowCount($subRecruiterJobsCount);		
		return $rowcount;		
	}
	public function getAllJobsBySpecificSubRecruitrt($subRecruiterId)
	{
		$sql=$this->db->query("SELECT * FROM `jobs` WHERE `sub_recruiter_id`='".$subRecruiterId."' ORDER BY `id` ASC ");
		return $sql->fetchAll();
	}
	//Function End For Jobs
	//Function Start For Company
	public function getSpecificCompanyDetails($companyId)
	{
		$sql=$this->db->prepare("SELECT * FROM `compnay` WHERE `id`='".$companyId."' ");		
		$sql->execute();
		return $sql->fetch(PDO::FETCH_ASSOC);
	}

	//Function End For Company
	//Function Start For Applied Jobs
	public function getAllAppliedJobsBySpecificJobId($jobId)
	{
		$sql=$this->db->query("SELECT * FROM `appplied_jobs` WHERE `job_id`='".$jobId."' ORDER BY `id` ASC ");
		return $sql->fetchAll();
	}
	//Function End For Applied Jobs
	//Function Start For Candidates Information
	public function getSpecificApplicantInfoDetails($id)
	{
		$sql=$this->db->prepare("SELECT * FROM `candidates_info` WHERE `id`='".$id."' ");		
		$sql->execute();
		return $sql->fetch(PDO::FETCH_ASSOC);
	}
	public function getSpecificApplicantExprienceDetails($id)
	{
		$sql=$this->db->prepare("SELECT * FROM `exprience` WHERE `candidate_id`='".$id."' ");		
		$sql->execute();
		return $sql->fetch(PDO::FETCH_ASSOC);
	}
	public function getSpecificApplicantEducationDetails($id)
	{
		$sql=$this->db->prepare("SELECT * FROM `candidates_education` WHERE `candidate_id`='".$id."' ");		
		$sql->execute();
		return $sql->fetch(PDO::FETCH_ASSOC);
	}
	//Function Start For Candidates Information
	//Function Start For Applied Job Status
	function updateAppliedJobStatus($linkVal, $cID, $jID, $classId)
	{
		$last_updated =  time();
		if($classId == 'status'){
			$fieldName = "status";
		}
		if($classId == 'actions'){
			$fieldName = "actions";
		}
		$sql="UPDATE `appplied_jobs` SET $fieldName='".$linkVal."', `updated_at`='".$last_updated."'
		 WHERE `job_id`='".$jID."'  AND `candidate_id`='".$cID."'";
		$result = $this->db->prepare($sql);			
		if($result->execute())
		{
			return "Sucess";
		}
	   
		else
		return "<span style='color:red;font-size: 16px; font-weight=800;font-style: oblique;font-weight: 600;'> Already Inserted In Data Base</span>";	
	}

	//Function End For Applied Job Status

	//company update  
	function updateRecuiterCompany($companyId)
	{
		$about = $_POST['about'];
		$size = $_POST['size'];
		$employee_satisfaction = $_POST['employee_satisfaction'];
		//$location = $_POST['locations'];
		$awards = $_POST['awards'];
		$patnership = $_POST['patnership'];
		$facilities = $_POST['facilities'];
		
		$gallery_imagesExt = pathinfo($_FILES['gallery_images']['name'], PATHINFO_EXTENSION);
		$gallery_imagesFileName = 'cr'.'.'.rand().'.'.time().'.'.$gallery_imagesExt;

		
		$updated_at =  time();

		$sql="UPDATE `compnay` SET `about`='".$about."', `size`='".$size."', `employee_satisfaction`='".$employee_satisfaction."', `awards`='".$awards."', `patnership`='".$patnership."',`facilities`='".$facilities."'
		 WHERE `id`='".$companyId."'";
		
		$result = $this->db->prepare($sql);			
		if($result->execute())
		{

			if($_FILES['gallery_images']['tmp_name']!=''){	
				
			
				move_uploaded_file($_FILES['gallery_images']['tmp_name'],'../images/'.$gallery_imagesFileName);
				

				$sqlpdf="UPDATE `compnay` SET `gallery_images`='".$gallery_imagesFileName."' WHERE `id`='".$companyId."' ";
				$resultpdf = $this->db->prepare($sqlpdf);
				$resultpdf->execute();
			}


			return "Sucess";
		}
	   
		else
		return "<span style='color:red;font-size: 16px; font-weight=800;font-style: oblique;font-weight: 600;'> Already Inserted In Data Base</span>";	
	}

}	

$objectjdsr = new main();
?>
