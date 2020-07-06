<html>
<body>
<?php
# i의 값으로 0을 할당 한다.
$i = 0;
# 종료 조건 - i의 값이 5보다 작으면 true, 같거나 크다면 false
while($i < 5) {
    echo "> $i 번째 실행 Coding Everybody - While loop test \n<br />";
    # 반복문이 실행될 때마다 i의 값이 1씩 증가됨
    # i의 값이 5가되면 종료
    $i += 1;
}

echo "\n for Loop Test\n<br />";

for($k = 0; $k < 5; $k++){
    echo "> 안녕 $k 번째 for loop \n<br />";
    if($k === 3) {
        echo "***** {$k} 번째에서 탈출! *****<br />";
        break;
    }
}
?>
</body>
</html>
