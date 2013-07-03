<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Authorized Page</title>
        <?php
        echo render('asset.html_config_common');
        $mssg = Session::get('mssg');
        ?>
        <style type="text/css">
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #f5f5f5;
            }

            .form-signin {
                max-width: 300px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .form-signin input[type="text"],
            .form-signin input[type="password"] {
                font-size: 16px;
                height: auto;
                margin-bottom: 15px;
                padding: 7px 9px;
            }

        </style>
    </head>    
    <body>
        <div class="container">
            <div class="form-signin">
                <h2 class="form-signin-heading">Please sign in</h2>                
                    <legend>Login</legend>
                    <label>User Name</label>
                    <?php
                    // put your code here
                    echo Form::open('auth');
                    echo Form::text('username');
                    echo Form::label('pwd', 'Password');
                    echo Form::password('password') . "</br>";
                    echo Form::submit('Login', array('class' => 'btn btn-large btn-inverse'));
                    echo Form::close();
                    echo $mssg = Session::get('mssg');
                    ?>                
            </div>
        </div>        
    </body>
</html>
