<?php
include_once 'lib/Database.php';

/**
 * Login Class
 */
class Login {
    private $db;

    public function __construct() {
        $this->db = new Database();

    }

    public function checkDuplicate($email) {
        $query = "SELECT * FROM user_signup WHERE user_email='$email'";
        $result = $this->db->select($query);
        if ($result != false) {
            return true;
        } else {
            return false;
        }
    }
}

?>