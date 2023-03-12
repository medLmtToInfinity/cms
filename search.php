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
            if(isset($_POST["submit"])) {
                $search = $_POST["search"];
                $post_query = mysqli_query($connection, "SELECT * FROM post WHERE post_tags LIKE '%$search%' OR post_autor LIKE '%$search%' OR post_title LIKE '%$search%'");
                $rows = mysqli_num_rows($post_query);
                if($rows > 0) {
                while($row = mysqli_fetch_assoc($post_query)) {
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
                } else {
                    echo "<h1>No Result Found</h1>";
                }
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
        