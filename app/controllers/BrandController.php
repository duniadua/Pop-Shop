<?php

class BrandController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
        $brand = new BrandImpl();
        $arrayBrand = $brand->listBrand();
        
        $data = array(
            'title' => 'POP Shop - Brand',
            'page_title' => 'Add Brand name',
            'arrayBrand' => $arrayBrand,
        );
        return View::make('brand.index2', $data)
                        ->nest('bootstrap', 'asset.config_common')
                        ->nest('menus','asset.menus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        //
        try {
    
            $brandImpl = new BrandImpl();
            
            if($brandImpl->insertBrand()):
                return Redirect::to('brand')->with('mssg', '<div class=alert> ' . Input::get('name') . ' Added </div>');
            endif;
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}