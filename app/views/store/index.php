<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title ?></title>
        <?php
        echo $bootstrap;
        echo $header;

        $mssg = Session::get('mssg');
        ?>
    </head>
    <body>
        <div class="container box">
            <div class="span5">
                <fieldset>
                    <legend><?php echo $page_title ?></legend>
                    <label>Name</label>
                    <?php
                    echo Form::open(array('action' => 'StoreController@store'));
                    echo Form::text('name');
                    echo Form::label('email', 'Email');
                    echo Form::text('email') . "</br>";
                    echo Form::label('address', 'Address');
                    echo Form::text('address') . "</br>";
                    echo Form::label('address2', '');
                    echo Form::text('address2') . "</br>";
                    echo Form::label('address3', '');
                    echo Form::text('address3') . "</br>";
                    ?>
                </fieldset>
            </div>
            <div class="span5">                
                <fieldset>
                    <?php
                    
                    echo Form::label('postcode', 'Postcode');
                    echo Form::text('postcode','',array('class' => 'input-small')) . "</br>";
                    echo Form::label('city', 'City');
                    echo Form::text('city') . "</br>";
                    echo Form::label('province', 'Province');
                    echo Form::text('province') . "</br>";
                    echo Form::label('home_no', 'Home Phone No');
                    echo Form::text('home_no') . "</br>";
                    echo Form::label('mobile_no', 'Mobile No');
                    echo Form::text('mobile_no') . "</br>";

                    $active = array(
                        1 => 'active',
                        0 => 'inactive',
                    );

                    echo Form::select('active', $active) . "</br>";
                    echo Form::submit('Save', array('class' => 'btn btn-inverse'));
                    echo Form::close();
                    echo $mssg;
                    ?>
                </fieldset>
            </div>
        </div>
    </body>
    <?php
    echo $footer;
    ?>
</html>
