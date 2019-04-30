<?php 
	$num = $_POST["numero"];
	$num_entero = (integer) $num;
	$i=1;
	$contar= 365-$num;
	for ($i; $i<=365; $i++)
	{
	    $arr[$i]= $i;
	    
	}
	$find_num = $arr[$num_entero];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
        <h1>Dias restantes para el año nuevo</h1>
         
        <div>
	        <?php    
	        if($find_num >= 1 && $num <=31)
	        {
	        ?>
	            <?php echo "Es Enero faltan ". $contar . " dias para año nuevo"; ?>
	        <?php
	        }
	        ?>
	        <?php
	        if($find_num >= 32 && $num <=60)
	        {
	        ?>
	            <?php echo "Es Febrero faltan ". $contar . " dias para año nuevo"; ?>
	        <?php
	        }
	        ?>
	        <?php
	        if($find_num >= 61 && $num <=92)
	        {
	        ?>
	            <?php echo "Es Marzo faltan ". $contar . " dias para año nuevo"; ?>
	        <?php
	        }
	        ?>
	        <?php
	        if($find_num >= 93 && $num <=123)
	        {
	        ?>
	            <?php echo "Es Abril faltan ". $contar . " dias para año nuevo"; ?>
	        <?php
	        }
	        ?>
	        <?php
	        if($find_num >= 124 && $num <=155)
	        {
	        ?>
	            <?php echo "Es Mayo faltan ". $contar . " dias para año nuevo";?>
	        <?php
	        }
	        ?>
	        <?php
	        if($find_num >= 156 && $num <=186)
	        {
	        ?>
	            <?php echo "Es Junio faltan ". $contar . " dias para año nuevo"; ?>
	        <?php
	        }
	        ?>
	        <?php
	        if($find_num >= 187 && $num <=218)
	        {
	        ?>
	            <?php echo "Es Julio faltan ". $contar . " dias para año nuevo"; ?>
	        <?php
	        }
	        ?>
	        <?php
	        if($find_num >= 219 && $num <=250)
	        {
	        ?>
	            <h1><?php echo "Es Agosto faltan ". $contar . " dias para año nuevo"; ?>
	        <?php
	        }
	        ?>
	        <?php
	        if($find_num >= 251 && $num <=281)
	        {
	        ?>
	            <?php echo "Es Septiembre faltan ". $contar . " dias para año nuevo"; ?>
	        <?php
	        }
	        ?>
	        <?php
	        if($find_num >= 282  && $num <=313)
	        {
	        ?>
	            <?php echo "Es Octubre faltan ". $contar . " dias para año nuevo"; ?>
	        <?php
	        }
	        ?>
	        <?php
	        if($find_num >= 314 && $num <=344)
	        {
	        ?>
	            <?php echo "Es Noviembre faltan ". $contar . " dias para año nuevo"; ?>
	        <?php
	        }
	        ?>
	        <?php
	        if($find_num >= 345 && $num <=365)
	        {
	        ?>
	        <?php
	            if($find_num >= 360 && $find_num <= 365)
	            {
	                ?>
	                <?php echo "Es Diciembre faltan ". $contar . " dias para año nuevo"; ?>
	            <?php
	            }
	            ?>
	        <?php
	        }
	        ?>         
        </div>
 
 </body>
</html>