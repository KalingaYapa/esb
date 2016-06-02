<!DOCTYPE html>
<html>
    <head>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3UiQD6nvmkCL4kVjCYnD74QHXzKPSa_Q&callback=initMap"></script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <style>
            .panel-transparent{

                background: none;
            }
            
            
           

        </style>

    </head>

    <body onload="initialize()" class="col-lg-12" background="we3.jpg">
        <div class="col-md-offset-4">
            <h1 style="color:whitesmoke;"> Geo-Weather Report </h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-5" style="
                     margin-top: 18px;
                     ">
                    <div class="panel  panel-transparent" style="
                         padding-bottom: 8px;
                         padding-left: 5px;
                         border-right-width: 2px;
                         ">
                        <form action="result.php" method="post">

                            <div class="form-group">
                                <br>
                                <div style="
                                     padding-left: 75px;
                                     padding-right: 117px;">
                                    <input type="text" style="color:white;" class = "form-control panel-transparent" name="lat" id="lat" placeholder="Latitude">
                                </div>
                            </div>

                            <div class="form-group">
                                
                                <div class="" style="
                                     padding-left: 75px;
                                     padding-right: 117px;">
                                    <input type="text" style="color:white;" class="form-control panel-transparent" name="lon" id="lon" placeholder="Longtitude">
                                </div>
                            </div>

                            <button type="submit" name="submit" style="width:256px; margin-left: 75px;" class="btn btn-primary panel-transparent">Submit</button>

                        </form>
                    </div>
                </div>
                <div class = "col-md-7">
                    <label style="font-size:10px; color: white;">Right Click on the map & drag to the place you want & get lat and long</label>
                    <div style="height: 500px;">
                        <!-- map -->
                        <div  >
                            <div  class="form-group col-lg-4 col-md-4 col-sm-4" style="padding:0;">
                                <div class="container-fluid" style="padding:0;">
                                    <div id="map-canvas" style="width:420px;height:530px;"></div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script src="googlemap.js"></script>
        <script src="marker.js"></script>
    </body>
</html>
