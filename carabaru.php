<?php
$low='4';
$moderate='5';
$high='1';
$al;
$prediksi="low";

    function hasil(){
        global $low;
        global $moderate;
        global $high;
        global $al;
        if($low > $moderate && $low > $high){
            $al="low";
            echo'low';
        }else if($moderate > $low && $moderate >$high){
            $al="moderate";
            echo'moderate';
        }else{
            $al="high";
            echo'high';
        }
    }
    hasil();
    if ($prediksi==$al){
        echo 'BENAR';
    }else{
        echo 'SALAH';
    }
  
    
?>