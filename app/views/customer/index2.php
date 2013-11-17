<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Pop Panel <?php echo $title ?></title>
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <?php
        echo $bootstrap;
        $mssg = Session::get('mssg');
        ?>

        <!-- Demo page code -->

        <style type="text/css">
            #line-chart {
                height:300px;
                width:800px;
                margin: 0px auto;
                margin-top: 1em;
            }
            .brand { font-family: georgia, serif; }
            .brand .first {
                color: #ccc;
                font-style: italic;
            }
            .brand .second {
                color: #fff;
                font-weight: bold;
            }
        </style>

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="../assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    </head>

    <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
    <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
    <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
    <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!--> 
    <body class=""> 
        <!--<![endif]-->

        <div class="navbar">
            <div class="navbar-inner">
                <ul class="nav pull-right">

                    <li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">Settings</a></li>
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> Jack Smith
                            <i class="icon-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">My Account</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" class="visible-phone" href="#">Settings</a></li>
                            <li class="divider visible-phone"></li>
                            <li><a tabindex="-1" href="sign-in.html">Logout</a></li>
                        </ul>
                    </li>

                </ul>                
                <?php echo HTML::link('account', 'POP Shop', array('class' => 'brand')); ?>
            </div>
        </div>

        <?php
        echo $menus;
        ?>

        <div class="content">

            <div class="header">            
                <h1 class="page-title"><i class="icon-user"></i> Customer</h1>
            </div>

            <ul class="breadcrumb">
                <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                <li class="active">Customer</li>
            </ul>

            <div class="container-fluid">
                <div class="row-fluid">
                    <!--Form Start here-->
                    <div class="well">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab"><?php echo $page_title ?></a></li>
                            <li><a href="#profile" data-toggle="tab">List</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane active in" id="home">
                                <div class="span5">
                                    <fieldset>                            
                                        <label>User Name</label>
                                        <?php
                                        echo Form::open(array('action' => 'CustomerController@store'));
                                        echo Form::text('firstname');
                                        echo Form::label('Lastname', 'Lastname');
                                        echo Form::text('lastname') . "</br>";
                                        echo Form::label('email', 'Email');
                                        echo Form::text('email') . "</br>";
                                        echo Form::label('password', 'Password');
                                        echo Form::password('password') . "</br>";
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
                                        echo Form::text('postcode') . "</br>";
                                        echo Form::label('city', 'City');
                                        echo Form::text('city') . "</br>";
                                        echo Form::label('province', 'Province');
                                        echo Form::text('province') . "</br>";
                                        echo Form::label('home_no', 'Home Phone No');
                                        echo Form::text('home_no') . "</br>";
                                        echo Form::label('mobile_no', 'Mobile No');
                                        echo Form::text('mobile_no') . "</br>";

                                        $grup = array(
                                            0 => 'Normal User',
                                            1 => 'Member',
                                            2 => 'Reseller',
                                        );

                                        echo Form::select('grup', $grup) . "</br>";

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

                            <div class="tab-pane fade" id="profile">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th style="width: 26px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Tompson</td>
                                            <td>the_mark7</td>
                                            <td>
                                                <a href="user.html"><i class="icon-pencil"></i></a>
                                                <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Ashley</td>
                                            <td>Jacobs</td>
                                            <td>ash11927</td>
                                            <td>
                                                <a href="user.html"><i class="icon-pencil"></i></a>
                                                <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                                            </td>
                                        </tr>        
                                    </tbody>
                                </table>

                                <div class="pagination pagination-centered pagination-mini">
                                    <ul>
                                        <li><a href="#">Prev</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div> <!--tabcontent-->                        
                    </div>

                    <!--Form Ends-->

                    <footer>
                        <hr>
                        <p class="pull-right">Pop Shop - Control Panel</p>                        
                        <p>&copy; 2012</p>
                    </footer>

                </div>
            </div>
        </div>


        <?php echo HTML::script('lib/bootstrap/js/bootstrap.js'); ?>    
        <script type="text/javascript">
            $("[rel=tooltip]").tooltip();
            $(function() {
                $('.demo-cancel-click').click(function() {
                    return false;
                });
            });
        </script>

    </body>
</html>