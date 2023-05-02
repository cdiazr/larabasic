<div>
    @include('components.modal', [
        'modalName' => $modalName,

        /**
         * Size Modal values
         *
         * Small:       'sm'
         * Large:       'lg' (Default)
         * Extra large: 'xl'
         */
        'size' => 'lg',

        /**
         * Background Modal values
         *
         * None:      '' (Default)
         * Primary:   'primary'
         * Secondary: 'secondary'
         * Info:      'info'
         * Danger:    'danger'
         * Warning:   'warning'
         * Success:   'success'
         */
        'background' => '',
        'title' => __('app.users.create'),
        'template' => ''
    ])
</div>
