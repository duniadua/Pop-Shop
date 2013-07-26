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
            <div class="button-group">
                <i class="icon-remove-sign icon-white"></i>
                <i class="icon-plus-sign icon-white"></i>
                <i class="icon-minus-sign icon-white"></i>
            </div>
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
            <div class="span5">
                <div class="tabbable">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab"><i class="icon-list"></i> View </a></li>
                        <li><a href="#tab2" data-toggle="tab"><i class="icon-edit"></i> Edit </a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active fade" id="tab1">
                            <p>I'm in Section 1.</p>
                        </div>
                        <div class="tab-pane fade" id="tab2">
                            <p>Howdy, I'm in Section 2.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php
    echo $footer;
    ?>
</html>
