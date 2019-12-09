<?php require_once ("templates/top.php");
$query="SELECT * FROM maintexts WHERE url ='".$_GET['url']."'";
$result = mysqli_query($link,$query);
if(!$result){
    exit($query);
}
$arr = mysqli_fetch_array($result);
?>
<h2><?php echo $arr['name'];?></h2>
<?php echo $arr['body'];?>
<?php include((isset($_GET['md']))? $_GET['md'] :'readme.md');
?>

<?php require_once ("templates/bottom.php");
?>
<!-- <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script> 
$("a").attr("href","http://site.com");
</script>  -->