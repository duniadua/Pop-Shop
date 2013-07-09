<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BrandImpl
 *
 * @author sahid
 */
class BrandImpl implements BrandIface {

    public function insertBrand() {
        $svcReturn = true;

        try {
            $input = array(
                'name' => Input::get('name'),
                'description' => Input::get('description'),
                'ip_address' => Request::getClientIp(),
                'active' => Input::get('active'),
            );

            $table = new Brand($input);
            $table->save();
        } catch (Exception $exc) {
            $svcReturn = false;
        }
        return $svcReturn;
    }

    public function listBrand() {

        try {
            $arrayBrand = DB::table('product_brand')
                    ->lists('name', 'id');

            if (count($arrayBrand) > 0):
                return $arrayBrand;
            endif;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
