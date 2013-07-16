<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustomerImpl
 *
 * @author sahid
 */
class CustomerImpl implements CustomerIface {

    //put your code here
    public function insertCustomer() {
        $svcReturn = true;

        try {

            $data = array(
                'code' => 'I',
                'firstname' => Input::get('firstname'),
                'lastname' => Input::get('lastname'),
                'password' => Hash::make(Input::get('password')),
                'email' => Input::get('email'),
                'address' => Input::get('address'),
                'address2' => Input::get('address2'),
                'address3' => Input::get('address3'),
                'postcode' => Input::get('postcode'),
                'city' => Input::get('city'),
                'province' => Input::get('province'),
                'home_no' => Input::get('home_no'),
                'mobile_no' => Input::get('mobile_no'),
                'grup' => Input::get('grup'),
                'ip_address' => Request::getClientIp(),
                'active' => Input::get('active'),
            );

            $customer = new Customer($data);
            $customer->save();
        } catch (RuntimeException $exc) {
            $svcReturn = false;
            echo $exc->getTraceAsString();
        }

        return $svcReturn;
    }

}

?>
