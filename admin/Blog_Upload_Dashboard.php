<?php
include "../admin/app/Dashboard_header.php";
include("../admin/databash/dbConnect.php");
?>
<style>
    table{
        width: 100%;
        border-collapse: collapse;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    table th{
        background-color:yellowgreen;
        color: #ffffff;
    }
</style>
<main>
    <div class="container">
        <h3 class="New_Blog_titel">New Blog Upload</h3>
        <form action="../admin/Blog_Upload.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <div class="input_box">
                        <input type="text" name="titel" placeholder="Titel">
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="input_box">
                        <input type="date" name="date" placeholder="Date">
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="input_box">
                        <input type="file" name="file" placeholder="image">
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <textarea name="editor" id="editor"></textarea>
                    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
                    <script type="text/javascript">
                        CKEDITOR.replace('editor', {
                            height: '350px',
                            filebrowserUploadUrl: "Blog_Con_Upload.php",
                            filebrowserUploadMethod: 'form'
                        });
                    </script>

                </div>
                <div class="col-2">
                    <button class="btn btn-primary btn-block" type="submit" name="blogSubmit">Submit</button>
                </div>
            </div>
        </form>

        <hr>
        <?php

$blogdisplyaadmin = "SELECT * FROM `blog` ORDER BY id DESC ";
$blogresultadmin = mysqli_query($conn, $blogdisplyaadmin);
while($blogdataadmin = mysqli_fetch_assoc($blogresultadmin)){
?>
        <table class="table">
    <tr>
    <th>Titel</th>
    <th>Date</th>
    <th>Update</th>
    <th>Delete</th>
</tr>

<tr>
    <td><?php echo $blogdataadmin['blog_titel'] ?></td>
    <td><?php echo $blogdataadmin['blog_date']  ?></td>
    <td style="width:10%;"><a href="../admin/Edit_blog.php?id=<?php echo $blogdataadmin['id']?>">Edit</a></td>
    <td style="width:10%;"><a href="../admin/blog_delete.php?id=<?php echo $blogdataadmin['id']?>">Delete</a></td>
</tr>


</table>
<?php
          }
?>
    </div>
</main>
<?php
include "../admin/app/Dashboard_Footer.php";
?>