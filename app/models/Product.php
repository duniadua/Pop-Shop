<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author sahid
 */
class Product extends Eloquent {

    //put your code here
    protected $fillable = array(
        'code',
        'name',
        'description',
        'category',
        'url',
        'image',
        'notes',
        'price',
        'type',
        'qty',
        'uom',
        'brand',
        'min_qty',
        'sp',
        'ip_address',
        'active'
    );

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product';
    
    public function getAll(){
        return $product = DB::table('product')->get();
    }

}

?>
