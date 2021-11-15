
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- Display Categories -->

                <?php

                foreach ($categories as $category) {

                    $cat_id = $category['cat_id'];
                    $cat_title = $category['cat_title'];
//                    $cat_status = $category['cat_status'];
                    include "components/category.php";
                }
                ?>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php" ?>

        </div>
        <!-- /.row -->


