<h1> carte embarquement</h1>
<h1> vol: {{$vol->num_vol}}</h1>

<?php
$str = $reservation->reference_reservation;

?>



<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(100)->generate($str)) !!} ">



