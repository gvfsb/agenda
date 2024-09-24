<?php

use App\Controllers\Contato;

$app->get('/',  [Contato::class, 'index']);

$app->get('/criar',  [Contato::class, 'create']);
$app->post('/criar', [Contato::class, 'add']);

$app->get('/editar/{id}', [Contato::class, 'edit']);
$app->post('/editar/{id}', [Contato::class, 'update']);

$app->get('/visualizar/{id}', [Contato::class, 'show']);

$app->post('/deletar/{id}', [Contato::class, 'delete']);

?>