<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de binarios</title>
</head>
<body>
    <form>
        <label> Numero binario: </label>
        <input type="text" name="num">
        <input type="submit" value="Enviar" onkeyup="binario(this.value)" id="hola">
    </form>
    <script>
        function scr() {
            window.location.href = window.location.href + "#scr";
        }
    </script>

    <?php
            if (isset($_GET["num"])) {
                $num = $_GET["num"];
                $valido = true;
                for ($i=0; $i < strlen($num); $i++) {
                    if ($num[$i]!= "1" and $num[$i]!="0"){
                        $valido = false;
                    }
                }
                if ($valido == true){
                    echo '<div id="por">';
                    echo '<p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg>   El número en formato decimal es: '. bindec($num)."</p>";
                    echo '<p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>  El número en formato hexadecimal es: '. strtoupper(dechex(bindec($num)))."</p>";
            echo "</div>";
                        }else{
                            echo "<p><strong>ERROR</strong> El número introducido no cumple con el formato binario</p>";
                        }
                    } 
    ?>  
</body>
</html>