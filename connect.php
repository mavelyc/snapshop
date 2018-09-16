

<!DOCTYPE html>
<html lang="en">
<head>
    
    
       <?php
     
    $maps_url = './aravinstuff/app.json';
    
    $url_2= './aravinstuff/logo.json';
    
    
    
    $maps_json = file_get_contents($maps_url);//for the labels
    $maps_array = json_decode($maps_json, true);
    
    
    
    $url2_json= file_get_contents($url_2);
    $array2 = json_decode($url2_json, true);
    
    
    
    
    $logo = $array2['results']['logoAnnotations'][0]['description'];
    $label_0 = $maps_array['results']['labelAnnotations'][0]['description'];
    $label_1 = $maps_array['results']['labelAnnotations'][1]['description'];
    $label_2 = $maps_array['results']['labelAnnotations'][2]['description'];

    /**
     * Time to make our Instagram api request. We'll build the url using the
     * coordinate values returned by the google maps api
     */
    
    if (!empty($logo)){
    $url = 'https://www.googleapis.com/customsearch/v1?key=AIzaSyCLjLJyT5HgrK7DZOZucPvkA3KRzfxm2GI&cx=005213571837044908416:5_5e-kd0w6i&q='.urlencode($logo).urlencode($label_0);
    $json = file_get_contents($url);
    $array = json_decode($json, true);
    } else {
        $url = 'https://www.googleapis.com/customsearch/v1?key=AIzaSyCLjLJyT5HgrK7DZOZucPvkA3KRzfxm2GI&cx=005213571837044908416:5_5e-kd0w6i&q='.urlencode($label_0).urlencode($label_1);
    $json = file_get_contents($url);
    $array = json_decode($json, true);
    }
    
    

?> 
  
    <meta charset="utf-8"/>
    <title>SnapShop</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="script.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />


    <style>
        body {
            background-image: url("https://nssdata.s3.amazonaws.com/images/galleries/12703/supreme-shop-new-york-nss-mag.jpg");
        }
        </style>
  </head>
  <body>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <div class="container bg-light">
  <center id="results" class="" data-url="<?php if (!empty($url)) echo $url ?>"> <h3>
    <?php
    if (!empty($array)) {
        foreach ($array['items'] as $key => $item) {
            echo "<a href='".$item['link']."'>{$item['title']}</a>";
            echo "<br/>";
        }
    }
    ?>
    </h3>
    </center>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>