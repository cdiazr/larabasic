<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <select name="size" class="form-control">
                <option wire:click="updateSize(10)" @if($size == 10) selected @endif>10</option>
                <option wire:click="updateSize(20)" @if($size == 20) selected @endif>20</option>
                <option wire:click="updateSize(50)" @if($size == 50) selected @endif>50</option>
                <option wire:click="updateSize(100)" @if($size == 100) selected @endif>100</option>
            </select>
        </h3>

        <div class="card-tools mt-2">
            <div class="text-start float-left">
                <div class="input-group input-group-sm" style="width: 325px;">
                    <input type="text" wire:model.debounce.300ms="search" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            @if($add['new'])
            <div class="text-end float-right ml-4" style="margin-top: -5px">
                @include('components.call_modal', ['style' => 'primary', 'modal_name' => 'new_user', 'btn_title' => __('app.users.add'), 'icon' => 'fa fa-plus'])
            </div>
            @endif
        </div>

    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <tr>
                    @foreach($headers as $header)
                    <th>{{ $header }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
            @foreach($rows as $row)
                <tr>
                    @foreach($fields as $field)
                        @if($field == 'role')
                            <td>
                                @foreach($row->roles as $role)
                                <span class="badge bg-primary">{{ $role->name }}</span>
                                @endforeach
                            </td>
                        @elseif($field == 'actions')
                            <td width="{{ $sizes[$field] }}">
                                <a href="{{ route("{$route}.edit", $row->id) }}"><i class="fa fa-edit text-orange"></i></a>
                                <a href=""><i class="fa fa-trash text-danger"></i></a>
                            </td>
                        @else
                        <td @if(isset($sizes[$field])) width="{{ $sizes[$field] }}"@endif>{{ $row->$field }}</td>
                        @endif
                    @endforeach
                </tr>
            @endforeach
            </tbody>
            @if(!is_null($pages))
            <tfoot>
                <div class="d-flex justify-content-center mt-3">
                    {{ $pages->links() }}
                </div>
            </tfoot>
            @endif
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
