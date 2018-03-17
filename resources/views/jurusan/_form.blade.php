<div class="form-group{{ $errors->has('nama') ? 'has-error' : '' }}">
	<label>Nama</label>
	<div class="form-line">
		{!! Form::text('nama',null,['class'=>'form-control']) !!}
		{!! $errors->first('nama','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('foto') ? 'has-error' : '' }}">
	<label>foto</label>
	<div class="form-line">
		{!! Form::file('foto',null,['class'=>'form-control']) !!}
		{!! $errors->first('foto','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="pull-right">
               {!! Form::button('<i class="fa fa-fw fa-lg fa-check-circle"></i> Simpan', ['class'=>'btn bg-aqua','type'=>'submit']) !!}&nbsp;&nbsp;&nbsp;
                 {!! Form::button('<i class="fa fa-refresh"></i> Reset', ['class'=>'btn bg-red','type'=>'reset']) !!}
              </div>