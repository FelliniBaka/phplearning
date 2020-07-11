<?php
return [
    '~^$~' => [\PhpLearning\Controllers\MainController::class, 'main'],
    '~^article/(\d+)$~' => [\PhpLearning\Controllers\ArticlesController::class,'view'],
    '~^about$~' => [\PhpLearning\Controllers\SupportController::class,'about'],
    '~^article/(\d+)/edit$~' => [\PhpLearning\Controllers\ArticlesController::class,'edit']
    //'' => [,''],
];