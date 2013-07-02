<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="navbar">
    <div class="navbar-inner">
        <?php echo HTML::link('account','Control Panel', array('class' => 'brand'));?>
        <ul class="nav">
            <li class="divider-vertical"></li>            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Master <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><?php echo HTML::link('product','Product'); ?></li>                    
                    <li><?php echo HTML::link('customer','Customer'); ?></li>                    
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Report <b class="caret"></b></a>
                <ul class="dropdown-menu">                           
                    <li><?php echo HTML::link('sales','Sales'); ?></li>
                    <li><?php echo HTML::link('sales','Product'); ?></li>
                    <li><?php echo HTML::link('sales','Customer'); ?></li>                    
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Setting <b class="caret"></b></a>
                <ul class="dropdown-menu">                           
                    <li><?php echo HTML::link('account','Account'); ?></li>                    
                </ul>
            </li>
        </ul>
        <ul class="nav">
            <li class="divider-vertical"></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Information <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php ?>"> Add Information</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-info-sign"></i> Credit</a></li>
                    <li><?php echo HTML::link('logout','Logout'); ?></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
