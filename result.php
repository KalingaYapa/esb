<?php
    //echo "kalinga";
  if (isset($_POST['submit'])) {
    $lat = $_POST['lat'];
    $lon = $_POST['lon'];
   // echo $lat;

    $url = "http://kkyapa-Inspiron-3521:8281/services/SampleProxy2?lat=".$lat."&lon=".$lon."";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
    $result = curl_exec($ch);
    curl_close($ch);

    $array = json_decode($result,true);

echo "city : ";
echo $array['name'];
echo '</br>';
echo 'Longitude :';
echo $array['coord']['lon'];
echo '</br>';
echo 'Latitude :';
echo $array['coord']['lat'];
echo "</br>";
echo "temp : ";
echo $array['main']['temp'];
echo "</br>";
echo "pressure :";
echo $array['main']['pressure'];
echo "</br>";
echo "humidity :";
echo $array['main']['humidity'];



  }
?>
