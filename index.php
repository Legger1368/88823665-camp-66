<h1>File index.php</h1>

<?php
    $arry = array(1,2,3,4,5);
  //  for($i = 0; $i < sizeof($array); $i++){
?>
    <h1><?php echo $arry[$i]; ?></h1>    
<?php 
   // }    //end for
?>

<?php 
   // $arry = array(1,2,3,4,5,"myindex" => (6));

?>

<?php 
/** FILE index.php */
    $arry = array(1,array(2),3,4,5,"myindex" => (3+3),"myindex" => 7);    
    print_r($arry);
    echo "<br>";
    $arry2[] =  1;
    $arry2[] =  2;
    $arry2[] =  3;
    print_r($arry2);
    echo "<br>";

    if(FALSE){
        echo "if false";
    }elseif(TRUE || FALSE){
        echo "else if true";
    }else{
        echo "else";
    }
    echo "<br>"; 



    $myvar = "Hello World";
    $x = "1";
    echo "<h1>".$myvar."<h1>";
    echo "<br>";
    echo "18" + "1";
    echo "<br>";
    echo "9"."1";
    echo "<br>";
    echo $x++;
    echo $x++;
    echo $x;

?>
<h1><?php echo $myvar; ?></h1>
