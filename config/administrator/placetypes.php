<?php
/**
 * User model config
 */
return array(
    'title' => 'Place Type',
    'single' => 'Place Type',
    'model' => 'App\Placetype',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'name',
    ),
    /**
     * The filter set
     */
    'filters' => array(
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Name:',
            'type' => 'text',
        ),
        'icon_link' => array(
            'title' => 'Icon link:',
            'type' => 'text',
        )
    ),
);