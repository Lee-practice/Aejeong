<!DOCTYPE html> 
<html> 
<head> 
</head> 
<body>
<?php
$nickname = $_POST['nickname'];
$guestbook = $_POST['guestbook'];
$file_name = "TotalGuestBook.txt"; //������ ����� ����

//�ۼ��� ���� ����
$fp = fopen($file_name,'a');

date_default_timezone_set("Asia/Seoul"); //�ѱ� �ð����� ����
$date = date(' H:i, jS F Y');

$output = $date.', ['.$nickname.'] '.$guestbook."\r\n";
fputs($fp, $output);

fclose($fp);

//����� ��ü ���� ����ϱ�
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