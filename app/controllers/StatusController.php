<?php

class StatusController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
        $data = array(
            'title' => 'POP Shop - New Payment Status',
            'page_title' => 'Add Payment Status'
        );
        return View::make('status.index2', $data)
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

            $statusImpl = new StatusImpl();

            if ($statusImpl->insertStatus()):
                return Redirect::to('status')->with('mssg', '<div class=alert> ' . Input::get('name') . ' Added </div>');
            else:
                throw new RuntimeException("Return Error");
            endif;
        } catch (RuntimeException $exc) {
            echo $exc->getMessage();
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