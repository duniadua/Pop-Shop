<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 *
 * @author sahid
 */
class Customer extends Eloquent {

    //put your code here
    protected $fillable = array(
        'code',
        'firstname',
        'lastname',
        'email',
        'password',
        'address',
        'address2',
        'address3',
        'postcode',
        'city',
        'province',
        'home_no',
        'mobile_no',
        'grup',
        'ip_address',
        'active'
    );

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'customer';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');
    
    public function getAllCustomer(){
        return $courier = DB::table('customer')->get();
    }

}