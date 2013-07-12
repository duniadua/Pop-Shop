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
                    <?php
                    echo Form::open(array('action' => 'ProductController@store'));
                    echo Form::label('code', 'Code');
                    echo Form::text('code');
                    echo Form::label('name', 'Name');
                    echo Form::text('name');
                    echo Form::label('description', 'Description');
                    echo Form::text('description') . "</br>";
                    echo Form::label('category', 'Category');
                    echo Form::select('category',$arrayProductCategory) . "</br>";
                    echo Form::label('type', 'Type');
                    echo Form::select('type',$arrayProductType) . "</br>";
                    echo Form::label('url', 'Url');
                    echo Form::text('url') . "</br>";
                    echo Form::label('image', 'Image');
                    echo Form::text('image') . "</br>";
                    echo Form::label('notes', 'Notes');
                    echo Form::text('notes') . "</br>";
                    echo Form::label('price', 'Price');
                    echo Form::text('price') . "</br>";
                    echo Form::label('qty', 'QTY');
                    echo Form::text('qty') . "</br>";
                    ?>
                </fieldset>
            </div>
            <div class="span5">
                <fieldset>
                    <legend><?php echo $page_title ?></legend>                    
                    <?php
                    echo Form::label('uom', 'UOM');
                    echo Form::text('uom') . "</br>";
                    echo Form::label('min_qty', 'Minimum Qty');
                    echo Form::text('min_qty') . "</br>";
                    echo Form::label('sp', 'Special Point');
                    echo Form::text('sp') . "</br>";
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
        </div>
        <?php
        echo $footer;
        ?>
    </body>
</html>
