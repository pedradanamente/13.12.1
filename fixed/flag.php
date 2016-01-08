<?php

/* Gira condicao e da valor a flag */
if($rank_daimyo==0){
$rank_flag=null;
$rank_range=0;
}
if($rank_clan!=$clan){
$rank_flag='
<img width="15px" height="20px" src="images/flag-inrange.png" title="Ataque disponível"/>
';
$rank_range=1;
}
if( ($rank_posicao>$posicao+100) or ($rank_posicao<$posicao-100) ){
$rank_flag='
<img width="15px" height="20px" src="images/flag-outrange.png" title="Fora do range de ataque"/>
';	
$rank_range=0;
}
if($rank_clan==$clan){
$rank_flag='
<img width="15px" height="20px" src="images/flag-ally.png" title="Aliado"/>
';	
$rank_range=0;
}
if($rank_feudo==$feudo){
$rank_flag='

';	
$rank_range=0;
}
if($class_number=="rank-feudo-1"){
$rank_flag='
<img width="15px" height="15px" src="images/flag-locked.png" title="Bloqueado"/>
';	
$rank_range=0;
}

?>