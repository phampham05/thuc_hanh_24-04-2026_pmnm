<?php

function sm_save_meta($post_id) {

    // Check nonce
    if (!isset($_POST['sm_nonce']) || !wp_verify_nonce($_POST['sm_nonce'], 'sm_save_data')) {
        return;
    }

    // Tránh autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // Lưu MSSV
    if (isset($_POST['mssv'])) {
        update_post_meta($post_id, 'mssv', sanitize_text_field($_POST['mssv']));
    }

    // Lưu lớp
    if (isset($_POST['lop'])) {
        update_post_meta($post_id, 'lop', sanitize_text_field($_POST['lop']));
    }

    // Lưu ngày sinh
    if (isset($_POST['ngaysinh'])) {
        update_post_meta($post_id, 'ngaysinh', sanitize_text_field($_POST['ngaysinh']));
    }
}
add_action('save_post', 'sm_save_meta');