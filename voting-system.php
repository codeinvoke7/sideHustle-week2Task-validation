<?php
$voterAge = 19;
$hasPvc = true;
$voterWard = "020";

if($voterAge < 18){
    echo "Voter is below 18years old";
}else{
    if(!$hasPvc){
    echo "Voter has no pvc";
    }else{
        if($voterWard != "020"){
            echo "Voter is not in ward 020";
        }else{
            echo "Voter is eligible to vote";
        }
    }
}



?>