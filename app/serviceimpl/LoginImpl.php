<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginImpl
 *
 * @author sahid
 */
class LoginImpl implements LoginIface {

    //put your code here
    public function getAuthentification($username, $password) {
        $loginReturn = true;

        try {

            $login = DB::table('users')
                    ->where('username', $username)
                    ->where('password', $password)
                    ->first();

            if (count($login) == 0):
                $loginReturn = false;
            endif;
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        
        return $loginReturn;
    }

}

?>
