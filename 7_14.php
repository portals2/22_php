
<html>
<head></head>
<body>
    <form method="POST" action="7_14.php">
        이름 : <input type="text" name="name"/>
        <input type="submit" name="submit"/>
    </form>
</body>
</html>

<?php 
    4번
    for($i = 1; $i <= $_POST["name"]; $i++){
        if($i % 3 == 0 or $i % 5 == 0){
            echo $i." ";
        }
    }

    // 5번
    for($i = 1; $i <= $_POST["name"]; $i++){
        if($i % 3 != 0){
            echo $i." ";
        }
    }
?>


