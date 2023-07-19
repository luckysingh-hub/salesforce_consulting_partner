<?php
include "../client/app/header.php";
include "../admin/databash/dbConnect.php";
?>
<section id="banner" style="background-image:url(../client//imageFoleder//bannerBlog.jpg);">
    <h3 class="line-1 anim-typewriter text-uppercase text-white text-center"> Check out our Blogs, Don’t miss them!!</h3>
</section>
<section class="container mt-5">
    <div class="row mx-auto">
    <?php
            $blogdisplya = "SELECT * FROM `blogs` ";
            $blogresult = mysqli_query($conn, $blogdisplya);
            while ($blogrow = mysqli_fetch_assoc($blogresult)) {
            ?>
            
        <div class="col-lg-4 mb-4" id="blog_wepper">
            <a href="Full_Blog_Prevriew.php?id=<?php echo $blogrow['id'] ?>">
                <img src="../admin/Blog_images/<?php echo $blogrow['blog_image']; ?>" alt="<?php echo $blogrow['blog_tital']; ?>" id="blogimagebanner">
                <h4 class="mt-2"><?php echo $blogrow['blog_tital']; ?></h4>
                <p class="mt-2"><?php echo $blogrow['blog_UI_pra']; ?></p>
            </a>
            <a href="Full_Blog_Prevriew.php?id=<?php echo $blogrow['id'] ?>" style="color: #29ade4 !important;">Read More</a>
            <div class="main-blog-info">
                <span class="text-muted"><?php echo $blogrow['blog_date']; ?></span>
                <span class="blogLine">|</span>
                <span>Codm Team</span>
                <i class="fa-solid fa-eye text-muted"></i>
            </div>

        </div>
        <?php } ?>
    </div>
</section>

<!-- footer include  -->
<?php include "../client/app/footer.php"; ?>
<!-- footer include ENd -->