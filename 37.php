<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>实现背景颜色的改变</title>
</head>

<body>
<?
 print("<html>\n");
 print("<head>\n");
 print("<title>改变背景颜色</title>\n");
 if($inputcolor == "")
 {
	 $inputcolor = "FFFFFF";
 }
 print("<body bgcolor=\"#inputcolor\">\n");
 print("<form action=\"37.php\" method=\"post\">\n");
 print("<b>请填写html颜色代码：</b>");
 print("<input");
 print("type=\"text\"");
 print("name=\"inputcolor\"");
 print("value=\"$inputcolor\">\n");
 print("input");
 print("type=\"submit\"");
 print("name=\"submit_button\"");
 print("value=\"提交颜色\">\n");
 print("</form>\n");
 print("</body>\n");
 print("</html>\n");
?>
</body>
</html>