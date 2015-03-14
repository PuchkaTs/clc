<?php
/**
 * User model config
 */
return array(
    'title' => 'Place',
    'single' => 'Place',
    'model' => 'App\Place',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'name',
        'id' => array(
            'title' => 'Edit on Map',
            'output' => '<a href="edit/(:value)" target="_blank">Show map</a>',
        ),
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
        'type' => array(
            'type' => 'relationship',
            'title' => 'Place Type',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        ),
    ),
);