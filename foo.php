<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8" />
<title>CloudFormationBlog Serverworks</title>
</head>

<body>
<img src="/logo.gif"><br />
このページはEC2インスタンスから配信されています。<br />
<a href="index.html">リンク先のページはCroudFrontから配信されます。</a><br />
<?php
CF_PARAM_RDS_END_POINT
  $user = 'root';
CF_PARAM_RDS_PASSWORD
  $db = 'cf_db';

  $connection = mysql_connect($end_point, $user, $pass) or die('Failed to connect.');
  $rds = mysql_select_db($db, $connection) or die('Failed to select database.');

  $query = 'select now()';
  $result = mysql_query($query, $connection) or die('Failed to execute query.');
  echo sprintf("Time %s", mysql_result($result, 0));
?>
</body>
</html>
