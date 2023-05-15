<?php
/**
 * Plugin name : Admin Dashboard Widget 
 * /
 function admin_dashboard_widget() {
   wp_add_dashboard_widget(
      'admin_dashboard_widget',
      'Admin Dashboard Widget Title',
        'admin_dashboard_widget_callback'
   );
 }
 add_action('admin_dashboard_setup', 'admin_dashboard_widget');
 function admin_dashboard_widget_callback(){
   echo: 'hello dashboard.';
 }
