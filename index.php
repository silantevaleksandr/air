<?php

$page=<<<EOF
<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Форма регистрации</title>
    <link rel="stylesheet" href="style.css">
</head>
  <body>
    <form method="GET" action="Main.php">
      <button type="submit">Отправить</button>
    </form>
  </body>
  </html>
EOF;
echo $page;
//$path="C:\\Program Files\\wkhtmltopdf\\bin\\";
//$path="C:\\OpenServer\\domains\\air\\";
//$htmlTemplate="Form";
/*$handle = fopen($path.$pdfTemplate, "rd");
$content= fread($handle, filesize($path.$pdfTemplate));
fclose($handle);
$content=bin2hex($content);
echo $content*/;

/*

//file_get_contents($path.$htmlTemplate.'.html');
//$fp=fopen($path.$htmlTemplate.'.pdf','w');
exec('"C:/Program Files/wkhtmltopdf/bin/wkhtmltopdf.exe" --margin-top 0mm --margin-bottom 0mm
--margin-left 0mm --margin-right 0mm '.escapeshellarg($path.$htmlTemplate.'.html ').escapeshellarg($path.$htmlTemplate.'.pdf'));

//fclose($fp);
//if(file_exists($path.$htmlTemplate.'.pdf'))
//  echo $path.$htmlTemplate.'.pdf';

//if (file_exists($path.$htmlTemplate.'.pdf')) {

  $file = $path.$htmlTemplate.'.pdf';
  header("Content-type: application/pdf");
  header("Content-Disposition: filename=123");
  readfile($file);
//}
exit;
*/
?>
