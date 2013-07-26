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

}