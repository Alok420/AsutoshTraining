<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
</head>

<body>
<h1>

    <?php
    // $a=23;
    // $b=5453;
    // echo "<br>".($a<$b);
    // echo "<br>".($a>$b);
    // echo "<br>".($a<=$b);
    // echo "<br>".($a>=$b);
    // echo "<br>".($a!=$b);
    // echo "<br>".($a==$b);
    
    
    //global variabler
    $w=456;

    if($w>4000){
        $ia=887876;
        echo "We will go to taaj";
    }else{
        echo "We will go to mac D";
    }
    function abc(){
        //local variabler
        $c=498;
    
    }

    echo $c;
    echo $ia;
    

    
    
// <!-- -----------------------variable variable -->
$a = 'hello';
$$a = 'world';

echo "$a ${$a}";
echo "$a $hello";
//------------------------------------------constants 
define("SITE","BITSINFOTEC.IN");
echo "<br>".SITE;
?>
</h1>

</body>

</html>