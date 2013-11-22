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
        $loginReturn = false;

        try {

            $login = DB::table('users')
                    ->where('username', $username)
                    ->where('password', $password)
                    ->first();
            
            echo $login;

            if (count($login) == 1):
                $loginReturn = true;
            endif;
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        
        return $loginReturn;
    }

}

?>
