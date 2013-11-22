<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Brand
 *
 * @author sahid
 */
class Brand extends Eloquent {

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
    protected $table = 'product_brand';

    public function getAllBrand() {

        $QUERY = DB::table('product_brand')
                ->orderBy('created_at','desc')
                ->get();

        return $QUERY;
    }

}