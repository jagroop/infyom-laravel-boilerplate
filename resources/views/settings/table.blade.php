<div class="table-responsive-sm">
    <table class="table table-striped" id="settings-table">
        <thead>
            <th>Key</th>
        <th>Display Name</th>
        <th>Value</th>
        <th>Details</th>
        <th>Type</th>
        <th>Group</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($settings as $setting)
            <tr>
                <td>{!! $setting->key !!}</td>
            <td>{!! $setting->display_name !!}</td>
            <td>{!! $setting->value !!}</td>
            <td>{!! $setting->details !!}</td>
            <td>{!! $setting->type !!}</td>
            <td>{!! $setting->group !!}</td>
                <td>
                    {!! Form::open(['route' => ['settings.destroy', $setting->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('settings.show', [$setting->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('settings.edit', [$setting->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>