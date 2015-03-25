<?php
/**
 * Model title
 *
 * @type string
 */
 return array(
        'title'       => 'Video',
        'single'      => 'Video',
        'model'       => 'App\Video',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'title'     => array(
                'title' => 'Title',
            ),
            'pin'     => array(
                'title' => 'Pin',
            ),
            'video'     => array(
                'title' => 'Video',
                'output' => '<a href="http://www.youtube.com/watch?v=(:value)" target="_blank">(:value)</a>',
            ),
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'title'  => array(
                'title' => 'Video',
                'type'  => 'text',
            ),
            'video' => array(
                'title' => 'Video ID',
                'type'  => 'text',
            ),
            'pin' => array(
                'title' => 'Show on home page',
                'type'  => 'bool',
            ),
            'description' => array(
                'title' => 'Description',
                'type'  => 'wysiwyg',
            ),

        ),


    );
