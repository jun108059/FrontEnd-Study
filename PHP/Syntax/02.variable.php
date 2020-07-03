<html>
<body>
<?php
$a = 1;
echo $a + 1; # 2
echo "<br />";
$a = 2;
print $a + 1; # 3

# 변수는 string or number 상관없음
$first = "coding";
echo $first."everybodty";

# 변수 값만 바꿔주면 시간 save
$a = 100;
$a = $a + 10;
print $a.'<br />';
$a = $a / 10;
print $a.'<br />';
$a = $a - 10;
print $a.'<br />';
$a = $a * 10;
print $a.'<br />';

?>
</body>
</html>