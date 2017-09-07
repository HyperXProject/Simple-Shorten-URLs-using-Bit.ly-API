<html>
<body>

<!-- Form Start -->
  <form action="" method="post">
  <div class="form-group">
    
    <label>Long URL : </label>
    <input type="text" name="link">	
	
  <input type="submit" name="submit" value="Generate" class="btn btn-warning" />
  
  </form>
  <!-- Form End -->

<!-- Start Functiom Here -->
<?php
if(isset($_POST['submit'])){


$link = $_POST['link'];

$long_url = urlencode($link);

$bitly_login = '';  //Put Your Bitly Login ID  ( Setting > Advanced Setting > API Support )
$bitly_apikey = ''; //Put Your Bitly API Key ( Setting > Advanced Setting > API Support )

$bitly_response = json_decode(file_get_contents("http://api.bit.ly/v3/shorten?login=$bitly_login&apiKey=$bitly_apikey&longUrl=$long_url&format=json"));

$short_url = $bitly_response->data->url;


?>
<!-- End Functiom Here -->

<h2>Your Short Link : <a href="<?php echo $short_url; ?>">Click Here </a></h2>


<?php
}
?>


</body>
</html>