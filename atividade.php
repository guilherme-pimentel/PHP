<?php
    $varAluno = array("Fabio", "Guilherme", "Biel");
    $varIdade = array("Fabio" => 30, "Guilherme" => 17, "Raifran" => 18);
    $varEnd = array("Fabio" => "Rua1", "Guilherme" => "RuaY", "Biel" => "RuaZ");
    $varCid = array("Fabio" => "Guanambi", "Guilherme" => "Guanambi", "Biel" => "Pesqueiro");
    $varEst = array("Fabio" => "Bahia", "Guilherme" => "Bahia", "Biel" => "Bahia");
    $varCPF = array("Fabio" => 12, "Guilherme" => 13, "Biel" => 98);

    echo "$varAluno[0] tem $varIdade[Fabio] anos de idade. Reside em $varEnd[Fabio], $varCid[Fabio], $varEst[Fabio]. CPF: $varCPF[Fabio]<br>";
    echo "$varAluno[1] tem $varIdade[Guilherme] anos de idade. Reside em $varEnd[Guilherme], $varCid[Guilherme], $varEst[Guilherme]. CPF: $varCPF[Guilherme]<br>";
    echo "$varAluno[2] tem $varIdade[Biel] anos de idade. Reside em $varEnd[Biel], $varCid[Biel], $varEst[Biel]. CPF: $varCPF[Biel]<br>";
    
    echo "<br>";

    $varPro = array("P" => "Nome");
    $varIdadeP = array("P" => "IdadeP");
    $varEndP = array("P" => "EndP");
    $varCidP = array("P" => "CidP");
    $varEstP = array("P" => "EstP");
    $varCPFP = array("P" => "CPFP");

    echo "Aqui será armazenado o  $varPro[P], $varIdadeP[P], $varEndP[P], $varCidP[P], $varEstP[P], $varCPFP[P]<br>";
?>