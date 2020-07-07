<?php
return [
    '~^hello/(.*)$~' => [\PhpLearning\Controllers\MainController::class, 'sayHello'],
    '~^$~' => [\PhpLearning\Controllers\MainController::class, 'main'],
    '~^bye/(.*)$~' => [\PhpLearning\Controllers\MainController::class,'sayBye'],
    '~^article/(\d+)$~' => [\PhpLearning\Controllers\ArticlesController::class,'view'],
    '~^about$~' => [\PhpLearning\Controllers\SupportController::class,'about'],
    //'' => [,''],
];