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

	//Function End For Company 
	

}	

$objectjda=new main();
?>
