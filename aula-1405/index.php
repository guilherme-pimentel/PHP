<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>array e lacos</h1>
    <h2>exemplo 1</h2>
    <pre><?php
    $A1 = array ("eu", "euzinho", "eu dnv", "euuu");
    echo "$A1[0] <br>";
    echo "$A1[1] <br>";
    echo "$A1[2] <br>";
    echo "$A1[3] <br>";
    ?></pre>

    <h2>array com for</h2>
    <pre><?php
    $A2 = array ("10", "9", "8", "7");
    echo "$A1[0] <br>";
    echo "$A1[1] <br>";
    echo "$A1[2] <br>";
    echo "$A1[3] <br>";
    ?></pre>

    <h2>impressao com for</h2>

    <pre>
        <?php
        $A3 = array ("10", "9", "8", "7");
        for($a=0; $a<(count($A3)); $a++){
            echo "$A3[$a]";
        }
        ?>
    </pre>

    <h2>impressao com for 2</h2>

    <pre>
        <?php
        $A4 = array ("antonio", "amigo", "aaa", "bbbb");
        for($a=0; $a<(count($A4)); $a++){
            echo "$A4[0]";
        }
        ?>
    </pre>

    <h2>impressao sem for</h2>
    
    <pre>
        <?php
        $x = array ("antonio", "amigo", "aaa", "bbbb");
        foreach($x as $dado){
            echo "$dado";
        }
        ?>
    </pre>

    <h2>array: definição explicita (com chave)</h2>

    <pre>
        <?php
        $var = array(
            "maria" => 25,
            "duda" => 46,
            "dudu" => 54,
            "rosa" => 73,
        );
        foreach ($var as $x) {
            echo "<p>" , $x , "</p>";
        }
        ?>
    </pre>

    <h2>exemplo print</h2>
    <pre>
        <?php
        print($var);
        ?>
    </pre>
    <h2>exemplo</h2>
    <pre>
        <?php 
        $alunos = array("maria" => 
        array("endereco" => "rua 1234<br>",
        "bairro" => "bairro 2234<br>",
        "cidade" => "guanambi"),
   

        "João" =>
        array("endereco" => "rua 23234",
        "bairro" => "bairro 3255"),

        "zeca" =>
        array("endereco" => "rua 2434",
        "bairro" => "3955")
      );  
      print_r($alunos);

      print_r($alunos["maria"]);

      print_r($alunos["maria"]["endereco"] );

      print_r($alunos["maria"]["bairro"] );

      print_r($alunos["maria"]["cidade"] );
      ?> 
</pre>
<h2>exemplo2</h2>
<pre>
<?php 
        $alunos = array("maria" => 
        array("endereco" => "rua 1234<br>",
        "bairro" => "bairro 2234<br>",
        "cidade" => "guanambi"),
   

        "João" =>
        array("endereco" => "rua 23234",
        "bairro" => "bairro 3255",
        "cidade" => "guanambi"),

        "zeca" =>
        array("endereco" => "rua 2434",
        "bairro" => "3955",
        "cidade" => "guanambi")
      );  
       foreach($alunos as $chave => $aux){
        echo $chave. ": <br>";
        foreach($aux as $chave => $valor){
            echo"   - $valor";
        }
       };
      ?> 
</pre>
        
    
</body>
</html>