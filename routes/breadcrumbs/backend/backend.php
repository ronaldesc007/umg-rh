<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.deptos.index', function ($trail) {
    $trail->push('Departamentos', route('admin.deptos.index'));
});

Breadcrumbs::for('admin.candidatos.index', function ($trail) {
    $trail->push('Candidatos', route('admin.candidatos.index'));
});

Breadcrumbs::for('admin.personal.index', function ($trail) {
    $trail->push('Personal', route('admin.personal.index'));
});

Breadcrumbs::for('admin.puestos.index', function ($trail) {
    $trail->push('Puestos', route('admin.puestos.index'));
});

Breadcrumbs::for('admin.operacion.index', function ($trail) {
    $trail->push('Operaciones', route('admin.operacion.index'));
});

Breadcrumbs::for('admin.contratacion.index', function ($trail) {
    $trail->push('Contrataciones', route('admin.contratacion.index'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
