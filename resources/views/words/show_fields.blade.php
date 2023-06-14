<!-- Word Field -->
<div class="col-sm-12">
    {!! Form::label('word', 'Word:') !!}
    <p>{{ $word->word }}</p>
</div>

<!-- Gender Field -->
<div class="col-sm-12">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{{ $word->gender }}</p>
</div>

<!-- Plurals Field -->
<div class="col-sm-12">
    {!! Form::label('plurals', 'Plurals:') !!}
    <p>{{ $word->plurals }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $word->status }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $word->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $word->updated_at }}</p>
</div>

