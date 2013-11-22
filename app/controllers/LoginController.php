<?php

class LoginController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //        
        $store = Store::find(1);

        $data = array(
            'title' => 'Please Verify Your Self',
            'page_title' => 'Login Box',
            'store' => $store
        );

        return View::make('login.index', $data)
                        ->nest('bootstrap', 'asset.config_common');
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

    public function cekLogin() {
        try {

            if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')))) :
                return Redirect::to('desktop');
            else:
                return Redirect::to('login')->with('mssg', "<div class='alert alert-error'>Login failed, please check again username & password</div>");
            endif;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}