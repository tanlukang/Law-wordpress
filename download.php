<?php
$mysql_server_name="localhost"; //数据库服务器名称
$mysql_username="root"; // 连接数据库用户名
$mysql_password="1ncpad"; // 连接数据库密码
$mysql_database="wordpress_avocode"; // 数据库的名字

$conn = mysql_connect($mysql_server_name, $mysql_username,
                        $mysql_password);

if ($conn) {
  $filename = "submit_info.csv";
  $strsql="SELECT * FROM `wp_submit_info`";
  $result=mysql_db_query($mysql_database, $strsql, $conn);
  $row=mysql_fetch_row($result);

  $data = "lastname,firstname,email,phone,date";
  while ($row=mysql_fetch_row($result)) {

      $data = $data."\r\n".$row[1].",".$row[5].",".$row[2].",".$row[3].",".$row[4];
  }
  header("Content-type:text/csv");
  header("Content-Disposition:attachment;filename=".$filename);
  header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
  header('Expires:0');
  header('Pragma:public');
  echo $data;
}
?>
