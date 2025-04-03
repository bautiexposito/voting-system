<?php $login_type = $this->session->userdata('login_type');?>

<?php include 'css.php';?>
<?php include 'header.php';?>

<?php $this->load->view('backend/' . $login_type . '/' . 'navigation');?>
<?php $this->load->view('backend/' . $login_type . '/' . $page_name);?>

<?php include 'js.php';?>
