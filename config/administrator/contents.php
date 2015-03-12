<?php
/**
 * User model config
 */
return array(
    'title' => 'Content',
    'single' => 'Content',
    'model' => 'App\Content',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'header',
        'body',
        'tag',
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
        'header' => array(
            'title' => 'Name',
            'type' => 'text',
        ),
        'body' => array(
            'title' => 'Text:',
            'type' => 'wysiwyg',
        ),
        'tag' => array(
            'title' => 'Tag',
            'type' => 'text',
        ),
    ),
);