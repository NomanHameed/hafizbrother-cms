<?php
namespace Controllers;

use Intervention\Image\ImageManager;
use Models\Category;
use Models\Product;

class CategoriesController{
    public $response;
    public function store($request)
    {
        if(empty($request['category_name'])){
            $this->response['messages']['category_name'] = 'Category Name cannot be empty';
            $this->response['status'] = 'warning';
            $this->response['code'] = 403;
            return $this->response;
        }

        if(Category::where('category_name', $request['category_name'])->exists()){
            $this->response['messages']['category_name'] = 'Category already Exists';
            $this->response['status'] = 'danger';
            $this->response['code'] = 403;
            return $this->response;
        }

        Category::create(['category_name' => $request['category_name']]);
        $this->response['messages']['category_name'] = 'Category created successfully';
        $this->response['status'] = 'success';
        $this->response['code'] = 200;
        return $this->response;
    }

    public function update($request)
    {
        $category = Category::find($request['id']);
        if(empty($request['category_name'])){
            $this->response['messages']['category_name'] = 'Category Name cannot be empty';
            $this->response['status'] = 'warning';
            $this->response['code'] = 403;
            return $this->response;
        }

        if(Category::where('category_name', $request['category_name'])->where('id' , '!=', $request['id'])->exists()){
            $this->response['messages']['category_name'] = 'Category already Exists';
            $this->response['status'] = 'danger';
            $this->response['code'] = 403;
            return $this->response;
        }

        $category->category_name = $request['category_name'];
        $category->save();
        $this->response['messages']['category_name'] = 'Category updated successfully';
        $this->response['status'] = 'success';
        $this->response['code'] = 200;
        return $this->response;
    }
    public function delete($id)
    {
        Category::destroy($id);
        $this->response['messages']['category_name'] = 'Category Deleted successfully';
        $this->response['status'] = 'success';
        $this->response['code'] = 200;
        return $this->response;
    }

}

?>
