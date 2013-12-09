<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserImpl
 *
 * @author sahid
 */
class UserImpl implements UserIface {

    //put your code here
    public function insertUser() {
        $svcReturn = true;

        try {

            $data = array(
                'username' => Input::get('username'),
                'password' => Hash::make(Input::get('password')),
                'email' => Input::get('email'),
                'role' => 1,
                'active' => Input::get('active'),
            );

            $users = new User($data);
            $users->save();
        } catch (RuntimeException $exc) {
            $svcReturn = false;
            echo $exc->getTraceAsString();
        }

        return $svcReturn;
    }

    public function listAllUser() {
        try {
            $user = new User();
            $listArray = $user->getAll();
            
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
