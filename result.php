<?php
//echo "kalinga";
if (isset($_POST['submit'])) {
    $lat = $_POST['lat'];
    $lon = $_POST['lon'];
    // echo $lat;

    $url = "http://kkyapa-Inspiron-3521:8281/services/SampleProxy2?lat=" . $lat . "&lon=" . $lon . "";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $result = curl_exec($ch);
    curl_close($ch);

    $array = json_decode($result, true);
}
?>
<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <style>
            .panel-transparent{

                background: none;
            }

        </style>


    </head>

    <body  class="col-lg-12 col-md-offset-2 " background="we3.jpg">
        <div class="col-md-6 col-md-offset-2" >
            <div class="panel panel-default panel-transparent" style="
                 margin-top: 77px;
                 margin-left: 50px;
                 margin-right: 10px;
                 ">
                <div class="panel-body" style="
                     width: 470px;
                     height: 350px;
                     ">

                    <div class="col-md-offset-2">

                        <h1 style="color: whitesmoke">Geo-Weather Report</h1>
                    </div>
                    <div class="col-md-offset-2">
                        <label for="city" style="color: white;font-size: 20px;"> City : </label>
                        
                            <lable class="col-md-offset-2" for="cityValue" style="color: #0599fe;font-size: 20px;"><?php echo $array['name']; ?></lable><br>
                       
                        

                        <lable for="lon" style="color: white;font-size: 20px;">Longitude : </lable> 
                        <lable for="lon"  class="col-md-offset-1" style="color: #0599fe;font-size: 20px;"><?php echo $array['coord']['lon']; ?></lable><br>

                        <label for="lat" style="color: white;font-size: 20px;"> Latitude : </label>
                        <lable for="lat"  class="col-md-offset-1" style="color: #0599fe;font-size: 20px;"><?php echo $array['coord']['lat']; ?></lable><br>

                        <label for="Temp" style="color: white;font-size: 20px;"> Temp : </label>
                        <lable for="Temp" class="col-md-offset-2" style="color: #0599fe;font-size: 20px;"><?php echo $array['main']['temp']; ?></lable><br>

                        <label for="pres" style="color: white;font-size: 20px;"> Pressure : </label>
                        <lable for="pres" class="col-md-offset-1" style="color: #0599fe;font-size: 20px;"><?php echo $array['main']['pressure']; ?></lable><br>

                        <label for="humidity" style="color: white;font-size: 20px;"> Humidity : </label>
                        <lable for="humidity" class="col-md-offset-1" style="color: #0599fe;font-size: 20px;"><?php echo $array['main']['humidity']; ?></lable><br>


                    </div>

                </div>

            </div>
        </div>


    </body>



