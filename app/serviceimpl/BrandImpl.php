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
            $input = Input::all();

            $table = new Brand($input);
            $table->save();
        } catch (Exception $exc) {
            $svcReturn = false;
        }
        return $svcReturn;
    }

}
