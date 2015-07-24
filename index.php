<?php

require_once 'Form.php';
require_once 'FormValidator.php';

require_once 'Validators/NotBlank.php';
require_once 'Validators/Length.php';
require_once 'Validators/InList.php';
require_once 'Validators/Numeric.php';

$f = new Form('test', [
    'submit' => [
        'type'=>'submit',
        'value' => 'Submit',
    ],
    'email' => [
        'validators' => [
            new NotBlank(),
        ],
        'attr' => [
            'style' => 'border: 2px solid black',
            'class' => 'no-class',
        ]
    ],
    'collection' => [
        'collection' => true,
        'validators' => [
            new NotBlank(),
        ]
    ]
]);

if ($f->validate()) {
    var_dump($f->getModel());
}

echo $f->render();