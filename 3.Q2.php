<?php

function greeting(){

    $timeOfDay = date('a');
    if($timeOfDay == 'am'){
        return 'Good morning, welcome to our site';
    }else{
        return 'Good afternoon, welcome to our site';
    }
    //echo $timeOfDay;
}

function daytime()
{
    $hour = date('e');

    if ($hour >= 20) 
    {
        $greetings = "Good Night";
    } 
    elseif ($hour > 17) 
    {
        $greetings = "Good Evening";
    } 
    elseif ($hour > 11) 
    {
        $greetings = "Good Afternoon";
    } 
    elseif ($hour < 12) 
    {
        $greetings = "Good Morning";
    }

    echo $greetings;
}
daytime(); 

$time = greeting();
echo $time;
?>