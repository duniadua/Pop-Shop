<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
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
                    <label>Name</label>
                    <?php
                    echo Form::open(array('action' => 'ProductTypeController@store'));
                    echo Form::text('name');
                    echo Form::label('description', 'Description');
                    echo Form::text('description') . "</br>";
                    echo Form::label('brand', 'Brand');

                    echo Form::select('brand', $arraybrand) . "</br>";
                    
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

            </div>
        </div>
        <?php
        echo $footer;
        ?>
    </body>
</html>
