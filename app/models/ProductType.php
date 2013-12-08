<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductType
 *
 * @author sahid
 */
class ProductType extends Eloquent {

    //put your code here
    protected $fillable = array(
        'name',
        'description',
        'brand',
        'ip_address',
        'active'
    );

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product_type';
    
    public function getAllProductType() {

        $QUERY = DB::table('product_type')
                ->get();

        return $QUERY;
    }

}
