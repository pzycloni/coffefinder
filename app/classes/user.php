<?
	class User {
		private $_permission  	= null,
				$_db			= null,
				$_group			= null,
				$_user_name		= null,
				$_user_email	= null,
				$_table_user	= "user";

		public function __construct() {
			$this->_db = DB::getInstance();
			$this->getInfoAboutUser();
		}

		public function getInfoAboutUser() {
			$this->_db->get(
				"user",
				array(
					Config::get("table/user/username"),
					Config::get("table/user/pass"),
					Config::get("table/user/group"),
					Config::get("table/user/salt"),
					Config::get("table/user/email")
				),
				Config::get("table/user/username") . " = " . Session::get(Config::get("session/session_name"))
			);
			$this->_user_name 	= $this->_db->first(Config::get("table/user/username"));
			$this->_user_email 	= $this->_db->first(Config::get("table/user/email"));
			$this->_group		= $this->_db->first(Config::get("table/user/email"));
		}



		public function signInSystem($username, $password) {
			$salt 		= Hash::salt(Hash::unique());
			$password 	= Hash::make($password, $salt);

			$this->_db->get(
				$this->_table_user,
				array(
					Config::get("table/user/pass"),
					Config::get("table/user/salt")
				),
				Config::get("table/user/username") . " = '{$username}'"
			);

			print_r($this->_db->result());

			$db_salt = $this->_db->first(Config::get("table/user/salt"));
			$db_pass = $this->_db->first(Config::get("table/user/pass"));

			if (!$this->_db->error() && $this->_db->result()) {
				if (strpos(Hash::make($password, $db_salt), $db_pass) === false) {
					// message about error
				} else {

				}
			}

		}
	}
?>