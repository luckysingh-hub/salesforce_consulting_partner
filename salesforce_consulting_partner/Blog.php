<?php
include "../client/app/header.php";
include "../admin/databash/dbConnect.php";

?>
<style>
    .new-blog-p {
        height: 120px;
        width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 14px;
         /* white-space: nowrap;  */
         line-height:14px;


    }

    .old-blog {
        /* white-space: nowrap;  */
        height: 130px;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 14px;
        line-height:20px;
    }

</style>
<!-- banner section -->
<section class="header-wrapper container-fluid">
    <div class="header_content">
        <h1>Blog</h1>
    </div>
</section>
<!-- banner section -->

<!-- new section  -->
<section class="container mt-5">
    <div class="row">
        <div class="col-lg-9">
            <?php
            $blogdisplya = "SELECT * FROM `blog` ORDER BY id DESC";
            $blogresult = mysqli_query($conn, $blogdisplya);
            $blogdata = mysqli_fetch_array($blogresult)
            ?>
            <div class="new_blog">
                <div class="new_blog_title">
                    <h4><?php printf($blogdata['blog_titel']) ?></h4>
                </div>
                <div class="post_info_date">
                    <span><?php printf($blogdata['blog_date'])  ?></span>
                </div>
                <div class="post_img">
                    <a href="Full_Blog_Prevriew?id=<?php echo $blogdata['id'] ?>">
                        <img src="../admin/blog_Images/<?php printf($blogdata['blog_image']) ?>" alt="post img" class="mt-2">
                    </a>
                </div>
                <div class="new-blog-p">
                    <p><?php printf($blogdata['blog_con']) ?></p>
                </div> 
                <div class="post_button_wrapper mt-1">
                    <a href="Full_Blog_Prevriew?id=<?php echo $blogdata['id'] ?>" class="post_full_read">Read More</a>
                </div>
            </div>

            <div class="post_info_card mt-2 mb-2">
                <span>Salesforce</span>
            </div>
            <div class="row">
                <?php
                $blogdisplya = "SELECT * FROM `blog` ORDER BY id DESC LIMIT 4 OFFSET 1";
                $blogresult = mysqli_query($conn, $blogdisplya);

                
                while ($blogdata = mysqli_fetch_assoc($blogresult)) {
                ?>
                    <div class="col-lg-6 col-md-6 mb-2 mt-3">
                        <div class="post_old_blog">
                            <a href="Full_Blog_Prevriew?id=<?php echo $blogdata['id'] ?>">
                                <img src="../admin/blog_Images/<?php echo $blogdata['blog_image']; ?>" alt="post img" class="mt-2 old-blog-image">
                            </a>
                        </div>
                       
                        <div class="new_blog_title mt-2 mb-2">
                            <h4><?php echo $blogdata['blog_titel'] ?></h4>
                        </div>
                        <div class="post_info_date2 mb-2 mt-1 ">
                            <span><?php echo $blogdata['blog_date']; ?></span>
                        </div>
                        <div class="old-blog">
                            <p class="post_old_contant"><?php echo $blogdata['blog_con']; ?></p>
                        </div>
                        <div class="post_button_wrapper">
                            <a href="Full_Blog_Prevriew?id=<?php echo $blogdata['id'] ?>" class="post_full_read">Read More</a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <!-- <div class="col-lg-3">
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
                    <a href="https://www.linkedin.com/company/tech14-networks/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#!"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div> -->
        </div>
    </div>
</section>

<!-- new section  -->

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
<!-- footer include  -->
<?php include "../client/app/footer.php"; ?>
<!-- footer include ENd -->