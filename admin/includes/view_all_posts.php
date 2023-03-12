<table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Image</th>
                                <th>Tags</th>
                                <th>Comment</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $post_query = mysqli_query($connection, "SELECT * FROM post");

                            while($row = mysqli_fetch_assoc($post_query)) {
                        ?>
                            <tr>
                                <td><?php echo $row["post_id"]; ?></td>
                                <td><?php echo $row["post_autor"]; ?></td>
                                <td><?php echo $row["post_title"]; ?></td>
                                <td><?php echo $row["post_category_id"]; ?></td>
                                <td><?php echo $row["post_status"] ?></td>
                                <td><img width="100" src="<?php echo $row['post_image']; ?>"></td>
                                <td><?php echo $row["post_tags"]; ?></td>
                                <td><?php echo $row["post_comment_count"]; ?></td>
                                <td><?php echo $row["post_date"]; ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>