<?php
/**
 * User model config
 */
return array(
    'title' => 'Areas',
    'single' => 'Area',
    'model' => 'App\Area',
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
        )
    ),
);