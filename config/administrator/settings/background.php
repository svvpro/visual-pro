<?php
return [
    'title'=>'Change background',
    'edit_fields'=>[
        'image'=>[
            'type'=>'image',
            'location'=>public_path().'/uploads/background/original/',
            'naming'=>'keep',
            'size_limit'=>6,
            'sizes'=>[
                [1920, 1200, 'auto', public_path().'/uploads/background/', 100],
            ],
        ],
    ],
];