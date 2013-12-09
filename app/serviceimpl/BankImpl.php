<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BankImpl
 *
 * @author sahid
 */
class BankImpl implements BankIface {

    public function insertBank() {
        $svcReturn = true;

        try {

            $data = array(
                'name' => Input::get('name'),
                'details' => Input::get('details'),
                'create_by' => 'I',
                'ip_address' => Request::getClientIp(),
                'active' => Input::get('active'),
            );

            $bank = new Bank($data);
            $bank->save();
        } catch (RuntimeException $exc) {
            $svcReturn = false;
            echo $exc->getTraceAsString();
        }

        return $svcReturn;
    }

    public function listAllBank() {
        try {
            $bank = new Bank();
            $listarray = $bank->getAllBank();

            if (count($listarray) > 0):
                return $listarray;
            else:
                throw new Exception("Empty Result Data");
            endif;
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

}