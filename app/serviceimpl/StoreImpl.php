<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StoreImpl
 *
 * @author sahid
 */
class StoreImpl implements StoreIface {

    public function insertStore($input) {
        $srvReturn = true;

        try {
            $table = new Store($input);
            $table->save();
        } catch (Exception $exc) {
            $srvReturn = false;
        }

        return $srvReturn;
    }

}
