<!-- Word Field -->
<div class="form-group col-sm-6">
    {!! Form::label('word', 'Word:') !!}
    {!! Form::text('word', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::select('gender', ['M' => 'Masculine ', 'F' => 'Feminine', 'N' => 'Nuetral'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Plurals Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plurals', 'Plurals:') !!}
    {!! Form::text('plurals', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', ['1' => 'Draft', '2' => 'Published', '3' => 'Archived'], null, ['class' => 'form-control custom-select']) !!}
</div>