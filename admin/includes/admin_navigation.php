
<?php include "includes/admin_nav_bar.php" ?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to the Dashboard
                    <small>author</small>
                </h1>
                <div class="col-xs-6">

                <?php insert_categories(); ?>
                    <form action="index.php" method="POST">
                        <div class="form-group">
                            <label for="cat_name">Category Name</label>
                            <input type="text" name="cat_title" class="form-control" id="cat_name">
                        </div>
                        <div class="form-group">
                            <input name="submit" type="submit" value="Add Category" class="btn btn-primary">
                        </div>
                    </form>
                        
                    <?php edit_category() ;?>
                </div>
                <div class="col-xs-6">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php find_all_categories(); ?>

                            <?php delete_category();?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>