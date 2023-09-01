<?php
if(file_exists('../includes/modals/create_campaign.php')){
	$filePath = '../';
}elseif(file_exists('../../includes/modals/create_campaign.php')){
	$filePath = '../../';
}else{
 $filePath = './';
}

 include $filePath.'includes/modals/create_campaign.php'; 
 include $filePath.'includes/modals/conversion_modal.php' ;
  include $filePath.'includes/modals/two_auth.php';
  include $filePath.'includes/modals/two_auth.php';
