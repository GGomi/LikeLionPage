<?php
  $conn = mysqli_connect('aliseondb.ckrbe4nzcuuc.ap-northeast-2.rds.amazonaws.com', 'hansonmaria', 'ssh1566010', 'aliseonmedia');
  $list = $_POST['check'];
  for($i = 0; $i<count($list); $i++) {
    $num = $list[$i];
    $sql = "UPDATE `vod_queue` SET `state` = '1' WHERE `num` = {$num}";
    $res = $conn->query($sql);
    if($res)
      echo("<h1>Success!!!</h1>");
  }
?>
<a href="page.php">GO BACK</a>

