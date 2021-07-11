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
	function updateCandidate($id)
	{
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$phone = $_POST['phone'];
		$candidate_dob = $_POST['candidate_dob'];	
		$location = implode(',', $_POST['locations']);
		$language_known = implode(',',$_POST['language_known']);
		$gender = $_POST['gender'];
		$last_updated =  time();
		$sql="UPDATE `candidates_info` SET `first_name`='".$first_name."',`last_name`='".$last_name."',
		`phone`='".$phone."',`location`='".$location."',`last_updated`='".$last_updated."',
		`candidate_dob`='".$candidate_dob."',`language_known`='".$language_known."',`gender`='".$gender."' WHERE `id`='".$id."' ";
		$result = $this->db->prepare($sql);			
		if($result->execute())
		{
			$liid= $this->db->lastInsertId();
			echo "
            <script type=\"text/javascript\">           
		   window.location='skills';
            </script>
        ";
		}
	   
		else
		return "<span style='color:red;font-size: 16px; font-weight=800;font-style: oblique;font-weight: 600;'> Already Inserted In Data Base</span>";	
	}
	function adminLogin()
	{
		$username=$_POST['user_d'];
		$password=$_POST['password'];
		$login=$this->db->query("select * from `admin_login` where `user_id`='$username' and `password`='$password' AND `status`='1' ");
		$rowcount=$login->rowCount($login); 
		$singlRc=$login->fetchAll();		    
		if($rowcount>0)
		{
		$fetch_singel=$singlRc[0];   		
		$_SESSION['sl_no'] = $fetch_singel['id'];
           echo "
            <script type=\"text/javascript\">           
		   window.location='resources/views/dashboard';
            </script>
        ";		
		}
		else
		return "<span style='color:red;font-size: 16px;font-weight:600'>User ID Or Password is Incorrect</span>";		
	}
	function speciCandidateDetails($id)
	{
		$sq=$this->db->prepare("SELECT * FROM `candidates_info` WHERE `id`=$id");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}
	
	function logout()
	{		
		session_destroy();
	}
	//Function End For Candidate

	//Function Start For Skills
	function insertCandidateEducation($id)
	{
		$higest_qualification = $_POST['higest_qualification'];
		$course = $_POST['course'];
		$specialization = $_POST['specialization'];
		$course_completion_year = $_POST['course_completion_year'];
		$type_of_course = $_POST['type_of_course'];
		$institute_name = $_POST['institute_name'];
		$last_updated =  time();

		$sql1=$this->db->query("SELECT * FROM `candidates_education` WHERE `candidate_id`='".$id."'");
		$rowcount=$sql1->rowCount($sql); 
		if($rowcount>0){

			$sql="UPDATE `candidates_education` SET `higest_qualification`='".$higest_qualification."',`course`='".$course."',
		`specialization`='".$specialization."',`course_completion_year`='".$course_completion_year."',`type_of_course`='".$type_of_course."',
		`institute_name`='".$institute_name."',`updated_at`='".$last_updated."' WHERE `candidate_id`='".$id."' ";


		}else
		{
			$sql="INSERT INTO `candidates_education`(`candidate_id`, `higest_qualification`, `course`, `specialization`, `course_completion_year`, `type_of_course`, `institute_name`,`updated_at`)
			 VALUES ('".$id."','".$higest_qualification."','".$course."','".$specialization."','".$course_completion_year."','".$type_of_course."','".$institute_name."','".$last_updated."') ";

		}
		$result = $this->db->prepare($sql);			
		if($result->execute())
		{
			$liid= $this->db->lastInsertId();
			echo "
            <script type=\"text/javascript\">           
		   window.location='employment';
            </script>
        ";
		}
	   
		else
		return "<span style='color:red;font-size: 16px; font-weight=800;font-style: oblique;font-weight: 600;'> Already Inserted In Data Base</span>";	
	}
	public function findAllSkills()
	{
		$sql=$this->db->query("SELECT * FROM `skills` WHERE `status`='1' ORDER BY `id` ASC");
		return $fetch=$sql->fetchAll();
	}

	//Function End For Skills
	//Function Start For Expriences
	function insertCandidateExpriences($id)
	{
		$category = $_POST['category'];
		$total_year = $_POST['total_year'];
		$total_month = $_POST['total_month'];
		$latest_company = $_POST['latest_company'];
		$ctc = $_POST['ctc'];
		$notice_period = $_POST['notice_period'];
		$tenure = $_POST['tenure'];
		$end_date = $_POST['end_date'];
		$designation = $_POST['designation'];
		$updated_at =  time();
		$sql1=$this->db->query("SELECT * FROM `exprience` WHERE `candidate_id`='".$id."'");
		$rowcount=$sql1->rowCount($sql); 
		if($rowcount>0){

			$sql="UPDATE `exprience` SET `category`='".$category."',`total_year`='".$total_year."',
		`total_month`='".$total_month."',`latest_company`='".$latest_company."',`ctc`='".$ctc."',
		`notice_period`='".$notice_period."',`tenure`='".$tenure."',`end_date`='".$end_date."',`designation`='".$designation."',`updated_at`='".$last_updated."' WHERE `candidate_id`='".$id."' ";


		}else
		{
			$sql="INSERT INTO `exprience`(`candidate_id`, `category`, `total_year`, `total_month`, `latest_company`, `ctc`, `notice_period`, `tenure`, `end_date`, `designation`, `updated_at`) 
			VALUES ('".$id."','".$category."','".$total_year."','".$total_month."','".$latest_company."','".$ctc."','".$notice_period."','".$tenure."','".$end_date."','".$designation."','".$updated_at."') ";
		}
		$result = $this->db->prepare($sql);			
		if($result->execute())
		{
			$liid= $this->db->lastInsertId();
			echo "
            <script type=\"text/javascript\">           
		   window.location='social';
            </script>
        ";
		}
	   
		else
		return "<span style='color:red;font-size: 16px; font-weight=800;font-style: oblique;font-weight: 600;'> Already Inserted In Data Base</span>";	
	}

	//Function End For Expriences
	//Function Start For Social Links
	function insertCandidateSocialLinks($id)
	{
		$social_media = $_POST['social_media'];
		$social_link = $_POST['social_link'];
		$updated_at =  time();

		$sql1=$this->db->query("SELECT * FROM `candidates_social_links` WHERE `candidate_id`='".$id."'");
		$rowcount=$sql1->rowCount($sql); 
		if($rowcount>0){
			$sql="UPDATE `candidates_social_links` SET `social_media`='".$social_media."',`social_link`='".$social_link."',
		`update_at`='".$updated_at."' WHERE `candidate_id`='".$id."' ";
		}else{



		$sql="INSERT INTO `candidates_social_links`(`candidate_id`, `social_media`, `social_link`, `update_at`) 
		VALUES ('".$id."','".$social_media."','".$social_link."','".$updated_at."') ";
	}
		$result = $this->db->prepare($sql);	

		if($result->execute())
		{
			$liid= $this->db->lastInsertId();
			echo "
            <script type=\"text/javascript\">           
		   window.location='submit';
            </script>
        ";
		}
	   
		else
		return "<span style='color:red;font-size: 16px; font-weight=800;font-style: oblique;font-weight: 600;'> Already Inserted In Data Base</span>";	
	}

	//Function End For Social Links
	//Function Start For Files
	function insertCandidateFiles($id)
	{

		$resumExt = pathinfo($_FILES['candidate_resume']['name'], PATHINFO_EXTENSION);
		$resumeFileName = 'cr'.'.'.rand().'.'.time().'.'.$resumExt;
		$imageExt = pathinfo($_FILES['candidate_photo']['name'], PATHINFO_EXTENSION);
		$imageFileName = 'ci'.'.'.rand().'.'.time().'.'.$imageExt;
		$updated_at =  time();

		$sql1=$this->db->query("SELECT * FROM `candidates_files` WHERE `candidate_id`='".$id."'");
		$rowcount=$sql1->rowCount($sql); 
		if($rowcount>0){
			$sql="UPDATE `candidates_files` SET `update_at`='".$updated_at."' WHERE `candidate_id`='".$id."' ";
		}else{


			$sql="INSERT INTO `candidates_files`(`candidate_id`, `resume`, `image`, `update_at`)
		 	VALUES ('".$id."','".$resumeFileName."','".$imageFileName."', '".$updated_at."')";
		}
		$result = $this->db->prepare($sql);			
		if($result->execute())
		{

				$sqluser="UPDATE `candidates_info` SET `profile_complete`='1' WHERE `id`='".$id."' ";
				$resultUser = $this->db->prepare($sqluser);
				$resultUser->execute();

			if($_FILES['candidate_resume']['tmp_name']!=''){	
			
				move_uploaded_file($_FILES['candidate_resume']['tmp_name'],'../images/candidate/resumes/'.$resumeFileName);
				

				$sqlpdf="UPDATE `candidates_files` SET `resume`='".$resumeFileName."' WHERE `candidate_id`='".$id."' ";
				$resultpdf = $this->db->prepare($sqlpdf);
				$resultpdf->execute();
			}
			if($_FILES['candidate_photo']['tmp_name']!=''){	
			
				
				move_uploaded_file($_FILES['candidate_photo']['tmp_name'],'../images/candidate/images/'.$imageFileName);

				$sqlimg="UPDATE `candidates_files` SET `image`='".$imageFileName."' WHERE `candidate_id`='".$id."' ";
				$resultimg = $this->db->prepare($sqlimg);
				$resultimg->execute();
			}

			echo "
            <script type=\"text/javascript\">           
		   window.location='confirm';
            </script>
        ";
		}
	   
		else
		return "<span style='color:red;font-size: 16px; font-weight=800;font-style: oblique;font-weight: 600;'> Already Inserted In Data Base</span>";	
	}

	//Function End For Files
	//Function Start For Languages
	public function findAllLanguages()
	{
		$sql=$this->db->query("SELECT * FROM `languages_spoken` ORDER BY `id` ASC");
		return $fetch=$sql->fetchAll();
	}
	//Function End For Languages
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
	//Function Start For Jobs
	public function findAllActiveJobs()
	{
		$sql=$this->db->query("SELECT * FROM `jobs` WHERE `status`='1' ");
		return $sql->fetchAll();
	}
	function specificJobDetails($id)
	{
		$sq=$this->db->prepare("SELECT * FROM `jobs` WHERE `id`=$id");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}
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

	//Function End For Jobs
	//Function Start For Skills
	function insertCandidateSkills($id)
	{
		$skills_sets = implode(',',$_POST['skills']);;
		$top_skill_1 = $_POST['top_skills1'];
		$top_skill_2 = $_POST['top_skills2'];
		$top_skill_3 = $_POST['top_skills3'];
		$top_skill_4 = $_POST['top_skills4'];
		$top_skill_5 = $_POST['top_skills5'];
		$self_rating_skill_1 = $_POST['self_rating_skill1'];
		$self_rating_skill_2 = $_POST['self_rating_skill2'];
		$self_rating_skill_3 = $_POST['self_rating_skill3'];
		$self_rating_skill_4 = $_POST['self_rating_skill4'];
		$self_rating_skill_5 = $_POST['self_rating_skill5'];
		$inTime =  time();

		$sql=$this->db->query("SELECT * FROM `candidates_skills` WHERE `candiate_id`='".$id."'");
		$rowcount=$sql->rowCount($sql); 
		if($rowcount>0){
			
			$sql="UPDATE `candidates_skills` SET `skills_sets`='".$skills_sets."',`top_skill_1`='".$top_skill_1."',
		`top_skill_2`='".$top_skill_2."',`top_skill_3`='".$top_skill_3."',`top_skill_4`='".$top_skill_4."',
		`top_skill_5`='".$top_skill_5."',`self_rating_skill_1`='".$self_rating_skill_1."',`self_rating_skill_2`='".$self_rating_skill_2."',`self_rating_skill_3`='".$self_rating_skill_3."',`self_rating_skill_4`='".$self_rating_skill_4."',`self_rating_skill_5`='".$self_rating_skill_5."',`updated_at`='".$inTime."' WHERE `candiate_id`='".$id."' ";
		

		}else{
		$sql="INSERT INTO `candidates_skills`(`candiate_id`, `skills_sets`, `top_skill_1`, `top_skill_2`,
		 `top_skill_3`, `top_skill_4`, `top_skill_5`, `self_rating_skill_1`, `self_rating_skill_2`, 
		 `self_rating_skill_3`, `self_rating_skill_4`, `self_rating_skill_5`, `status`, `created_at`, `updated_at`) 
		 VALUES ('".$id."','".$skills_sets."','".$top_skill_1."','".$top_skill_2."','".$top_skill_3."','".$top_skill_4."',
		 '".$top_skill_5."','".$self_rating_skill_1."','".$self_rating_skill_2."','".$self_rating_skill_3."',
		 '".$self_rating_skill_4."','".$self_rating_skill_5."','1','".$inTime."','".$inTime."') ";
		}

		$result = $this->db->prepare($sql);			
		if($result->execute())
		{
			$liid= $this->db->lastInsertId();
			echo "
            <script type=\"text/javascript\">           
		   window.location='social';
            </script>
        ";
		}
	   
		else
		return "<span style='color:red;font-size: 16px; font-weight=800;font-style: oblique;font-weight: 600;'> Already Inserted In Data Base</span>";	
	}
	function specificCandidateSkillsDetails($candidateId)
	{

		$sq=$this->db->prepare("SELECT * FROM `candidates_skills` WHERE `candiate_id`=$candidateId");
		$sq->execute();

		return $sq->fetch(PDO::FETCH_ASSOC);
	}
	function specificSkillDetails($id)
	{
		$sq=$this->db->prepare("SELECT * FROM `skills` WHERE `id`=$id");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}


	//Function End For Skills

	//Function Start For Companies
	function specificCompanyDetails($id)
	{
		$sq=$this->db->prepare("SELECT * FROM `compnay` WHERE `id`='$id'");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}


	//Function End For Companies
	//Function start For Applied Jobs
	public function findAllApliedJobsByCandidate($candidateID,$jobid)
	{
		$sql=$this->db->query("SELECT * FROM `appplied_jobs` WHERE `candidate_id`='".$candidateID."' AND `job_id`='".$jobid."' ");
		$rowcount=$sql->rowCount($sql); 
		return $rowcount;
	}
	//Function End For Applied Jobs

	public function getSpecificApplicantEducationDetails($id)
	{
		$sql=$this->db->prepare("SELECT * FROM `candidates_education` WHERE `candidate_id`='".$id."' ");		
		$sql->execute();
		return $sql->fetch(PDO::FETCH_ASSOC);
	}
	public function getSpecificApplicantExprienceDetails($id)
	{
		$sql=$this->db->prepare("SELECT * FROM `exprience` WHERE `candidate_id`='".$id."' ");		
		$sql->execute();
		return $sql->fetch(PDO::FETCH_ASSOC);
	}
	public function getSpecificApplicantSocialLinkDetails($id)
	{
		$sql=$this->db->prepare("SELECT * FROM `candidates_social_links` WHERE `candidate_id`='".$id."' ");		
		$sql->execute();
		return $sql->fetch(PDO::FETCH_ASSOC);
	}

	public function getSpecificApplicantCandidatesFiles($id)
	{
		$sql=$this->db->prepare("SELECT * FROM `candidates_files` WHERE `candidate_id`='".$id."' ");		
		$sql->execute();
		return $sql->fetch(PDO::FETCH_ASSOC);
	}

	function specificSkillCadidate($id)
	{
		$sq=$this->db->prepare("SELECT * FROM `candidates_skills` WHERE `candiate_id`=$id");
		$sq->execute();
		return $sq->fetch(PDO::FETCH_ASSOC);
	}
	

}	

$objectJobsDezk = new main();
?>
