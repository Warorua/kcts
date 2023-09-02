<?php
if(isset($_SESSION['user_id'])){
  $stmt = $conn->prepare("SELECT * FROM users WHERE id=:user_id");
  $stmt->execute(['user_id'=>$_SESSION['user_id']]);
  $user = $stmt->fetch();

}else{
  $_SESSION['error'] = 'Login first to access the dashboard!';
  header('location: '.__DIR__."/v2/login");
}

//$t_user = $user_client->getUserById($user['t_id']);

if (file_exists('../includes/functions.php')) {
  include_once '../includes/functions.php';
} elseif (file_exists('../../includes/functions.php')) {
  include_once '../../includes/functions.php';
} elseif (file_exists('../../../includes/functions.php')) {
  include_once '../../../includes/functions.php';
}



if (!isset($_GET['bot_id'])) {
  $user_metrics = 100;
  //Warning: Array to string conversion in C:\xamppp\htdocs\twitter\includes\api_config.php on line 395

  if (isset($access_token['oauth_token'])) {
    if ($user['access_token'] == '') {
      $conn = $pdo->open();
      $stmt = $conn->prepare("UPDATE users SET access_token=:access_token, access_secret=:access_secret WHERE id=:id");
      $stmt->execute(['access_token' => $access_token['oauth_token'], 'access_secret' => $access_token['oauth_token_secret'], 'id' => $user['id']]);
    }
  }



  if ($user['p_cipher'] == 0) {
    $user_points = floatval($user['p_value']);
  } else {
    $user_points = floatval(safeDecrypt($user['p_value'], $user['p_key']));
  }

  if ($user['referer_code'] == '') {
    $ref_code = $user['id'] . substr(str_shuffle('123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-'), 0, 12);
    $stmt = $conn->prepare("UPDATE users SET referer_code=:referer_code WHERE id=:id");
    $stmt->execute(['referer_code' => $ref_code, 'id' => $user['id']]);
  }


  $stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM user_earnings WHERE user_id=:user_id");
  $stmt->execute(['user_id'=>$user['id']]);
  $earn_tb = $stmt->fetch();
  if($earn_tb['numrows'] < 1){
    $stmt = $conn->prepare("INSERT INTO user_earnings (user_id) VALUES (:user_id)");
    $stmt->execute(['user_id' => $user['id']]);
  }
}

?>
