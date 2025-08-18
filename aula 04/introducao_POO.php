 <?php

 $marca_carro1= "Honda";
 $modelo_carro1= "Civic";
 $ano_carro1= "2016";
 $revisao_carro1= "true";
 $Ndonos_carro1= "2";

$marca_carro2= "BMW";
 $modelo_carro2= "320i";
 $ano_carro2= "2012";
 $revisao_carro2= "false";
 $Ndonos_carro2= "3";

  $marca_carro3= "Fiat";
 $modelo_carro3= "Uno";
 $ano_carro3= "2005";
 $revisao_carro3= "false";
 $Ndonos_carro3= "1";

  $marca_carro4= "Volksvagem";
 $modelo_carro4= "jetta";
 $ano_carro4= "2020";
 $revisao_carro4= "true";
 $Ndonos_carro4= "7";


function revisaofeita($rev) {
    $rev=true;
    return $rev;
}
revisaofeita($revisao_carro3); {
}

function novoDono($qtde_donos) {
    return $qtde_donos+1;
}
novoDono($Ndonos_carro4);