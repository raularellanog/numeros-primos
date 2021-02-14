<?php
  if (isset ($_POST['submit'])) {
    $n=$_POST['numero'];
    switch(primo($n)){//verifica en caso se encuentra el valor 
        case 'true':
            $dato='El número '.$n.' es primo';
            $alert='alert-success';
            break;
        case 'false':
            $dato='El número '.$n.' NO es primo';
            $alert='alert-warning';
            break;
        case 'falso':
            $dato='Es un caracter. Ingresa un número';
            $alert='alert-danger';
            break;
        default: 
            $dato='Introduce otro valor';
            $alert='alert-danger';
            break;
      }
  }else{$dato='';
    $alert='alert-light';
  }
  
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Código css en misma página para no enviar dos acrvhivos -->
    <style>
      *{
        padding: 0px;
        margin: 0px;
        font-size: 16px;
      }
      h1,.msj{
        text-align: center;
      }
    </style>
    <title>Tare 3 </title>
  </head>
  <body>
    <div class="container">
      <h1>Tarea 3 <br> <span>Raul Robeto Arellano Guevara</span> </h1>
      <!-- parte para la entrada de número -->
      <div class="row py-3">
        <div class="col-md-6 mx-auto">
        <form class="form-inline" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
          <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Introduce algún número:(entero>0)</label>
          <input type="text" class="form-control" name="numero" placeholder="Número"><!-- entrada para número -->
          <div class="d-grid gap-2 py-1">
          <button type="submit" class="btn btn-primary py-1" name="submit">Generar</button><!--envia el número  -->
          </div>
          </form>
        </div>
        <div class="row">
            <div class="col-md-4 mx-auto py-1">
              <div class="alert <?=$alert; ?> msj" role="alert">
                  <?=$dato; ?>
              </div>
            </div>
        </div>
      </div>
    </div>
      <!--función numero primo  -->
    <?php
        function primo($numero){
            if(is_numeric($numero)){//verifica si el dato es un número
                $bool='true';
                $numero=round(abs($numero));//valor absoluto y redondeo de número 
                if($numero>1){//el dato ya es divicible con 1 y con el mismo
                  for($i=2;$i<$numero;$i++){
                    if(($numero%$i)==0){//si el residuo de la divicion con otro número es cero no es primo
                        $bool='false';
                        break;
                    }
                  }
                return $bool;
                }
            }else{
                return 'falso';
            }
        }
    ?>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>