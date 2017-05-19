<?php
  $conn = mysqli_connect('aliseondb.ckrbe4nzcuuc.ap-northeast-2.rds.amazonaws.com', 'hansonmaria', 'ssh1566010', 'aliseonmedia');
  $getlist_sql = "SELECT *from vod_queue";
  $result_get= $conn->query($getlist_sql);
  //$sql = "UPDATE vod_queue SET state = 1 WHERE vod_name = 'sexvod';
?>

