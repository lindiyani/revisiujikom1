@extends('layouts.admin')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<ul class="breadcrumb panel-default">
					<li class="active ">ekstrakulikuler</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading bg-aqua">
					<div class="panel-title ">ekstrakulikuler<a class="pull-right" href="{{ route('ekstrakulikuler.create') }}">Tambah</a>
					</div>
</div>
					<div class="panel-body">
						{!! $html->table(['class'=>'table-striped']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	{!! $html->scripts() !!}
@endsection