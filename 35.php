<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>创建一个多维数组</title>
</head>

<body>
<?
  $cities = array(
    "华北地区"=>array(
	 "北京市",
	 "天津市",
	 "石家庄"
	 ),
    "西安地区"=>array(
	 "西安",
	 "拉萨"
	 )
	 );
  print("华北地区：".$cities["华北地区"][0]);	 	 
?>
</body>
</html>