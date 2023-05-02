<?php

return [
    'actions' => [
        'save' => 'Guardar',
        'signin' => 'Acceder',
        'signup' => 'Registrarme',
        'social' => [
            'signin' => [
                'facebook' => 'Acceder usando Facebook',
                'gmail' => 'Acceder usando Gmail',
                'google_plus' => 'Acceder usando using Google+'
            ],
            'signup' => [
                'facebook' => 'Registrarse usando Facebook',
                'gmail' => 'Registrarse usando Gmail',
                'google_plus' => 'Registrarse usando Google+'
            ]
        ],
        'update' => 'Actualizar'
    ],
    'fields' => [
        'actions' => 'Acciones',
        'email' => 'Correo electrónico',
        'name' => 'Nombre',
        'display_name' => 'Nombre a mostrar',
        'full_name' => 'Nombre completo',
        'first_name' => 'Nombre',
        'last_name' => 'Apellidos',
        'password' => 'Contraseña',
        'password_re' => 'Confirmar contraseña',
        'remember' => 'Recuerdame',
        'role' => 'Rol',
        'username' => 'Usuario'
    ],
    'forms' => [
        'titles' => [
            'login' => 'Accede para comenzar tu sesión',
            'register' => 'Registrar nuevo miembro',
        ],
        'checkboxes' => [
            'terms' => 'Estoy de acuerdo con los <a href=":url">términos</a>'
        ]
    ],
    'links' => [
        'forgot' => 'Olvidé mi contraseña',
        'login' => 'Ya tengo cuenta',
        'register' => 'Registrar una nueva cuenta'
    ],
    'notificacions' => [
        'register' => [
            'fail' => '',
            'success' => 'Registration successful! Please log in.'
        ]
    ],
    'roles' => [
        'index' => "Roles",
        'edit' => "Editar rol",
        'create' => 'Nuevo rol'
    ],
    'settings' => [
        'index' => 'Configuraciones',
        'edit' => 'Editar Configuración',
        'create' => 'Nueva Configuración',
    ],
    'sidebar' => [
        'titles' => [
            'admin' => 'ADMINISTRACIÓN',
            'dev' => 'DESARROLLADOR'
        ]
    ],
    'status' => [
        'index' => 'Estados',
        'edit' => 'Edit Estado',
        'create' => 'New Estado',
        'add' => 'Añadir Estado'
    ],
    'users' => [
        'index' => 'Usuarios',
        'edit' => 'Editar Usuario',
        'create' => 'Nuevo Usuario',
        'add' => 'Añadir Usuario'
    ],
];
