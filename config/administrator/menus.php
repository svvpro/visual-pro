<?php
return [
    'title'=>'Menus',
    'single'=>'menu item',
    'model'=>'App\Menu',
    'columns'=>[
        'id',
        'active',
        'weight',
        'title',
    ],
    'edit_fields'=>[
        'active'=>[
            'type'=>'bool'
        ],
        'weight'=>[
            'type'=>'number'
        ],
        'title'=>[
            'type'=>'text'
        ],
        'url'=>[
            'type'=>'text'
        ],
    ],

];