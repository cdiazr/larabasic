<button type="button" class="btn btn-sm btn-{{$style}}" data-toggle="modal" data-target="#{{$modal_name}}">
    @if(!empty($icon))<i class="{{ $icon }}"></i>@endif {{ $btn_title }}
</button>
