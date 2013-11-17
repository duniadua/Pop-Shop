<?php

class CourierController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
        Log::info('Courier In');
        $courier = new CourierImpl();
        $listCourier = $courier->listAllCourier();
                
        $data = array(
            'title' => 'POP Shop - New Courier',
            'page_title' => 'Add Courier',
            'listCourier' => $listCourier,
        );
        return View::make('courier.index2', $data)
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

            $courierImpl = new CourierImpl();

            if ($courierImpl->insertCourier()):
                return Redirect::to('courier')->with('mssg', '<div class=alert> ' . Input::get('name') . ' Added </div>');
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