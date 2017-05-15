<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>
      Tabuada gerada!
    </title>
    <link rel='stylesheet'
          type='text/css'
          href='estiloSaida2.css'>
    <?php    
      //Obtendo valores do formulário dinamicamente
      foreach ($_POST as $chave => $valor)
        $$chave = $valor;    
    ?>
  </head>
  <body>
    <p>
    <h1>Tabuada de Multiplicação</h1>
    <hr>
    <?php      
      //Montando a(s) tabela(s)
      for ($i = $tabuadaInicio; $i <= $tabuadaFim; $i++) {
        
        echo "<div class=''>" .
             "<table border='1'>".
             "  <caption>Tabuada do " . $i . "</caption>" .
             "  <thead>" .
             "  <tr>" .
             "    <th>Fórmula</th>" .
             "    <th>Valor</th>" .
             "  </tr>" .             
             "  </thead>" .
             "  <tbody>" ;
             
        for ($j = $numeroInicio; $j <= $numeroFim; $j++) {
          
          echo "<tr>" . 
               "  <td>" . $i . " x " . $j . "</td>" .
               "  <td>" . ($i * $j) . "</td>" .
               "</tr>";          
        } 

        echo "  </tbody>" .
             " </table>" .
             " </div>".
             " <br>";
      }
      
    ?>

    </p>

    <p>
    <h1>Tabuada de Adição</h1>
    <hr>
    <?php      
      //Montando a(s) tabela(s)
      for ($i = $tabuadaInicio; $i <= $tabuadaFim; $i++) {
        
        echo "<div class=''>" .
             "<table border='1'>".
             "  <caption>Tabuada do " . $i . "</caption>" .
             "  <thead>" .
             "  <tr>" .
             "    <th>Fórmula</th>" .
             "    <th>Valor</th>" .
             "  </tr>" .             
             "  </thead>" .
             "  <tbody>" ;
             
        for ($j = $numeroInicio; $j <= $numeroFim; $j++) {
          
          echo "<tr>" . 
               "  <td>" . $i . " + " . $j . "</td>" .
               "  <td>" . ($i + $j) . "</td>" .
               "</tr>";          
        } 

        echo "  </tbody>" .
             " </table>" .
             " </div>".
             " <br>";
      }
      
    ?>
    </p>


    <p>
    <h1>Tabuada de Subtração</h1>
    <hr>
    <?php      
      //Montando a(s) tabela(s)
      for ($i = $tabuadaInicio; $i <= $tabuadaFim; $i++) {
        
        echo "<div class=''>" .
             "<table border='1'>".
             "  <caption>Tabuada do " . $i . "</caption>" .
             "  <thead>" .
             "  <tr>" .
             "    <th>Fórmula</th>" .
             "    <th>Valor</th>" .
             "  </tr>" .             
             "  </thead>" .
             "  <tbody>" ;
             
        for ($j = $numeroInicio; $j <= $numeroFim; $j++) {
          
          echo "<tr>" . 
               "  <td>" . $i . " - " . $j . "</td>" .
               "  <td>" . ($i - $j) . "</td>" .
               "</tr>";          
        } 

        echo "  </tbody>" .
             " </table>" .
             " </div>".
             " <br>";
      }
      
    ?>
    </p>



    <p>
    <h1>Tabuada de Divisão</h1>
    <hr>
    <?php      
      //Montando a(s) tabela(s)
      for ($i = $tabuadaInicio; $i <= $tabuadaFim; $i++) {
        
        echo "<div class=''>" .
             "<table border='1'>".
             "  <caption>Tabuada do " . $i . "</caption>" .
             "  <thead>" .
             "  <tr>" .
             "    <th>Fórmula</th>" .
             "    <th>Valor</th>" .
             "  </tr>" .             
             "  </thead>" .
             "  <tbody>" ;
             
        for ($j = $numeroInicio; $j <= $numeroFim; $j++) {
          if ( $j == 0) {
            $msg = "N/A";
          } else {
            $msg = $i / $j;
            $msg = number_format($msg, 2, ',', '.');
            
          }
          
          echo "<tr>" . 
               "  <td>" . $i . " / " . $j . "</td>" .
               "  <td>" . $msg . "</td>" .
               "</tr>";          
        } 

        echo "  </tbody>" .
             " </table>" .
             " </div>".
             " <br>";
      }
      
    ?>
    </p>
  </body>
</html>