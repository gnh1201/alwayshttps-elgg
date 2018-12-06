<?php
elgg_register_event_handler('init', 'system', 'alwayshttps_init');

function alwayshttps_init() {
    elgg_register_js('alwayshttps', 'mod/alwayshttps-elgg/views/default/alwayshttps.js');
    elgg_load_js('alwayshttps');
}
