<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Store
 *
 * @author sahid
 */
class Store extends Eloquent {
    
    //put your code here
    protected $fillable = array(                
        'name',
        'email',        
        'address',
        'address2',
        'address3',
        'postcode',
        'city',
        'province',
        'home_no',
        'mobile_no',        
        'ip_address',
        'active'
    );

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'store';
    
     public function getAll(){
        $QUERY = DB::table('store')
                ->get();
        
        return $QUERY;
    }
    
}

