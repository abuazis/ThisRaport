<?php

function check_session_akun() {
    $ci =& get_instance();
    $session = $ci->session->userdata('akun_in');
    if ($session != 'akun') {
        redirect('signup');
    }
}

function check_session_one() {
    if (!isset($_POST['username'])) {
        redirect('');
    }
}

function check_session_walas() {
    $ci =& get_instance();
    $session = $ci->session->userdata('walas_in');
    if ($session != 'walas') {
        redirect('signup/walikelas');
    }
}

function check_session_walmur() {
    $ci =& get_instance();
    $session = $ci->session->userdata('walmur_in');
    if($session != 'walmur') {
        redirect('signup/walimurid');
    }
}

function check_session_user_walas() {
    $ci =& get_instance();
    $session = $ci->session->userdata('level');
    if(($session == '') || ($session == 'walimurid')) {
        redirect('');
    }
}

function check_session_user_walmur() {
    $ci =& get_instance();
    $session = $ci->session->userdata('level');
    if(($session == '') || ($session == 'walikelas')) {
        redirect('');
    }
}

function check_walas_walmur() {
    $ci =& get_instance();
    $session = $ci->session->userdata('level');
    if($session != ('walas' || 'walmur')) {
        redirect('');
    } 
}



?>