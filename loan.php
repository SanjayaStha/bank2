<?php
  include ('header.php');
  include ('navbar.php');
?>


<?php 
if (isset($_GET['id'])) {
    $newsId = $_GET['id'];
    $sel_result = mysqli_query($con,"SELECT * FROM loan WHERE id= $newsId");
    $row_news = mysqli_fetch_assoc($sel_result);
 
    $newsId= $row_news['id'];
    $news_title= $row_news['title']; 
    $nep_title= $row_news['nep_title'];
    $news_article= $row_news['article']; 
    $nep_article= $row_news['nep_article'];?>
    <div class="container mb-3">
        <h2 class="text-center pt-3"><span class="eng section-title"><?php echo $news_title; ?></span> <br>
        <span class="nep section-title"><?php echo $nep_title; ?></span></h2>
        <br>
        <div>
            <span class="nep"><?php echo $nep_article; ?></span>
            <span class="eng"><?php echo $news_article; ?></span>
        </div>
            
            <?php }
    ?>
</div>

<?php
include ('footer.php');
?>