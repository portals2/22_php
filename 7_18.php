<?php  
    $seat = array(array(0,0,0,0,0,0,0,0,0,0),
                array(0,0,0,0,0,0,0,0,0,0),
                array(0,0,0,0,0,0,0,0,0,0),
                array(0,0,0,1,0,0,0,0,0,0),
                array(0,0,0,0,0,0,0,0,0,0));

    // echo $seat[1][2]."<br>"; //1표시 방법
    // echo count($seat)."<br>"; //5
    // echo count($seat[0])."<br>"; //10
    // echo "■";
    // echo "□";
    
    //for문으로 0은 빈네모를 1은 찬네모를 출력
    $c = 0;
    for ($i=0; $i < count($seat); $i++){
        for($j=0; $j < count($seat[0]); $j++){
            if($seat[$i][$j] == 1){
                echo "■";
            }
            else{
                echo "□";
                $c++;
            }
        }
        echo "<br>";
    }

    echo (count($seat)*count($seat[0])).'/'.$c;
?>