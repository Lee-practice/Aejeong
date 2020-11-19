<!DOCTYPE html> 
<html> 
<head> 
</head> 
<body>
<?php
$nickname = $_POST['nickname'];
$guestbook = $_POST['guestbook'];
$file_name = "TotalGuestBook.txt"; //방명록이 저장될 파일

//작성한 방명록 저장
$fp = fopen($file_name,'a');

date_default_timezone_set("Asia/Seoul"); //한국 시간으로 설정
$date = date(' H:i, jS F Y');

$output = $date.', ['.$nickname.'] '.$guestbook."\r\n";
fputs($fp, $output);

fclose($fp);

//저장된 전체 방명록 출력하기
$fp = fopen($file_name, 'r');

while (!feof($fp)) {
$order= fgets($fp);
echo htmlspecialchars($order);
echo nl2br("\n");
}
fclose($fp);
?> 


</body> 
</html> 