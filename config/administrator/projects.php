<?php
/**
 * User model config
 */
return array(
    'title' => 'Projects',
    'single' => 'Project',
    'model' => 'App\Project',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'title',
        'available',
        'area' => array(
            'title' => 'Area',
            'relationship' => 'area',
            'select' => '(:table).name',
        ),
        'id' => array(
            'title' => 'Edit on Map',
            'output' => '<a href="edit/(:value)" target="_blank">Show map</a>',
        ),
    ),
    /**
     * The filter set
     */
    'form_width' => 500,
    'filters' => array(
        'title' => array(
            'title' => 'Title',
            'type'  => 'text',
        ),
        'area' => array(
            'type' => 'relationship',
            'title' => 'Area',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        ),
        'available' => array(
            'title' => 'Is available',
            'type'  => 'bool',
        ),
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'title' => array(
            'title' => 'Title:',
            'type' => 'text',
        ),
        'description' => array(
            'title' => 'Description:',
            'type' => 'wysiwyg',
        ),
        'available' => array(
            'title' => 'Is availble',
            'type' => 'bool',
        ),
        'area' => array(
            'type' => 'relationship',
            'title' => 'Area',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        ),
        'features' => array(
            'type' => 'relationship',
            'title' => 'Features',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        ),
        'rooms' => array(
            'title' => 'Rooms:',
            'type' => 'text',
        ),
        'size' => array(
            'title' => 'Size:',
            'type' => 'text',
        ),
        'bathrooms' => array(
            'title' => 'Bathrooms:',
            'type' => 'text',
        ),
//        'price' => array(
//            'type' => 'number',
//            'title' => 'Price',
//            'symbol' => '$', //optional, defaults to ''
//            'decimals' => 2, //optional, defaults to 0
//            'thousands_separator' => ',', //optional, defaults to ','
//            'decimal_separator' => '.', //optional, defaults to '.'
//        ),
    ),
);