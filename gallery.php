<?php
  include ('header.php');
  include ('navbar.php');
  include "admin/db.php";
?>
<section>
 <div class="container">
    <h1 class="section-title mlrem">Gallery</h1>
    <hr class="w-25 mx-auto pt-5">

    
<!-- <div class="row text-center mb-5"> -->
<div class="container-fluid">
<div class="gallery" id="gallery">
  <?php
    $get_g = "SELECT * FROM gallery order by gallery_id DESC";
            $run_g = mysqli_query($con, $get_g);
            while ($row_g=mysqli_fetch_array($run_g)) {
                $gId= $row_g['gallery_id'];
                $gallery_title= $row_g['gallery_title'];
                $main_image= $row_g['main_image'];
                $publish= $row_g['publish'];
                if($publish =='1'){
                ?>


  <div class="mb-3 pics animation all 2">
        <img class="img-fluid" src="admin/img/<?php echo $main_image;?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $gallery_title; ?></h4>
            <a href="images.php?id=<?php echo $gId; ?>" class="btn btn-outline-success btn-sm">View all</a>
        </div>
</div>



  <?php   }} ?>
</div>
                </div>
</div>
</section>

<?php
  include ('footer.php');
?>


<style>
   
</style>

<script>
  $(function() {
var selectedClass = "";
$(".filter").click(function(){
selectedClass = $(this).attr("data-rel");
$("#gallery").fadeTo(100, 0.1);
$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('animation');
$("#gallery").fadeTo(300, 1);
}, 300);
});
});  
</script>