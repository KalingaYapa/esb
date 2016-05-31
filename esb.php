<!DOCTYPE html>
<html>
<head>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3UiQD6nvmkCL4kVjCYnD74QHXzKPSa_Q&callback=initMap"></script>

</head>

<body onload="initialize()">
<form action="result.php" method="post">
  Latitude:<br>
  <input type="text" name="lat" id="lat">
  <br>
  langtitude:<br>
  <input type="text" name="lon" id="lon">

<button type="submit" name ="submit">Submit</button>

</form>


<div style="height: 530px">
                    <!-- map -->
                    <div  >
                        <div  class="form-group col-lg-4 col-md-4 col-sm-4" style="padding:0;">
                            <div class="container-fluid" style="padding:0;">
                                <div id="map-canvas" style="width:420px;height:530px;"></div>

                            </div>
                            <label style="font-size:10px; color: #146BA7;">Right Click on the map & drag to the place you want & get lat and long</label>
                        </div>
                    </div>
</div>

            <script src="googlemap.js"></script>
            <script src="marker.js"></script>
</body>
</html>
