<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductImpl
 *
 * @author sahid
 */
class ProductImpl implements ProductIface {

    //put your code here
    public function insertProduct() {
        $svcReturn = true;

        try {
            $input = array(
                'code' => Input::get('code'),
                'name' => Input::get('name'),
                'category' => Input::get('category'),
                'url' => Input::get('url'),
                'image' => Input::get('image'),
                'notes' => Input::get('notes'),
                'price' => Input::get('price'),
                'type' => Input::get('type'),
                'qty' => Input::get('qty'),
                'uom' => Input::get('uom'),
                'min_qty' => Input::get('min_qty'),
                'sp' => Input::get('sp'),
                'description' => Input::get('description'),
                'ip_address' => Request::getClientIp(),
                'active' => Input::get('active'),
            );

            $table = new Product($input);
            $table->save();
        } catch (Exception $exc) {
            $svcReturn = false;
        }
        return $svcReturn;
    }

}