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
        'description',
        'available',
    ),
    /**
     * The filter set
     */
    'form_width' => 500,
    'filters' => array(

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
        'price' => array(
            'type' => 'number',
            'title' => 'Price',
            'symbol' => '$', //optional, defaults to ''
            'decimals' => 2, //optional, defaults to 0
            'thousands_separator' => ',', //optional, defaults to ','
            'decimal_separator' => '.', //optional, defaults to '.'
        ),
        'price' => array(
            'type' => 'number',
            'title' => 'Price',
            'symbol' => '$', //optional, defaults to ''
            'decimals' => 2, //optional, defaults to 0
            'thousands_separator' => ',', //optional, defaults to ','
            'decimal_separator' => '.', //optional, defaults to '.'
        )
    ),
);