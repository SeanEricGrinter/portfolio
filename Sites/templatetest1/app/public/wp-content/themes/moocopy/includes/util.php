<?php

function add_actions($hook, $actions_to_hook)
{
    foreach ($actions_to_hook as $action) {
        add_action($hook, $action);
    }
}