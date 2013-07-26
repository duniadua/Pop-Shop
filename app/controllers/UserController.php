<?php

class UserController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
        $data = array(
            'title' => 'New User',
            'page_title' => 'User Account'
        );
        return View::make('account.index', $data)
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
            $userImpl = new UserImpl();

            if ($userImpl->insertUser()):
                return Redirect::to('users')->with('mssg', '<div class=alert> ' . Input::get('username') . ' Added </div>');
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
