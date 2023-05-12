<?php

namespace Inc\Pages;

/**
 * @package Myassessment
 */

class Admin{


    public function register(){
        add_action('admin_menu', array($this, 'add_admin_pages'));
        add_action('admin_menu', array($this, 'view_members_pages'));
    }

    public function add_admin_pages(){
      add_menu_page('Kores Plugin', 'CohortReg', 'manage_options', 'myassessment', array($this, 'admin_index'), 'dashicons-welcome-write-blog', 110);
    }

    public function admin_index(){
      require_once PLUGIN_PATH.'templates/admin.php';
    }

    public function view_members_pages(){
      add_menu_page('Kores Plugin', 'All Members', 'manage_options', 'members', array($this, 'view_index'), 'dashicons-welcome-write-blog', 110);
    }

    public function view_index(){
      require_once PLUGIN_PATH.'templates/view.php';
    }
}
