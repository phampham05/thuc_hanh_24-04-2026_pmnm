<?php

function sm_shortcode() {

    $args = [
        'post_type' => 'sinh_vien',
        'posts_per_page' => -1
    ];

    $query = new WP_Query($args);

    $output = '<table border="1">';
    $output .= '<tr>
        <th>STT</th>
        <th>MSSV</th>
        <th>Họ tên</th>
        <th>Lớp</th>
        <th>Ngày sinh</th>
    </tr>';

    $i = 1;

    while ($query->have_posts()) {
        $query->the_post();

        $mssv = get_post_meta(get_the_ID(), 'mssv', true);
        $lop = get_post_meta(get_the_ID(), 'lop', true);
        $ngaysinh = get_post_meta(get_the_ID(), 'ngaysinh', true);

        $output .= '<tr>';
        $output .= '<td>' . $i++ . '</td>';
        $output .= '<td>' . esc_html($mssv) . '</td>';
        $output .= '<td>' . get_the_title() . '</td>';
        $output .= '<td>' . esc_html($lop) . '</td>';
        $output .= '<td>' . esc_html($ngaysinh) . '</td>';
        $output .= '</tr>';
    }

    wp_reset_postdata();

    $output .= '</table>';

    return $output;
}

add_shortcode('danh_sach_sinh_vien', 'sm_shortcode');