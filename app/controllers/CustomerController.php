<?php

class CustomerController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
        $data = array(
            'title' => 'POP Shop - New Customer',
            'page_title' => 'Add Customer'
        );
        return View::make('customer.index', $data)
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
                'code' => 'I',
                'firstname' => Input::get('firstname'),
                'lastname' => Input::get('lastname'),
                'password' => Hash::make(Input::get('password')),
                'email' => Input::get('email'),
                'address' => Input::get('address'),
                'address2' => Input::get('address2'),
                'address3' => Input::get('address3'),
                'postcode' => Input::get('postcode'),
                'city' => Input::get('city'),
                'province' => Input::get('province'),
                'home_no' => Input::get('home_no'),
                'mobile_no' => Input::get('mobile_no'),
                'grup' => Input::get('grup'),
                'ip_address' => Request::getClientIp(),
                'active' => Input::get('active'),
            );

            $customer = new Customer($data);
            $customer->save();

            return Redirect::to('customer')->with('mssg', '<div class=alert> ' . Input::get('firstname') . ' Added </div>');
            
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