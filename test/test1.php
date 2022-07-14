<!-- 이 파일에 접속하는 주소 -->
<!-- http://localhost/test/test1.php  -->

<?php
    $name = 'name';
    echo $name;
    echo "<br>";
    $user = $name;
    echo $user;
?>

<?php 
     echo "<br>";
     echo "<br>";
    $a = array(array('x1','x2','x3'),
                array('y1','y2','y3'),
                array('z1','z2','z3'));
    echo $a[1][1];
?>

<?php
    echo "<br>";
    echo "<br>";
    $j = 2;
    echo $j / 1;
    echo"<br>";
    echo $j % 1;
    echo"<br>";
?>

<!-- html과 php의 활용 -->
<html>
    <head></head>
    <body>
        <form method="POST" action="test1.php">
            이름 : <input type="text" name="name"/>
            성 : <input type="text" name="f_name"/>
            <input type="submit" name="submit"/>
        </form>
        <?php 
            echo "이름: ".$_POST['f_name'].$_POST['name']."<br>";
            $name = $_POST["f_name"];
            $name .= $_POST["name"];
            echo "이름 ".$name."<br>";
            echo "<br>";
        ?>
    </body>
</html>

<!-- 다중 라인 echo문을 여러번 쓰는것을 줄여준다. -->
<?php 
// 함수로 다중라인
    $out = <<<_END
    asd

    asd
    asd
    asd

    asd
    _END;
    echo $out;
    echo "<br>";

// echo로 직접 다중라인
    echo <<<_END
    asd
    asd
    _END;
    echo "<br>";
    echo "<br>";

?>

<?php 
    $num = 13245 * 12345;
    echo $num;
    echo "<br>";
    echo substr($num, 3, 1);
    echo "<br>";

    $pi = '3.141592';
    $r = 5;
    echo $pi * ($r * $r);
?>

<!-- date함수의 설명 -->
<!-- //offbyone.tistory.com/38 -->
<?php 
    echo "<br>";
    echo "<br>";
    function longdate($time){
        return date("l F jS Y", $time);
    }
    echo longdate(time());
    echo "<br>".time();
?>
