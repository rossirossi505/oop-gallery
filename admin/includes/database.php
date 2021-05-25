<?php 

require_once("config.php");

class Database {


	public $connection;

	function __construct(){

     $this->open_db_connection();


	}




	public function open_db_connection(){


	// $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;

	$this->connection = new mysqli($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

 

	if($this->connection->connect_errno) {

	die("Database connection failed badly" . $this->connection->connect_error);


			}




		}




	public function query($sql) {

	$result = $this->connection->query($sql);

	$this->confirm_query($result);

	return $result; 


	}

	private function confirm_query($result){


		if(!$result) {

			die("Query Failed" . $this->connection->error);

		}

	}

	public function escape_string($string) {


	 $escaped_string = $this->connection->real_escape_string($string);

	 return $escaped_string;


	}



	public function the_insert_id() {

	return $this->connection->insert_id;

	}





}  // End of Class Database


$database = new Database();



 ?>