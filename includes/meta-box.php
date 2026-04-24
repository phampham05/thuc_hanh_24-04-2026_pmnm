<?php

function sm_add_meta_box() {
    add_meta_box(
        'sm_student_info',
        'Thông tin sinh viên',
        'sm_meta_box_html',
        'sinh_vien'
    );
}
add_action('add_meta_boxes', 'sm_add_meta_box');

function sm_meta_box_html($post) {

    wp_nonce_field('sm_save_data', 'sm_nonce');

    $mssv = get_post_meta($post->ID, 'mssv', true);
    $lop = get_post_meta($post->ID, 'lop', true);
    $ngaysinh = get_post_meta($post->ID, 'ngaysinh', true);
    ?>

    <p>MSSV:</p>
    <input type="text" name="mssv" value="<?php echo esc_attr($mssv); ?>" />

    <p>Lớp:</p>
    <select name="lop">
        <option value="CNTT" <?php selected($lop, 'CNTT'); ?>>CNTT</option>
        <option value="Kinh tế" <?php selected($lop, 'Kinh tế'); ?>>Kinh tế</option>
        <option value="Marketing" <?php selected($lop, 'Marketing'); ?>>Marketing</option>
    </select>

    <p>Ngày sinh:</p>
    <input type="date" name="ngaysinh" value="<?php echo esc_attr($ngaysinh); ?>" />

    <?php
}