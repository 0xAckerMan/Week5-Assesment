<?php
/**
 * @package Myassessment
 */

namespace Inc\Pages;

class RegisterMember{
    public function register(){
        $this->create_table_to_db();
        $this->add_member_to_db();
    }

    function create_table_to_db(){
        global $wpdb;

        $table_name = $wpdb->prefix.'members';

        $member_details = "CREATE TABLE IF NOT EXISTS ".$table_name."(
            name text NOT NULL,
            phone text NOT NULL,
            email text NOT NULL
        );";

        require_once(ABSPATH.'wp-admin/includes/upgrade.php');
        dbDelta($member_details);
    }

    function add_member_to_db(){
        if(isset($_POST['submit'])){
            $data =[
                'name'=> $_POST['name'],
                'phone'=> $_POST['phone'],
                'email'=> $_POST['email']
            ];

            global $wpdb;
            global $successmessage;
            global $errormessage;

            $successmessage = false;
            $errormessage = false;

            $table_name = $wpdb->prefix.'members';

            $result = $wpdb->insert($table_name, $data);

            if($result == true){
                $successmessage = true;
                echo "<script> alert('Registered successfully to cohort'); </script>";
            }else{
                $errormessage = true;
                echo "<script> alert('Unable to Register you'); </script>";
            }
        }
    }
}