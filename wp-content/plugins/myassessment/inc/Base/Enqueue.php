<?php

namespace Inc\Base;

/**
 * @package Myassessment
 */

class Enqueue{


    public function register(){
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }

    function enqueue(){

        //enqueue for my scripts
        
        wp_enqueue_style('mypluginstyle', PLUGIN_URL . 'assets/mystyle.css');
        wp_enqueue_script('mypluginscript', PLUGIN_URL .'/assets/myscript.js');
    }
}