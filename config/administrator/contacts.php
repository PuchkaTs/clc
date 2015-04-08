<?php
/**
 * User model config
 */
return array(
    'title' => 'Contacts',
    'single' => 'Contact',
    'model' => 'App\Contact',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'phone',
        'email',
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
        'phone' => array(
            'title' => 'Phone:',
            'type' => 'text',
        ),
        'email' => array(
            'title' => 'Email:',
            'type' => 'text',
        )
    ),
);