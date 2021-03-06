<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StatusImpl
 *
 * @author sahid
 */
class StatusImpl implements StatusIface {

    //put your code here
    public function insertStatus() {
        $svcReturn = true;

        try {

            $data = array(
                'name' => Input::get('name'),
                'details' => Input::get('details'),
                'create_by' => 'I',
                'ip_address' => Request::getClientIp(),
                'active' => Input::get('active'),
            );

            $status = new Status($data);
            $status->save();
        } catch (RuntimeException $exc) {
            $svcReturn = false;
            echo $exc->getTraceAsString();
        }

        return $svcReturn;
    }

    public function listAllStatus() {
        try {
            $status = new Status();
            $listArray = $status->getAllStatus();
            
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
