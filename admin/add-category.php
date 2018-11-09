<?php
define('IS_IN_SCRIPT',1);// define a flag
session_start();
if(!isset($_SESSION['login_user'])){
    header("Location:login-form.php");
}
include_once "../connection.php";

if(isset($_POST['edit'])){
    $category = \Models\Category::find($_POST['id']);
}else{
    $category = new  \Models\Category(['category_name' => '']);
}

include_once "incl/add-new-header.php";
include_once "incl/navbar.php";

?>
<?php



if(isset($_POST['add_category']) || isset($_POST['update_category']) || isset($_POST['delete'])){

        $categoriesController = new \Controllers\CategoriesController();
    if(isset($_POST['add_category'])){
        $response = $categoriesController->store($_POST);
    }
    if(isset($_POST['update_category'])){
        $response = $categoriesController->update($_POST);
    }
    if(isset($_POST['delete'])){
        $response = $categoriesController->delete($_POST['id']);
    }
    foreach($response['messages'] as $message){
    ?>
        <div class="alert alert-<?php echo $response['status']; ?>"><?php echo $message ?></div>
<?php


    }

}

?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

<div class="container">
    <div class="row">

        <div class="col-md-2">
            Category Name
        </div>
        <div class="col-md-5">
            <?php if(isset($_POST['id'])) {
                 ?>
                    <input type="hidden" name="id" value="<?php echo $_POST['id']  ?>" />
                <?php
            }?>
            <input class="form-control" type="text" name="category_name" id="category_name" value="<?php echo $category->category_name; ?>" required />
        </div>
        <div class="col-md-2">
            <button type="submit" name="<?php echo (isset($_POST['edit'])) ? 'update_category' : 'add_category'; ?>" class="btn btn-primary"> SAVE  </button>
        </div>
    </div>
</div>
</form>

    <br/>
    <div class="row">
        <div class="col-md-12">
            <?php include_once 'category-table.php'; ?>
        </div>
    </div>

<?php
include_once "incl/add-new-header.php";
include_once "incl/navbar.php";
?>