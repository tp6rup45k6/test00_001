<?php

$N =@$_POST["N_ID"];
$L =@$_POST["N_LV"];

echo "<form method='post'>
<table><tr>
<td><input type='text' Name='N_ID' size='5' maxlength='2' placeholder='成員' value=$N ></td>
<td>
    <select name ='N_LV'>
        <option value=$L >當前$L</option>
        <option value='' >第一版</option>
        <option value='_v2' >第二版</option>
        <option value='_v3' >第三版</option>
        <option value='_v4'>第四版</option>
        <option value='_v5'>第五版</option>
        <option value='_v6'>第六版</option>
    </select>
</td> 
<td><input type='submit' value='送出'></td></tr>
</table></form>";




define("cloth",['a','b','c','d','e','f','g','h']);

for($CS = 1;$CS<50;$CS++){
    if($CS<10)  $CS ='0'.$CS;
        
    echo $CS;    
    for($fuku = 0;$fuku < 8;$fuku++){
        $link_nogikoi = "http://i-nogikoi.gree-pf.net/assets/img/member/story/n{$N}_{$CS}{$L}_".cloth[$fuku].".png";     
        echo "<img src=$link_nogikoi width='160' >";
    }
    echo "<br>";
    
}

?>