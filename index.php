<?php include "includes/config.php"; ?>
<?php include "includes/header.php"; ?>

<!-- Navigation -->

<?php include "includes/navigation.php"; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->


            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
            <?php 
                $post_query = "SELECT * FROM post";
                $result = mysqli_query($connection, $post_query);
                while($row = mysqli_fetch_assoc($result)) {
                    $post_name = $row["post_title"];
                    $post_autor = $row["post_autor"];
                    $post_date = $row["post_date"];
                    $post_image = $row["post_image"];
                    $post_content = $row["post_content"];
                    echo "
                            <h2>
                                <a href='#'>$post_name</a>
                            </h2>
                            <p class='lead'>
                                by <a href='index.php'>$post_autor</a>
                            </p>
                            <p><span class='glyphicon glyphicon-time'></span> Posted on {$post_date}</p>
                            <hr>
                            <img class='img-responsive' src='{$post_image}' alt=''>
                            <hr>
                            <p>$post_content</p>
                            <a class='btn btn-primary' href='#'>Read More <span class='glyphicon glyphicon-chevron-right'></span></a>
                        ";
                    
                }
            ?>
                

                <hr>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            
            <?php include "includes/sidebar.php"; ?>

        </div>
        <!-- /.row -->

        <hr>

<?php include "includes/footer.php"; ?>
        