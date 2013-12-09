<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bank
 *
 * @author sahid
 */
class Bank extends Eloquent {

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
    protected $table = 'banks';

    public function getAllBank() {

        $QUERY = DB::table('banks')
                ->get();

        return $QUERY;
    }

}