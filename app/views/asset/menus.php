<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="sidebar-nav">
    <form class="search form-inline">
        <input type="text" placeholder="Search...">
    </form>

    <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>Desktop </a>
    <ul id="dashboard-menu" class="nav nav-list collapse in">
        <li><?php echo HTML::link('desktop', 'Panel'); ?></li> 
        <li><?php echo HTML::link('transaction', 'Manual Transaction'); ?></li>                        
    </ul>
    
    <a href="#courier-menu" class="nav-header" data-toggle="collapse"><i class="icon-truck"></i>Courier </a>
    <ul id="courier-menu" class="nav nav-list collapse">
        <li><?php echo HTML::link('courier', 'Courier'); ?></li>
    </ul>

    <a href="#product-menu" class="nav-header" data-toggle="collapse"><i class="icon-shopping-cart"></i>Product</a>
    <ul id="product-menu" class="nav nav-list collapse">
        <li><?php echo HTML::link('product', 'Product'); ?></li>
        <li><?php echo HTML::link('brand', 'Product Brand'); ?></li>
        <li><?php echo HTML::link('category', 'Product Category'); ?></li>
        <li><?php echo HTML::link('product_type', 'Product Type'); ?></li>
    </ul>

    <a href="#customer-menu" class="nav-header" data-toggle="collapse"><i class="icon-group"></i>Customer</a>
    <ul id="customer-menu" class="nav nav-list collapse">
        <li><?php echo HTML::link('customer', 'Customer'); ?></li>
    </ul>

    <a href="#payment-menu" class="nav-header" data-toggle="collapse"><i class="icon-money"></i>Payment & Bank</a>
    <ul id="payment-menu" class="nav nav-list collapse">
        <li><?php echo HTML::link('bank', 'Bank'); ?></li>        
        <li><?php echo HTML::link('status', 'Payment Status'); ?></li>
        <li><?php echo HTML::link('type', 'Payment Type'); ?></li>       
    </ul>

    <a href="#setup-menu" class="nav-header" data-toggle="collapse"><i class="icon-cogs"></i>Setup</a>
    <ul id="setup-menu" class="nav nav-list collapse">
        <li><?php echo HTML::link('store', 'Store'); ?></li>
        <li><?php echo HTML::link('users', 'User'); ?></li>
    </ul>

    <a href="#maintenance-menu" class="nav-header" data-toggle="collapse"><i class="icon-briefcase"></i>Maintenance</a>
    <ul id="maintenance-menu" class="nav nav-list collapse">
        <li><?php echo HTML::link('backup', 'Backup DB'); ?></li>
        <li><?php echo HTML::link('restore', 'Restore DB'); ?></li>
    </ul>
</div>
