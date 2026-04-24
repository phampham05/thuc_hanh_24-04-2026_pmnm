<?php

function sm_register_post_type() {
    register_post_type('sinh_vien', [
        'labels' => [
            'name' => 'Sinh viên',
            'singular_name' => 'Sinh viên',
            'add_new' => 'Thêm sinh viên',
            'add_new_item' => 'Thêm sinh viên mới',
            'edit_item' => 'Sửa sinh viên',
            'new_item' => 'Sinh viên mới',
            'view_item' => 'Xem sinh viên',
            'search_items' => 'Tìm sinh viên',
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor'],
        'menu_icon' => 'dashicons-groups',
        'show_in_rest' => true,
    ]);
}
add_action('init', 'sm_register_post_type');