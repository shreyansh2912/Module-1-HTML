<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="m"  >
<center>
<table border="" width="1032" height="1032">
<?php
$x =0 ;$y = 10;
for ($i=0; $i <8; $i++) 
{ 
    echo  "<tr>";
    for ($j=0; $j <8 ; $j++) 
    {
        $t = $i+$j; 
        if ($t % 2 == 0)              
        {
                echo "<td class = 'b'></td>";
        }
        else
        {
                echo "<td class ='w'> </td>";
        } 
    }       
    echo "</tr>";
}
?> 
</table>
</center>
</body>
</html>

    <style>
     .w{background-color:aliceblue;}
     .b{background-color: black;}
     .m{background-color:darkslategrey;}
    </style>  