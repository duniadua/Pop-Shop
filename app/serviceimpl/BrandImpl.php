<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BrandImpl
 *
 * @author sahid
 */
class BrandImpl implements BrandIface {

    public function insertBrand() {
        $svcReturn = true;

        try {
            $input = array(
                'name' => Input::get('name'),
                'description' => Input::get('description'),
                'ip_address' => Request::getClientIp(),
                'active' => Input::get('active'),
            );

            $table = new Brand($input);
            $table->save();
        } catch (Exception $exc) {
            $svcReturn = false;
        }
        return $svcReturn;
    }

    public function listBrand() {

        try {
            $brand = new Brand();
            $listarray = $brand->getAllBrand();

            if (count($listarray) > 0):

                foreach ($listarray as $rows) {
                    $arrayBrand[$rows->id] = $rows->description;
                }

                return $arrayBrand;
            else:
                throw new Exception("Empty Result Data");
            endif;
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function listAllBrand() {
        try {
            $brand = new Brand();
            $listarray = $brand->getAllBrand();

            if (count($listarray) > 0):
                return $listarray;
            else:
                throw new Exception("Empty Result Data");
            endif;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
