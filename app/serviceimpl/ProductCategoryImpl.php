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

}

?>
