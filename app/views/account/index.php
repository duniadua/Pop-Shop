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
        <div class="container well">
            <div class="span5">
                <fieldset>
                    <legend><?php echo $page_title ?></legend>
                    <label>User Name</label>
                    <?php
                    echo Form::open(array('action' => 'UserController@store'));
                    echo Form::text('username');
                    echo Form::label('pwd', 'Password');
                    echo Form::password('password') . "</br>";
                    echo Form::label('email', 'Email');
                    echo Form::text('email') . "</br>";

                    $active = array(
                        'true' => 'active',
                        'false' => 'inactive',
                    );

                    echo Form::select('active', $active) . "</br>";
                    echo Form::submit('Save', array('class' => 'btn btn-inverse'));
                    echo Form::close();
                    echo $mssg;
                    ?>
                </fieldset>
            </div>
            <div class="span5">

            </div>
        </div>
    </body>
    <?php
    echo $footer;
    ?>
</html>
