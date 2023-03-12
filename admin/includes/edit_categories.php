

                                <form action="categories.php<?php echo '?edit='.$edit_id; ?>" method="POST">
                                    <div class="form-group">
                                        <label for="edit_cat_name">Category Name</label>
                                        <input type="text" name="edit_cat_title" class="form-control" id="edit_cat_name" value="<?php if(isset($edit_name)){echo $edit_name;}?>">
                                    </div>
                                    <div class="form-group">
                                        <input name="edit" type="submit" value="Edit Category Name" class="btn btn-primary">
                                    </div>
                                </form>