<?php
define('IS_IN_SCRIPT',1);// define a flag
use Controllers\ProductsController;
use Intervention\Image\ImageManager;
session_start();
        if(!isset($_SESSION['login_user'])){
            header("Location:login-form.php");
    } else{
    include_once "../connection.php";


if(isset($_POST['edit'])){
    $product = \Models\Product::find($_POST['id']);
}else{
    $product = new  \Models\Product(['product_name' => '', 'product_code' => '']);
}

include_once "incl/add-new-header.php";
include_once "incl/navbar.php";

?>

<div class="container">
	<div class="col-md-12">

        <?php
        $response = [];
        $productsController = new ProductsController();
        if(isset($_POST['save']) || isset($_POST['update'])){
            if(isset($_POST['save']))
            $response = $productsController->add($_POST, $_FILES);
            else if(isset($_POST['update']))
                $response = $productsController->update($_POST, $_FILES, $_POST['id']);
            if(isset($response['messages']['status'])
                &&
                count($response['messages']['messages']) > 0
            ){ ?>
                <div class="alert alert-<?php echo $response['messages']['status']; ?>">
            <?php
                foreach($response['messages']['messages'] as $message){
                    //foreach ($message as $alert) {
                        ?>
                        <div> <?php echo $message; ?></div>
                        <?php
                    //}
                }
                ?>
                </div>

                <?php
            }
        }
        if(isset($_POST['delete'])){
        ?>

            <?php
            $id=$_POST['id'];
            $product_image=$_POST['product_image'];
            $response=$productsController->delete($id,$product_image);
//            echo $_POST['id'];
            echo $response;
        }

        ?>

<form method="post" action="add-product.php" class="" enctype="multipart/form-data">
<div class="row">
    <div class="col-md-3 text-center">Name</div>
    <div class="col-md-3 text-center">Details</div>
    <div class="col-md-3 text-center">Image</div>
</div>
    <hr>
    <div class="row">
		<div class="col-md-3">
            <input type="hidden" name="id" value="<?php echo $product->id ?>" />
        	<input
                    type="text" class="form-control"
                    placeholder="Product Name"
                    name="product_name"
                    value="<?php echo $product->product_name; ?>"
            />
        </div>
		<div class="col-md-3">
<!--        	<input-->
       <textarea
                    class="form-control"
                    type="text"
                    placeholder="Details"
                    name="product_code"
       ><?php echo trim($product->product_code); ?>
       </textarea>
		</div>
		<div class="col-md-4">
		        <input class="form-control" value="<?php echo $product->source ?>" type="file" name="product_image">
		</div>
		<div class="col-md-2">
		<button type="submit" name="<?php echo (isset($_POST['edit']))? 'update' : 'save'; ?>" class="btn btn-primary"> SAVE  </button>
		</div>
</div>
<br>
</form>

</div>
<br>

	<?php
    include_once('products-table.php');
    include_once("incl/footer.php");
    ?>

<?php }
?>
