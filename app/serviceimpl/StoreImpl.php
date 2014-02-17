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

    public function listAllStore() {
        try {
            $store = new Store();
            $listArray = $store->getAll();

            if (count($listArray) > 0):
                return $listArray;
            else:
                throw new Exception("Empty Result Data");
            endif;
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

}

