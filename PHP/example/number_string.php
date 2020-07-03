<?php
var_dump(6.1); // 자동으로 정수or실수 할당됨

echo "Hello world"; // print로 웹 브라우저에 출력

// 같은 결과가 출력됨!
echo "1234";
echo 1234;

// 각각 문자와 숫자로 구분되는 것 확인
echo var_dump("1234"); // string(4) "1234"
echo var_dump(1234); // int(1234)


/********** 문자 더하기 **********/

// '.'이 더하기임!
echo "hello"."world";

// 띄어쓰기 추가하기
echo "hello"." "."world";



/*********** ""을 출력하고 싶은 경우 ***********/
// 그는 "안녕하세요" 라고 말했다
echo "그는 "안녕하세요" 라고 말했다"; // error 출력
// 1번 solution - Escaping
echo "그는 \"안녕하세요\" 라고 말했다";
// 2번 solution - ' 문자 활용
echo '그는 "안녕하세요" 라고 말했다';

?>