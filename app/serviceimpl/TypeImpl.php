<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TypeImpl
 *
 * @author sahid
 */
class TypeImpl implements TypeIface{
    //put your code here
    public function insertType() {
        $svcReturn = true;
        
        try {

           $data = array(
                'name' => Input::get('name'),
                'details' => Input::get('details'),
                'create_by' => 'I',
                'ip_address' => Request::getClientIp(),
                'active' => Input::get('active'),
            );

            $type = new Type($data);
            $type->save();
            
        } catch (RuntimeException $exc) {
            $svcReturn = false;            
        }
        
        return $svcReturn;
    }

    public function listPaymentType() {
        try {
            $paymentType = new Type();
            $listArray = $paymentType->getAllPaymentType();
            
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

?>
