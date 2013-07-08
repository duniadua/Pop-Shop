<?php

class ProductTypeController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
        $data = array(
            'title' => 'POP Shop - Product Type',
            'page_title' => 'Add Product Type'
        );
        return View::make('product.type', $data)
                        ->nest('header', 'asset.header_cp')
                        ->nest('bootstrap', 'asset.html_config_common')
                        ->nest('footer', 'asset.footer');
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

            $productTypeImpl = new ProductTypeImpl();

            if ($productTypeImpl->insertProductType()):
                return Redirect::to('product_type')->with('mssg', '<div class=alert> ' . Input::get('name') . ' Added </div>');
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