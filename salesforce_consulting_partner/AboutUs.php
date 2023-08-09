<!-- header include  -->
<?php 
include "../client/app/header.php"; 
include "../admin/databash/dbConnect.php";
?>
<!-- header include ENd -->
<!--============= body container =========== -->
<section style="background-image: url(../client//imageFoleder/about_background.webp);" id="banner">
    <h3 class="line-1  text-white ">Maximize your potential with codm software Experts!!</h3>
</section>


<section class="mt-5">
    <div class="container">
        <div class="section-heading">
            About
            <span>CodM software</span>
            <div class="section-line"></div>
        </div>
        <div class="pb-3 text-center aboutContant">Software Development and IT Services: CodM Software Pvt. Ltd. is a reputable software development company
            specializing in IT services. Since its establishment in 2021, the company has been dedicated to providing
            consultation, support, and development services to clients in various industries.</div>
        <div class="pb-3 text-center aboutContant">Expertise in CRM and Salesforce: With a strong focus on the CRM domain, CodM Software Pvt. Ltd. has
            been steadily expanding its operations in Salesforce. The company motivates its highly skilled, experienced, and
            Salesforce-certified team to deliver exceptional performance. Working in a disciplined environment, the team remains
            dedicated and motivated throughout their collaboration with clients.</div>
        <div class="pb-3 text-center aboutContant">Global Reach and Collaborations: CodM Software Pvt. Ltd. has successfully engaged with offshore clients,
            delivering top-notch Salesforce services. Moreover, the company has established collaborations with international
            companies to enhance its business within the Salesforce ecosystem. By adhering to best practices, CodM Software Pvt.
            Ltd. ensures the highest quality in service delivery.
        </div>
    </div>
</section>

<section class="mt-5 bg-light">
    <div class="container-fluid">
   <div class="p-5 row">
    <div class="col-xl-5  mb-3">
        <div class="Aim">Our Mission and Vision: Empowering Businesses with Salesforce Excellence</div>
        <div class="pt-2">At CodM we believe in providing best Salesforce solutions to our clients.
            Our Mission, Our Vision and Our Values revolve around the clients. We ensure delivering top quality services
            with customised solutions. Our experts have a wide range of experience which helps in delivering high quality of 
            work along with accuracy to empower the business of the clients.</div>
    </div>
    <div class="col-xl-7">
        <div class="row">
            <div class="col-lg-4 col-md-4 mb-3">
            <div class="AimBox py-4 px-2">
                <i class="fa-brands fa-docker"></i>
                <div class="AimBoxTitel">Our Mission</div>
                <div class="AimBoxSubTitel">Providing best Salesforce Solutions to the industries and to boost the business growth of our clients.</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 mb-3">
            <div class="AimBox py-4 px-2">
            <i class="fa-solid fa-eye"></i>
             <div class="AimBoxTitel">Our Vision</div>
                <div class="AimBoxSubTitel">To make CodM pioneer in Salesforce Consulting, Implementation, and Delivery 
                    of services around the world with providing customised solutions to our clients. </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 mb-3">
            <div class="AimBox py-4 px-2">
            <i class="fa-brands fa-space-awesome"></i>
                <div class="AimBoxTitel">Our Values</div>
                <div class="AimBoxSubTitel">At CodM we believe in building relationships and partnerships with our
                     clients and this collaboration helps getting best possible results.</div>
                </div>
            </div>
           
        </div>
    </div>
</div>
</div>
</section>

<section class="mt-5 mb-2">
<div class="container-fluid">
<div class="section-heading">
            Events
            <span>/Celebration</span>
            <div class="section-line"></div>
        </div>
        <div class="owl-carousel owl-theme text-center magnificPopup " id="Events">
        <?php
            // / Fetch client data from the database
            $query = "SELECT * FROM `event_images`";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
        <div class="item">
            <a href="<?php echo $row['image_data']; ?>">
            <img src="<?php echo $row['image_data']; ?>" alt="<?php echo $row['image_name']; ?>">
            </a>
        </div>
        <?php } ?>
        </div>
</div>
</section>
<!--============= body container End =========== -->
<!-- footer include  -->
<?php include "../client/app/footer.php"; ?>
<!-- footer include END -->