<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author sahid
 */
interface CustomerIface {
    //put your code here
    public function insertCustomer();
    public function generateCustomerId();
    public function getAllCustomer();
    public function getAllCustomerByGroup();
}

?>
