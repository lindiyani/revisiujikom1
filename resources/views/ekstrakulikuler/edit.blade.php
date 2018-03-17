@extends('layouts.admin')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<ul class="breadcrumb">
					<li><a href="{{ url('/admin/ekstrakulikuler') }}">ekstrakulikuler</a></li>
					<li class="active">Ubah ekstrakulikuler</li>
				</ul>
				<div class="panel panel-default">
				<div class="panel-heading bg-aqua">
						<h2 class="panel-title">Ubah ekstrakulikuler</h2>
					</div>

					<div class="panel-body">
					<table class="table">
						{!! Form::model($ekstrakulikuler,['url' => route('ekstrakulikuler.update',$ekstrakulikuler->id),
						'method'=>'put','class'=>'form-horizontal']) !!}
						@include('ekstrakulikuler._form')
						{!! Form::close() !!}
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection