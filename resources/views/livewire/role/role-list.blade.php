<div>
    @include('components.table', [
        'headers' => ['#',__('app.fields.name'), __('app.fields.display_name'), __('app.fields.actions')],
        'sizes' => ['id' => 25, 'name' => 100, 'actions' => 100 ],
        'fields' => ['id', 'name', 'display_name', 'actions'],
        'add' => [
            'new' => false,
            'modal_name' => '',
            'title' => null
        ],
        'pages' => null,
        'route' => 'role',
        'rows' => $roles
    ])
</div>
