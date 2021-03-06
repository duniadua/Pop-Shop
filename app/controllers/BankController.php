<?php

class BankController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        
        $bankImpl = new BankImpl();
        $listBankImpl = $bankImpl->listAllBank();
        
        $data = array(
            'title' => 'POP Shop - New Bank',
            'page_title' => 'Add Bank Account',
            'listBank' => $listBankImpl,
        );
        
        return View::make('bank.index2', $data)
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

            $bankImpl = new BankImpl();

            if ($bankImpl->insertBank()):
                return Redirect::to('bank')->with('mssg', '<div class=alert> ' . Input::get('name') . ' Added </div>');
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