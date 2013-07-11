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
        $productType = new ProductType();
        $listarray = $productType->getAllProductType();

        if (count($listarray) > 0):
            return $listarray;
        endif;
    }

}

?>
