<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="words-table">
            <thead>
            <tr>
                <th>Word</th>
                <th>Gender</th>
                <th>Plurals</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($words as $word)
                <tr>
                    <td>{{ $word->word }}</td>
                    <td>{{ $word->gender }}</td>
                    <td>{{ $word->plurals }}</td>
                    <td>{{ $word->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['words.destroy', $word->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('words.show', [$word->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('words.edit', [$word->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
          {{--   @include('adminlte-templates::common.paginate', ['records' => $words]) --}}
        </div>
    </div>
</div>
