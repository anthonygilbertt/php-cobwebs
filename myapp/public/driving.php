<?php
/* You are driving a little too fast, and a police officer stops you.
   Write code to compute the result, encoded as an int value:
   0=no ticket,
   1=small ticket,
   2=big ticket.
   If speed is 60 or less, the result is 0.
   If speed is between 61 and 80 inclusive, the result is 1.
   If speed is 81 or more, the result is 2.
   Unless it is your birthday -- on that day, your speed can be 5 higher in all cases. 
*/

class SpeedTracker  {

    public function CalculateTicketAmt(int $speed = 0, bool $isBirthday = false): Int {
        $no_ticket = 0;
        $small_ticket = 1;
        $big_ticket = 2;
        $adjusted_speed = $speed;
        
        if($isBirthday){
            $adjusted_speed = $adjusted_speed - 5;
        }
        
        if($adjusted_speed <= 60){
            return $no_ticket;
        }elseif($adjusted_speed >= 61 && $adjusted_speed <= 80){
            return $small_ticket;
        }elseif($adjusted_speed >= 81){
            return $big_ticket;
        }else{
            return $no_ticket;
        }
    }
}

$speed_tracker = new SpeedTracker();
$speed = 81;

echo 'If it was NOT your birthday, you would have: ';
if($speed_tracker->CalculateTicketAmt($speed) == 0){
    echo 'No Ticket'.'<br>';
}elseif($speed_tracker->CalculateTicketAmt($speed) == 1){
    echo 'Small Ticket'.'<br>';
}else{
    echo 'Big Ticket'.'<br>';
}

echo 'If it was your birthday, you would have: ';
$isBirthday = true;

if($speed_tracker->CalculateTicketAmt($speed, $isBirthday) == 0){
    echo 'No Ticket'.'<br>';
}elseif($speed_tracker->CalculateTicketAmt($speed , $isBirthday) == 1){
    echo 'Small Ticket'.'<br>';
}else{
    echo 'Big Ticket'.'<br>';
}