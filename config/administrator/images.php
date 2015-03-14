<?php
/**
 * User model config
 */
return array(
    'title' => 'Images',
    'single' => 'Image',
    'model' => 'App\Image',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'description'     => array(
            'title' => 'Description',
        ),
        'position'     => array(
            'title' => 'Position',
        ),
        'image' => array(
            'title' => 'Image',
            'output' => '<img src="/uploads/projects/thumbs/(:value)" height="100" />',
        ),
        'Project' => array(
            'relationship' => 'Project',
            'title' => 'Belongs to a project',
            'select' => '(:table).title', //what column or accessor on the other table you want to use to represent this object
        ),
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'project' => array(
            'type' => 'relationship',
            'title' => 'Appartment title',
            'name_field' => 'title', //what column or accessor on the other table you want to use to represent this object
        ),
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'description'  => array(
            'title' => 'Description',
            'type'  => 'text',
        ),
        'position' => array(
            'title' => 'Position',
            'type'  => 'number',
        ),
        'project' => array(
            'type' => 'relationship',
            'title' => 'Belongs to a project',
            'name_field' => 'title', //what column or accessor on the other table you want to use to represent this object
        ),
        'image' => array(
            'title' => 'Image 900x450',
            'type' => 'image',
            'location' => public_path() . '/uploads/projects/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
//                    array(65, 57, 'landscape', public_path() . '/uploads/banner/thumbs/small/', 100),
//                    array(220, 138, 'fit', public_path() . '/uploads/products/thumbs/medium/', 100),
                array(900, 450, 'crop', public_path() . '/uploads/projects/', 100),
                array(120, 120, 'crop', public_path() . '/uploads/projects/thumbs/', 100),
                array(430, 200, 'crop', public_path() . '/uploads/projects/430x200/', 100)
            )
        )
    ),
);