<?php

function mobile_fusion_init() {
    //register actions
    //set up pretty urls
    //add menu items
    //etc.
    elgg_register_widget_type('test', 'Mobile Fusion Test', 'The "Mobile Fusion Test" widget');
}
 
elgg_register_event_handler('init', 'system', 'mobile_fusion_init');
