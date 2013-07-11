<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductCategory
 *
 * @author sahid
 */
class ProductCategory extends Eloquent {

    //put your code here
    protected $fillable = array(        
        'name',
        'description',                
        'ip_address',
        'active'
    );

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product_cat';
    
    public function getAllProductCategory() {

        $QUERY = DB::table('product_cat')
                ->lists('name', 'id');

        return $QUERY;
    }

}
