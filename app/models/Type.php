<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Type
 *
 * @author sahid
 */
class Type extends Eloquent {
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
    protected $table = 'payment_type';
    
    public function getAllPaymentType(){
        return $QUERY = DB::table('payment_type')
                ->get();
    }
}
