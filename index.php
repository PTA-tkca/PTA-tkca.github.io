<!DOCTYPE html>
<html lang="en">
<head>
    <title>calculator</title>
</head>


<body>
    <form action="index.php" method="get">
     <center>  V: <input type="number" name="V"> <br> </center> 
     <center>  %:<input type="number" name="P"> <br>  </center>
        
     <center><input type="radio" value="22" name="P22">22% <br></center>   
     <center> <input type="submit" value="Calcola"> </center>   
        <br><br>
    </form>

<?php
//get var
$V = $_GET["V"];
$P = $_GET["P"];

//calcs

$R = ((float)$V * (float)$P)/100;

//outputs

if (!isset($_GET["P22"])){
    $PURA = (float)$V + (float)$R;
    $K = (float)$V - (float)$R;

    echo '<center>'.'<b>Risultato: </b>'.$R.'<b> ('.$P.'%'.')</b>'.'<br>'.'</center>';
    echo '<center>'.$V.' + '.$R.' = '.$PURA.'<br>'.'</center>';
    echo '<center>'.$V.' - '.$R.' = '.$K;
    

}
else{
    $R22 = ((float)$V * (float)$_GET["P22"])/100;
    $PR = (float)$V - (float)$R22;
    $PC = (float)$V + (float)$R22;
    echo '<center>'.'<b>Risultato: </b>'.$R22.'<b> ('.$_GET["P22"].'%'.')'. '</b>'.'<br>'.'</center>';
    echo '<center>'.$V.' + '.$R22.' = '.$PC.'<br>'.'</center>';
    echo'<center>'. $V.' - '.$R22.' = '.$PR.'</center>';
} 
?>

</body>
</html>


