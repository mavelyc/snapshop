<?php
if(!empty($_GET['location']){
    $maps_url = 'https://maps.googleapis.com/maps/api/geocode/json?address='. urlencode($_GET['location']);

    $maps_json = file_get_contents($maps_url);
    $maps_array = json_decode($maps_json,true);

    $logo = $maps_array['results'][0]['geometry']['location']['lat']
    $description = $maps_array['results'][0]['geometry']['location']['lng']

    $google_search = 'https://www.googleapis.com/customsearch/v1?key=AIzaSyB5UrKLWTvJMk3U2yW_gXdoYpxZ35BHuIE&cx=005213571837044908416:5_5e-kd0w6i&q='.$logo;

    $google_json = file_get_contents($igoogle_search);
    $google_array = json_decode($google_json, true);
}
?>












<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>geogram</title>
</head>
<body>
    <form action="">
        <input type="text" name="location"/>
        <button type="submit">submit</button>
    </form>
</body>
</html>