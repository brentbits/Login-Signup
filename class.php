<?php 
    class MyApp
    {
        private $server = "mysql:host=localhost;dbname=jobseekerapp";
        private $user = "root";
        private $pass = "preciousangel24";
        private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
        protected $con;

        public function openConnection(){
            try{
    
                $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);
                return $this->con;
    
            }catch(PDOException $e){
                echo "There is a problem in the connection :". $e->getMessage();
            }
        }
        public function closeConnection(){
            $this->con = null;
        }
        public function getUsers(){
            $connection = $this->openConnection();
            $stmt = $connection->prepare("SELECT * FROM user_login");
            $stmt->execute();
            $users = $stmt->fetchAll();
            $userCount = $stmt->rowCount();
    
            if($userCount > 0){
                return $users;
            }else{
                return 0;
            }
        }
        public function signin()
        {

            if(isset($_POST['submit']))
            {
            
                $password = md5($_POST['password']);
                $username = $_POST['email'];
               

                $connection = $this->openConnection();
                $stmt = $connection->prepare("SELECT * FROM user_login WHERE email = ? AND password = ?");
                
                $stmt->execute([$username,$password]);
                $user = $stmt->fetch();
                $total = $stmt->rowCount();


                            
                if($total > 0){
                    echo "Welcome ".$user['first_name']." ".$user['last_name'];
                    $this->set_userdata($user);
                    
                    if($user['usertype'] == "applicant"){
                        echo "You Log in as ".$user['usertype'];
                        header("Location: applicant.php");
                    }
                    if($user['usertype'] == "employee"){
                        echo "You Log in as ".$user['usertype'];
                        header("Location: employee.php");
                    }
                    
                }else{
                    echo "Login Failed! invalid password or email";
                }
            }
        }
        public function set_userdata($array)
        {
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['userdata'] = array(
                    "fullname" => $array['first_name']." ".$array['last_name'],
                    "usertype" => $array['usertype']
                    
            );
            return $_SESSION['userdata'];
        }
        public function get_userdata()
        {
            if(!isset($_SESSION)){
                session_start();
            }
            if(isset($_SESSION['userdata'])){
                return $_SESSION['userdata'];
            }else{
                return null;
            }
           
        }
        public function logout()
        {
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['userdata'] = null;
            unset($_SESSION['userdata']);
        }
        public function check_user_exist($email)
        {
            $connection = $this->openConnection();
            $stmt = $connection->prepare("SELECT * FROM user_login WHERE email = ?");
            $stmt->execute([$email]);
            $total = $stmt->rowCount();

            return $total;
        }
        public function signup()
        {

            if(isset($_POST['add'])){

                $fname = $_POST['first_name'];
                $lname = $_POST['last_name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $password = md5($_POST['password']);
                $usertype = $_POST['usertype'];
               
                if($this->check_user_exist($email)==0){
                    $connection = $this->openConnection();
                    $stmt = $connection->prepare("INSERT INTO user_login (`first_name`,`last_name`,`email`,`phone`,`password`,`usertype`)VALUES(?,?,?,?,?,?)");
                    $stmt->execute([$fname,$lname,$email,$phone,$password,$usertype]);
                   
                }else{
                    echo "Users Already exist!";
                }  
            }
        }

    }
     $App = new MyApp();  

?>