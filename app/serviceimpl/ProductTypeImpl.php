<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductTypeImpl
 *
 * @author sahid
 */
class ProductTypeImpl implements ProductTypeIface {

    //put your code here
    public function insertProductType() {
        $svcReturn = true;

        try {

            $input = array(
                'name' => Input::get('name'),
                'description' => Input::get('description'),
                'brand' => Input::get('brand'),
                'ip_address' => Request::getClientIp(),
                'active' => Input::get('active'),
            );

            $table = new ProductType($input);
            $table->save();
        } catch (Exception $exc) {
            $svcReturn = false;
        }
        return $svcReturn;
    }

    public function listProductType() {
        try {

            $productType = new ProductType();
            $listarray = $productType->getAllProductType();

            if (count($listarray) > 0):

                foreach ($listarray as $rows) {
                    $arrayProduct[$rows->name] = $rows->description;
                }

                return $arrayProduct;
            else:
                throw new Exception('Product Type list is empty');
            endif;
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function listAllProductType() {
        try {
            $productType = new ProductType();
            $listarray = $productType->getAllProductType();

            if (count($listarray) > 0):             
                return $listarray;
            else:
                throw new Exception('Product Type list is empty');
            endif;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}

?>
