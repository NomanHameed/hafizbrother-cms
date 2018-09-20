<?php
namespace Controllers;

use Intervention\Image\ImageManager;
use Models\Product;

class ProductsController{

    private function uploadFile($files, $productId){
        $fileInputName = 'product_image';
        $target_dir = "../product-images/";
        $fileName = $productId . '-' . basename($files[$fileInputName]["name"]);
        $target_file  =$target_dir . $fileName;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check file size
        if ($files[$fileInputName]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($files[$fileInputName]["tmp_name"], $target_file))
                {
//        image intervention
                $manager = new ImageManager();
                $image = $manager->make($target_file)->resize(300, 200);
              $image->save($target_dir . '/thumb/'. $fileName);
//              echo "The file has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        return $fileName;
    }
    public function add($data, $files)
    {
        $error = 'danger';
        $messages = ['status' => 'success'];
        if(empty($data['product_name'])){
            $messages['status'] = $error;
            $messages['messages']['product_name'] = 'Product Name cannot be empty';
        }
        if(empty($data['product_code'])){
            $messages['status'] = $error;
            $messages['messages']['product_code'] = 'Product Code cannot be empty';
        }
        if($files['product_image']['size']==0){
            $messages['status'] = $error;
            $messages['messages']['product_image'] = 'Product Image cannot be empty';
        }

        $products = Product::all();

        if($messages['status'] == $error){
            $product = new Product();
            return compact('product', 'products', 'messages');
        }

        if(Product::where('product_name', $data['product_name'])->exists()){
            $messages['status'] = $error;
            $messages['messages']['already_exits'] = "Product Already Exists";
            $product = new Product($data);
            return compact('product', 'products', 'messages');
        }
        $product = Product::create($data);
        $source = $this->uploadFile($files, $product->id);

        $product->source = $source;


        $product->save();
        $messages['messages']['newly_created'] = "New Product Created Successfully";
        return compact('product', 'products', 'messages');
    }

    public function update($data,$files, $id)
    {

        $error = 'danger';
        $messages = ['status' => 'success'];
        if(empty($data['product_name'])){
            $messages['status'] = $error;
            $messages['messages']['product_name'] = 'Product Name cannot be empty';
        }
        if(empty($data['product_code'])){
            $messages['status'] = $error;
            $messages['messages']['product_code'] = 'Product Code cannot be empty';

        }

        if($messages['status'] == $error){
            return compact(  'messages');
        }

        if(Product::where('product_name', $data['product_name'])->where(
            'id', '!=',   $id)->exists()){
            $messages['status'] = $error;
            $messages['messages']['already_exits'] = "Product Already Exists";
            return compact('messages');
        }
        $product = Product::find($id);
        $product->product_name = $data['product_name'];
        $product->product_code = $data['product_code'];

        if(isset($files['product_image'])){
            unlink("../product-images/".$product->source);
            unlink("../product-images/thumb/".$product->source);
            $product->source = $this->uploadFile($files, $id);
        }
        $product->save();

        $messages['messages']['updated'] = "Product updated Successfully";
        return compact( 'messages');
    }

    public function delete($id,$file)
    {

        $product = Product::where('id' , $id)->delete();
        if ($product){
                unlink("../product-images/".$file);
                unlink("../product-images/thumb/".$file);
                $msg="Item Delete Successfully";
                return $msg;
        }
        $msg="Sorry";
            return $msg;
    }

    public function show($id)
    {
        // find product by id
        // include view file
    }

    public function edit($id)
    {
        // find product by id
        // include view file
    }

    public function create()
    {
        // show view for adding product
    }

}

?>