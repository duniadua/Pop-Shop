<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Courier
 *
 * @author sahid
 */
class Courier extends Eloquent{
    //put your code here
    
    //put your code here
    protected $fillable = array(
        'name',
        'details',
        'create_by',
        'ip_address',
        'active'
    );

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'courier';

}

?>
