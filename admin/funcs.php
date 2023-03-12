<?php
function insert_categories() {
    global $connection;
    if (isset($_POST["submit"])) {
        $new_cat = $_POST["cat_title"];
        if ($new_cat == "") {
            echo "<h3 style='color: red;'>This field should not be empty</h3>";
        } else {
            $query = mysqli_query($connection, "INSERT INTO category(cat_title) VALUES('$new_cat')");
        }
    }
}

function find_all_categories() {
    global $connection;
    $query = mysqli_query($connection, "SELECT * FROM category");
    while($row = mysqli_fetch_assoc($query)) {
        $cat_id = $row["cat_id"];
        $cat_name = $row["cat_title"];
        echo "
        <tr>
        <td>$cat_id</td>
        <td>$cat_name</td>
        <td><a href='categories.php?delete={$cat_id}'>DELETE<a></td>
        <td><a href='categories.php?edit={$cat_id}'>Edit<a></td>
        </tr>
        ";
    }
}

function delete_category() {
    global $connection;
    if(isset($_GET["delete"])) {
        $delete_id = $_GET["delete"];
        $delete_query = mysqli_query($connection, "DELETE FROM category WHERE cat_id = $delete_id");
        header("Location: categories.php");
    }
}

function edit_category() {
    global $connection;
    if(isset($_GET["edit"])) {
        $edit_id = $_GET["edit"];
        $edit_query = mysqli_query($connection, "SELECT cat_title FROM category WHERE cat_id = $edit_id");
        $edit_name = mysqli_fetch_array($edit_query)[0];
        include "includes/edit_categories.php";
    } 
    if(isset($_POST["edit"])) {
        $edit_id = $_GET["edit"];
        $edited_title = $_POST["edit_cat_title"];
        $start_edit_query = mysqli_query($connection, "UPDATE category SET cat_title = '$edited_title' WHERE cat_id = $edit_id");
        header("Location: categories.php");
    }
}

?>