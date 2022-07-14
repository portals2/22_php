<!-- index.php에서 받은 정보를 처리 -->

<?php 
    echo "이름: ".$_POST['f_name'].$_POST['name']."<br>";
    $name = $_POST["f_name"];
    $name .= $_POST["name"];
    echo "이름 ".$name."<br>";
    echo "<br>";
    
?>
