<!DOCTYPE html> 
<html> 
<head> 

</head> 
<body>

<?php 

//조회수 저장
    $file_name = "counter.txt"; 
if(file_exists($file_name)){
$fp = fopen($file_name, 'r');
$buffer = fgets($fp,1024);
fclose($fp);
$counter = intval($buffer);
}
else{
$counter = 0;
}
$counter = $counter+1;
$fp = fopen($file_name,'w');
fputs($fp,$counter);
fclose($fp);

//명언 7개 돌려가면서 보여주기
if($counter % 7 == 0){
echo'<p>Seeing is believing </p>';
}
else if($counter % 7 == 1){
echo'<p>You will never know until you try</p>';
}
else if($counter % 7 == 2){
echo'<p>No sweat, no sweet</p>';
}
else if($counter % 7 == 3){
echo'<p>Let bygones be bygones</p>';
}
else if($counter % 7 == 4){
echo'<p>No pain no gain</p>';
}
else if($counter % 7 == 5){
echo'<p>Time is gold</p>';
}
else if($counter % 7 == 6){
echo'<p>Pain past is pleasure</p>';
}

echo '<p>Number of visitors: '.$counter.'</p>';

?> 

<form action="test2.php" method="post">
<table style="border: 0px;">
<tr>
<td>Nickname</td>
<td><input type="text" name="nickname" size="50" maxlength="50" /></td>
</tr>

<tr>
<td>a guest book</td>
<td><input type="text" name="guestbook" size="100" maxlength="100" /></td>
</tr>

<tr>
<td colspan="2" style="text-align: center;"><input type="submit" value="Saving a guest book" /></td>
</tr>

</table>
</body> 
</html> 
