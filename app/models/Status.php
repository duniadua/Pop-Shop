<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Status
 *
 * @author sahid
 * 
 */
class Status extends Eloquent {

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
    protected $table = 'payment_status';

    public function getAllStatus() {

        return $QUERY = DB::table('payment_status')
                ->get();
    }

}