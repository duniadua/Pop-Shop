<?php

class BankController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
        $data = array(
            'title' => 'POP Shop - New Bank',
            'page_title' => 'Add Bank Account'
        );
        return View::make('bank.index', $data)
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
                     
            $data = array(
                'name' => Input::get('name'),
                'details' => Input::get('details'),
                'create_by' => 'I',
                'ip_address' => Request::getClientIp(),
                'active' => Input::get('active'),
            );

            $bank = new Bank($data);
            $bank->save();

            return Redirect::to('bank')->with('mssg', '<div class=alert> ' . Input::get('name') . ' Added </div>');
            
        } catch (Exception $exc) {
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