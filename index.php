<?php echo 'hello world!<br>'; ?>

<?php
    $myca = 1;
    $myst= 'hello';
    $mtya = array('one','tow');

    echo "$myst<br>";
    echo "$myca<br>";
    echo "$mtya[0]<br>";
?>

<!-- join이라는 다른 웹사이트로 정보를 전달 -->
<html>
    <head></head>
    <body>
        <form method="POST" action="join.php">
            이름 : <input type="text" name="name"/>
            성 : <input type="text" name="f_name"/>
            <input type="submit" name="submit"/>
        </form>
    </body>
</html>

<html>
    <head></head>
    <body>
        <form method="POST" action="index.php">
            이름 : <input type="text" name="asd"/>
            <input type="submit" name="submit"/>
        </form>
        <?php 
            if(strlen($_POST['asd'])<9){
                echo "ssss";
                }
            else{
                echo 'good';
            }
        ?>
    </body>
</html>

<html>
    <head></head>
    <body>
        <form method="POST" action="index.php">
            이1름 : <input type="text" name="num1"/>
            이2름 : <input type="text" name="num2"/>
            이3름 : <input type="text" name="num3"/>
            이4름 : <input type="text" name="num4"/>
            이5름 : <input type="text" name="num5"/>
            이6름 : <input type="text" name="num6"/>
            <input type="submit" name="submit"/>
        </form>
        <?php
            $r_num1 = rand(0, 45);
            $r_num2 = rand(0, 45);
            $r_num3 = rand(0, 45);
            $r_num4 = rand(0, 45);
            $r_num5 = rand(0, 45);
            $r_num6 = rand(0, 45);
            
            // $arr_num = array($r_num1, $r_num2, $r_num3, $r_num4, $r_num5, $r_num6);
            $arr_num = array(1,1,1,1,1,1);
            
            for($i=0; $i<7; $i++){
                switch($arr_num[$i]){
                    case $_POST['num1']:
                        echo 'err';
                        break;
                    case $_POST['num2']:
                        echo 'err';
                        break;
                    case $_POST['num3']:
                        echo 'err';
                        break;
                    case $_POST['num4']:
                        echo 'err';
                        break;
                    case $_POST['num5']:
                        echo 'err';
                        break;
                    case $_POST['num6']:
                        echo 'err';
                        break;
                    default:
                        echo "실행";
                        break;
                }
            }
        ?>
    </body>
</html>
