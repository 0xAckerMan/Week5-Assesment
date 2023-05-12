<?php

namespace Inc\Pages;

/**
 * @package Myassessment
 */

class Admin{


    public function register(){
        add_action('admin_menu', array($this, 'add_admin_pages'));
    }

    public function add_admin_pages(){
      add_menu_page('Kores Plugin', 'CohortReg', 'manage_options', 'myassessment', array($this, 'admin_index'), 'dashicons-welcome-write-blog', 110);
    }

    public function admin_index(){
      require_once PLUGIN_PATH.'templates/admin.php';
    }
}
