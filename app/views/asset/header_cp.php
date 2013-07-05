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
                    <li><?php echo HTML::link('transaction','Manual Transaction'); ?></li>
                    <li class="divider"></li>
                    <li><?php echo HTML::link('customer','Customer'); ?></li>
                    <li class="divider"></li>
                    <li><?php echo HTML::link('bank','Bank'); ?></li>
                    <li class="divider"></li>
                    <li><?php echo HTML::link('status','Payment Status'); ?></li>
                    <li><?php echo HTML::link('type','Payment Type'); ?></li>
                    <li class="divider"></li>
                    <li><?php echo HTML::link('product','Product'); ?></li>
                    <li><?php echo HTML::link('brand','Product Brand'); ?></li>
                    <li><?php echo HTML::link('category','Product Category'); ?></li>
                    <li><?php echo HTML::link('category','Product Type'); ?></li>
                </ul>
            </li>
            <li class="divider-vertical"></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Report <b class="caret"></b></a>
                <ul class="dropdown-menu">                           
                    <li><?php echo HTML::link('sales','Sales'); ?></li>
                    <li><?php echo HTML::link('sales','Product'); ?></li>
                    <li><?php echo HTML::link('sales','Customer'); ?></li>                    
                </ul>
            </li>
            <li class="divider-vertical"></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Setting <b class="caret"></b></a>
                <ul class="dropdown-menu">                           
                    <li><?php echo HTML::link('store','Store'); ?></li>
                    <li><?php echo HTML::link('user','User'); ?></li>
                </ul>
            </li>
            <li class="divider-vertical"></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Utility <b class="caret"></b></a>
                <ul class="dropdown-menu">                           
                    <li><?php echo HTML::link('backup','Backup DB'); ?></li>
                    <li><?php echo HTML::link('restore','Restore DB'); ?></li>
                </ul>
            </li>
            <li class="divider-vertical"></li>
        </ul>
        <ul class="nav">            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Information <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php ?>"> Add Information</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-info-sign"></i> Credit</a></li>
                    <li><?php echo HTML::link('logout','Logout'); ?></li>
                </ul>
            </li>
            <li class="divider-vertical"></li>
        </ul>
    </div>
</div>
