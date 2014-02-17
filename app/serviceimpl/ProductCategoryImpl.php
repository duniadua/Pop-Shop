<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductCategoryImpl
 *
 * @author sahid
 */
class ProductCategoryImpl implements ProductCategoryIface {

    //put your code here
    public function insertProductCat() {
        $svcReturn = true;

        try {
            $input = array(
                'name' => Input::get('name'),
                'description' => Input::get('description'),
                'ip_address' => Request::getClientIp(),
                'active' => Input::get('active'),
            );

            $table = new ProductCategory($input);
            $table->save();
        } catch (Exception $exc) {
            $svcReturn = false;
        }
        return $svcReturn;
    }

    public function listProductCat() {
        try {
            $productCategory = new ProductCategory();
            $listarray = $productCategory->getAllProductCategory();

            if (count($listarray) > 0):

                foreach ($listarray as $rows) {
                    $arrayProduct[$rows->id] = $rows->description;
                }

                return $arrayProduct;
            else:
                throw new Exception('Category list is empty');
            endif;
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function listAllProductCat() {
        try {
            $productCategory = new ProductCategory();
            $listarray = $productCategory->getAllProductCategory();

            if (count($listarray) > 0):            
                return $listarray;
            else:
                throw new Exception('Category list is empty');
            endif;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}

?>
