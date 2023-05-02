<div>
    @include('components.table', [
        'headers' => ['#',__('app.fields.name'), __('app.fields.username'), __('app.fields.email'), __('app.fields.role'), __('app.fields.actions')],
        'sizes' => ['id' => 25, 'actions' => 100 ],
        'fields' => ['id', 'name', 'username', 'email', 'role', 'actions'],
        'add' => [
            'new' => true,
            'modal_name' => 'new_user',
            'title' => __('app.users.add')
        ],
        'pages' => $users,
        'route' => 'user',
        'rows' => $users
    ])

    @include('components.modal', [
        'modalName' => 'new_user',
        'size' => 'sm',
        'background' => '',
        'title' => __('app.users.create'),
        'template' => 'pages.users.modal'
    ])
</div>
