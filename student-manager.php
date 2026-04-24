<?php
/*
Plugin Name: Student Manager
Description: Quản lý sinh viên
Version: 1.0
Author: Phạm Thị Phượng
*/

// Không cho truy cập trực tiếp
if (!defined('ABSPATH')) exit;

// Include các file chức năng
require_once plugin_dir_path(__FILE__) . 'includes/cpt.php';
require_once plugin_dir_path(__FILE__) . 'includes/meta-box.php';
require_once plugin_dir_path(__FILE__) . 'includes/save-meta.php';
require_once plugin_dir_path(__FILE__) . 'includes/shortcode.php';