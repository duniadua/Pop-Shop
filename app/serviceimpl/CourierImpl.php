<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CourierImpl
 *
 * @author sahid
 */
class CourierImpl implements CourierIface {

    public function insertCourier() {
        $svcReturn = true;

        try {
            $input = array(
                'name' => Input::get('name'),
                'details' => Input::get('details'),
                'create_by' => 'I',
                'ip_address' => Request::getClientIp(),
                'active' => Input::get('active'),
            );

            $table = new Courier($input);
            $table->save();
        } catch (Exception $exc) {
            $svcReturn = false;
        }
        return $svcReturn;
    }

    public function listAllCourier() {
        $courier = new Courier();
        $listCourier = $courier->getAll();

        if (count($listCourier) > 0):
            return $listCourier;
        endif;
    }

//put your code here
}

?>
