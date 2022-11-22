<?php

if($nilai_prob_low > $nilai_prob_moderate ){
		if($nilai_prob_low > $nilai_prob_high){
			$prediksi = 'LOW';
			if($al == $prediksi){
				$valid="Benar";
			}else{
				$valid="Salah";
			}
		}
	}else if($nilai_prob_moderate > $nilai_prob_low){
		if($nilai_prob_moderate > $nilai_prob_high){
			$prediksi = 'MODERATE';
			if($al==$prediksi){
				$valid="Benar";
			}else{
				$valid="Salah";
			}
		}
	}

    $favcolor = "red";

switch ($al) {
    case "low":
        if($nilai_prob_low > $nilai_prob_moderate ){
            if($nilai_prob_low > $nilai_prob_high){
                $prediksi='LOW';
                if($al==$prediksi){
                    $valid='Benar';
                }else{
                    $valid='Salah';
                }
            }
        }
        break;
    case "moderate":
    if($nilai_prob_moderate > $nilai_prob_low ){
		if($nilai_prob_moderate > $nilai_prob_high){
            $prediksi='MODERATE';
            if($al==$prediksi){
                $valid='Benar';
            }else{
                $valid='Salah';
            }
        }
    }
    break;
    case "high":
    if($nilai_prob_high > $nilai_prob_low ){
		if($nilai_prob_high > $nilai_prob_moderate){
            $prediksi='HIGH';
            if($al==$prediksi){
                $valid='Benar';
            }else{
                $valid='Salah';
            }
        }
    }
    break;
}

?>