<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear una imágen de una galaxia</title>
    <link rel="stylesheet" href="css/estilos2.css">
</head>
<body>
    <header>
        <h1>Crear una imágen de acuerdo al valor del pixel</h1>
        <h2>Código de color: 0: morado 1:black 2:celeste 3:azul 4:verde 5:amarillo 6:rojo</h2>
    </header>
    <main>
   	<?php 
	$foto = array (
array(0, 0, 0, 4, 4, 4, 4, 5, 5, 5, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 5, 4, 4, 0, 0, 0, 0),
array(0, 0, 4, 4, 4, 4, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 5, 4, 4, 0, 0, 0),
array(0, 0, 4, 4, 4, 4, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 5, 4, 4, 0, 0, 0),
array(0, 4, 4, 4, 4, 4, 5, 5, 0, 0, 0, 0, 0, 0, 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 4, 4, 5, 4, 0, 0, 0),
array(0, 4, 4, 4, 4, 4, 0, 0, 0, 0, 4, 4, 4, 4, 4, 5, 5, 4, 4, 0, 0, 0, 0, 0, 0, 4, 4, 5, 4, 0, 0),
array(4, 4, 4, 4, 0, 0, 0, 0, 4, 4, 4, 4, 5, 5, 4, 6, 6, 5, 0, 4, 0, 0, 0, 0, 0, 0, 4, 4, 5, 0, 0),
array(4, 4, 4, 0, 0, 0, 0, 4, 4, 4, 5, 5, 4, 4, 5, 6, 6, 5, 5, 4, 4, 0, 0, 0, 0, 0, 0, 4, 4, 5, 5),
array(4, 4, 4, 0, 0, 0, 0, 4, 4, 5, 5, 4, 4, 4, 4, 4, 4, 4, 4, 5, 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0),
array(4, 4, 0, 0, 0, 0, 4, 5, 4, 4, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 5, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0),
array(4, 4, 0, 0, 0, 0, 4, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 5, 5, 4, 0, 0, 0, 0, 0, 0, 0),
array(4, 4, 0, 0, 0, 4, 5, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 6, 6, 4, 4, 4, 0, 0, 0, 0),
array(4, 4, 0, 0, 4, 5, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 5, 4, 4, 4, 4, 0, 0, 0),
array(4, 4, 0, 0, 5, 4, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 5, 4, 4, 4, 0, 0, 0),
array(4, 4, 0, 0, 4, 4, 5, 0, 0, 0, 0, 0, 0, 3, 3, 3, 3, 0, 0, 0, 0, 0, 0, 0, 4, 5, 6, 4, 4, 0, 0),
array(4, 0, 0, 4, 5, 4, 5, 0, 0, 0, 0, 0, 0, 3, 2, 2, 3, 3, 3, 0, 0, 0, 0, 0, 0, 4, 6, 4, 4, 4, 0),
array(4, 0, 4, 4, 5, 5, 0, 0, 0, 0, 0, 3, 3, 2, 0, 2, 3, 4, 4, 4, 4, 4, 4, 0, 0, 0, 4, 6, 6, 4, 0),
array(4, 0, 4, 4, 5, 5, 0, 0, 0, 0, 0, 2, 2, 2, 0, 0, 2, 3, 4, 4, 4, 4, 4, 4, 0, 0, 0, 4, 4, 4, 4),
array(4, 4, 0, 4, 5, 5, 0, 0, 0, 0, 0, 2, 2, 0, 0, 0, 0, 2, 3, 4, 4, 4, 4, 0, 0, 0, 0, 0, 4, 4, 4),
array(4, 4, 0, 0, 4, 4, 5, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 2, 2, 0, 4, 4, 4, 4, 0, 0, 0, 0, 4, 4, 4),
array(4, 4, 0, 0, 4, 4, 0, 0, 0, 0, 2, 2, 2, 0, 4, 4, 0, 2, 2, 0, 0, 0, 4, 4, 5, 0, 0, 0, 4, 4, 4),
array(4, 4, 0, 0, 4, 4, 4, 0, 0, 0, 3, 3, 2, 0, 4, 4, 0, 0, 2, 0, 0, 0, 0, 4, 5, 4, 0, 0, 4, 4, 4),
array(4, 4, 0, 0, 0, 4, 4, 4, 0, 0, 0, 3, 2, 0, 0, 0, 2, 2, 2, 0, 0, 0, 0, 5, 4, 4, 0, 0, 4, 4, 4),
array(4, 4, 4, 0, 0, 4, 4, 4, 0, 0, 0, 0, 2, 2, 2, 2, 0, 2, 2, 0, 0, 0, 4, 5, 4, 4, 0, 0, 0, 4, 4),
array(4, 4, 4, 0, 0, 0, 4, 4, 0, 0, 0, 0, 0, 3, 3, 2, 2, 2, 0, 0, 0, 0, 5, 4, 4, 4, 0, 0, 0, 4, 4),
array(4, 4, 4, 0, 0, 0, 4, 4, 4, 0, 0, 0, 0, 0, 0, 2, 2, 3, 3, 0, 0, 0, 0, 5, 5, 4, 4, 0, 0, 4, 4),
array(4, 4, 4, 0, 0, 0, 0, 0, 4, 4, 0, 0, 0, 0, 0, 2, 2, 3, 3, 0, 0, 0, 0, 4, 4, 5, 4, 0, 0, 4, 4),
array(4, 4, 4, 4, 0, 0, 0, 0, 4, 4, 0, 0, 0, 0, 0, 5, 5, 4, 4, 0, 0, 0, 0, 4, 4, 4, 4, 0, 4, 4, 4),
array(4, 4, 4, 4, 0, 0, 0, 5, 4, 4, 4, 4, 4, 4, 5, 5, 4, 4, 0, 0, 0, 0, 4, 4, 4, 4, 0, 0, 4, 4, 4),
array(4, 4, 4, 4, 0, 0, 0, 0, 4, 5, 5, 5, 4, 4, 4, 5, 4, 5, 0, 0, 0, 0, 6, 5, 4, 0, 0, 0, 5, 5, 4),
array(0, 5, 4, 4, 4, 0, 0, 0, 0, 4, 4, 5, 5, 5, 4, 0, 0, 0, 0, 0, 0, 4, 6, 5, 4, 0, 0, 0, 4, 5, 4),
array(0, 5, 5, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 5, 6, 6, 5, 0, 0, 0, 0, 4, 5, 4),
array(0, 5, 6, 5, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 6, 5, 5, 4, 0, 0, 0, 0, 4, 5, 6),
array(0, 4, 6, 5, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 6, 5, 5, 0, 0, 0, 0, 4, 4, 5, 6),
array(0, 0, 6, 6, 5, 5, 4, 4, 4, 4, 4, 4, 5, 4, 4, 4, 0, 0, 4, 4, 4, 5, 5, 0, 0, 0, 0, 4, 4, 6, 6),
array(0, 0, 0, 6, 4, 5, 4, 4, 4, 4, 4, 4, 4, 5, 5, 4, 4, 4, 4, 4, 4, 0, 0, 0, 0, 0, 4, 4, 4, 5, 0),
array(0, 0, 0, 0, 6, 5, 4, 4, 5, 4, 4, 4, 4, 5, 5, 4, 4, 4, 4, 0, 0, 0, 0, 0, 0, 5, 5, 4, 4, 0, 0),
array(0, 0, 0, 0, 0, 5, 4, 4, 5, 5, 4, 4, 4, 4, 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 5, 5, 6, 4, 0, 0),
array(0, 0, 0, 0, 0, 0, 0, 0, 4, 5, 4, 0, 0, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 6, 6, 4, 0, 0, 0),
array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 5, 5, 6, 6, 4, 0, 0, 0),
array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 5, 5, 6, 4, 4, 4, 0, 0, 0),
array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 4, 4, 4, 5, 6, 6, 4, 0, 0, 0, 0, 0),
array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 4, 4, 4, 4, 5, 5, 5, 4, 4, 4, 0, 0, 0, 0, 0),
array(0, 0, 0, 0, 0, 0, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 5, 5, 4, 4, 4, 4, 0, 0, 0, 0, 0)
);

        print("<center><table>");
        for($i=0; $i<42; $i++) {
            print("<tr>");
            for($j=0; $j<31; $j++) {
                switch ($foto[$i][$j]){
                    case 0: print("<td class='purple'>".$foto[$i][$j]."</td>");break;
                    case 1: print("<td class='black'>".$foto[$i][$j]."</td>");break;   
                    case 2: print("<td class='ciel'>".$foto[$i][$j]."</td>");break;
                    case 3: print("<td class='blue'>".$foto[$i][$j]."</td>");break;
                    case 4: print("<td class='green'>".$foto[$i][$j]."</td>");break;
                    case 5: print("<td class='yellow'>".$foto[$i][$j]."</td>");break;
                    case 6: print("<td class='red'>".$foto[$i][$j]."</td>");break;
                }
            }
            print('</tr>');
        }
        print("</table></center>");
    	?>
    </main>
    <footer>
    <p>Referencia: Ejercicios de astronomia, ESA/ESO </p>    
    </footer>
</body>
</html>
