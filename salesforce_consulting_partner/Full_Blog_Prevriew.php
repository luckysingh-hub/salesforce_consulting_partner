<?php
include "../client/app/header.php";
include "../admin/databash/dbConnect.php";

$id = $_GET['id']; 
           $Fullblogdisplya = "SELECT * FROM `blog` WHERE id='$id'";
           $Fullblogresult = mysqli_query($conn, $Fullblogdisplya);
           $Fullblogdata = mysqli_fetch_assoc($Fullblogresult)
?>

<style>
     .owl-carousel .owl-item img,
    .old-blog-image {
        max-height: 180px;
        height: 180px;
    }

</style>
<!-- banner section -->
<section class="header-wrapper container-fluid">
    <div class="header_content">
        <h1><?php echo $Fullblogdata['blog_titel'] ?></h1>
    </div>
</section>
<!-- banner section -->

<!-- full blog section -->
<section class="Fullblog-wrapper container mt-5">
    <div class="row">
        <div class="col-lg-9">
            <div class="fullBlog_contant">
                <div class="new_blog_title">
                    <h4><?php echo $Fullblogdata['blog_titel'] ?></h4>
                </div>
                <div class="post_info_date">
                    <span><?php echo $Fullblogdata['blog_date'] ?></span>
                </div>
                <div class="Fullpost_img">
                    <img src="../admin/blog_Images/<?php echo $Fullblogdata['blog_image']; ?>" alt="post img" class="mt-2 h-75 w-100">
                </div>
                <br>
                <p class="fullBlog_information">
                <?php echo $Fullblogdata['blog_con'] ?>   
                         </p>
             
            </div>
            <!-- <hr>
            <div class="blog_sharea_button">
                <span><i class="fa-solid fa-share"></i></span><span>Share</span>
            <div class="share_icon">
                    <a href="#!"><i class="fa-brands fa-twitter "></i></a>
                    <a href="#!"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#!"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            <hr> -->
            <!-- <div class="post_info_card mt-5">
                <span>Comments</span>
            </div>
            <div class="post_comment mt-2">
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis vitae minus ipsum consequuntur suscipit. Molestiae eaque fugiat dolores. Eum, voluptatibus.</span>
            </div>
            <hr class="comment_bottom"> -->

        </div>

        <div class="col-lg-3">
            <div class="about_company_wrapper">
                <div class="about_company_title">Company</div>
                <img src="./image/Tech14logo.png" alt="logo" class="mt-3">
                <br>
                <p>We are an IT consulting & training company with expertise in market-leading CRM such as Salesforce and Microsoft Dynamics.</p>
                <div class="company_about_button text-center">
                    <a href="#!">Read More</a>
                </div>
            </div>
            <div class="follow_me_wrapper mt-4">
                <div class="follow text-center">FOLLOW ME ON</div>
                <div class="socila_icon">
                    <a href="#!"><i class="fa-brands fa-twitter text-dark"></i></a>
                    <a href="#!"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#!"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>


</section>
<!-- full blog section -->

<!-- slider section -->
<div class="clinet owl-carousel owl-theme text-center mt-2" id="Blog">
    <?php
    $blogdisplya = "SELECT * FROM `blog`";
    $blogresult = mysqli_query($conn, $blogdisplya);
    while ($blogdata = mysqli_fetch_assoc($blogresult)) {
    ?>
        <div class="item">
            <a href="Full_Blog_Prevriew?id=<?php echo $blogdata['id'] ?>">
                <img src="../admin/blog_Images/<?php echo $blogdata['blog_image']; ?>" alt="post img" class="mt-2 ">
            </a>
        </div>
    <?php
    }
    ?>
</div>
<!-- slider section -->

<style>
    .blog_sharea_button {
        color: #000000;
    }

    .blog_sharea_button span .fa-share {
        color: var(--Button-background2) !important;
    }

    .comment_bottom {
        color: var(--Button-background);
    }

    .post_comment {
        border: 1px solid #000000;
        padding: 10px;
        border-radius: 20px;
    }
</style>

<?php include "../client/app/footer.php"; ?>
