<?php
$categories = \Models\Category::all();
?>
<table class="table">
<thead>
<th>Category Name</th>
<th>Actions</th>
</thead>

    <tbody>
        <?php
        foreach ($categories as $category_item){
            ?>
            <tr>
                <td><?php echo  $category_item->category_name; ?></td>
                <td>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <input type="hidden" name="id" value="<?php  echo $category_item->id; ?>" />
                        <button type="submit" name="edit" class="btn btn-info">Edit</button>
                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php
        }

        ?>

    </tbody>
</table>