<?php
/**
 * Model title
 *
 * @type string
 */
 return array(
        'title'       => 'Шот',
        'single'      => 'Шот',
        'model'       => 'App\Shot',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'message'     => array(
                'title' => 'Мессэж',
            ),
            'position'     => array(
                'title' => 'Байрлал',
            ),
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'message'  => array(
                'title' => 'Мессэж',
                'type'  => 'text',
            ),
            'position'  => array(
                'title' => 'Байрлал',
                'type'  => 'number',
            ),

        ),


    );
