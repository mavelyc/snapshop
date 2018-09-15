<?php
     
    $maps_url = 'http://localhost:8001/application/json'
    $maps_json = file_get_contents($maps_url);
    $maps_array = json_decode($maps_json, true);
    $logo = $maps_array['results'][0]['logoAnnotations'][0]['description']
    $label_0 = $maps_array['results'][0]['labelAnnotations'][0]['description']
    $label_1 = $maps_array['results'][0]['labelAnnotations'][1]['description']
    $label_2 = $maps_array['results'][0]['labelAnnotations'][2]['description']
    /**
     * Time to make our Instagram api request. We'll build the url using the
     * coordinate values returned by the google maps api
     */
    $url = 'https://www.googleapis.com/customsearch/v1?key=AIzaSyB5UrKLWTvJMk3U2yW_gXdoYpxZ35BHuIE&cx=005213571837044908416:5_5e-kd0w6i&q='. $logo; //replace "CLIENT-ID"
    $json = file_get_contents($url);
    $array = json_decode($json, true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>SnapShop</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
<div id="results" data-url="<?php if (!empty($url)) echo $url ?>">
    <?php
    if (!empty($array)) {
        foreach ($array['data'] as $key => $item) {
            echo '<img id="' . $item['id'] . '" src="' . $item['images']['low_resolution']['url'] . '" alt=""/><br/>';
        }
    }
    ?>
</div>
</body>
</html>