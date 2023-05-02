<?php

return [
    'actions' => [
        'save' => 'Save',
        'signin' => 'Sign In',
        'signup' => 'Sign Up',
        'social' => [
            'signin' => [
                'facebook' => 'Sign in using Facebook',
                'gmail' => 'Sign in using Gmail',
                'google_plus' => 'Sign in using Google+'
            ],
            'signup' => [
                'facebook' => 'Sign up using Facebook',
                'gmail' => 'Sign up using Gmail',
                'google_plus' => 'Sign up using Google+'
            ]
        ],
        'update' => 'Update'
    ],
    'fields' => [
        'actions' => 'Actions',
        'email' => 'Email',
        'name' => 'Name',
        'display_name' => 'Display Name',
        'full_name' => 'Full name',
        'first_name' => 'First name',
        'last_name' => 'Last name',
        'password' => 'Password',
        'password_re' => 'Retype password',
        'remember' => 'Remember Me',
        'role' => 'Role',
        'username' => 'Username'
    ],
    'forms' => [
        'titles' => [
            'login' => 'Sign in to start your session',
            'register' => 'Register a new membership',
        ],
        'checkboxes' => [
            'terms' => 'I agree to the <a href=":url">terms</a>'
        ]
    ],
    'links' => [
        'forgot' => 'I forgot my password',
        'login' => 'I already have a membership',
        'register' => 'Register a new membership'
    ],
    'notificacions' => [
        'register' => [
            'fail' => '',
            'success' => 'Registration successful! Please log in.'
        ]
    ],
    'roles' => [
        'index' => 'Roles',
        'edit' => 'Edit role',
        'create' => 'New role'
    ],
    'settings' => [
        'index' => 'Settings',
        'edit' => 'Edit Setting',
        'create' => 'New Setting',
    ],
    'sidebar' => [
        'titles' => [
            'admin' => 'ADMINISTRATION',
            'dev' => 'DEVELOPER'
        ]
    ],
    'status' => [
        'index' => 'Statuses',
        'edit' => 'Edit Status',
        'create' => 'New Status',
        'add' => 'Add Status'
    ],
    'users' => [
        'index' => 'Users',
        'edit' => 'Edit User',
        'create' => 'New User',
        'add' => 'Add User'
    ],
];
