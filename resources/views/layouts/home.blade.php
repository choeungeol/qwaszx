@extends('layouts/app')

@section('content')
	<style>
		.re {
			position: relative;
		}
	</style>
	<div class="col-lg-8">
		<div class="row wri">
			<div class="panel panel-default">
				<div class="panel-heading">writer title</div>

				<div class="panel-body">
					<textarea class="form-control" rows="4"></textarea>
				</div>
			</div>
		</div>
		@for($i=0;$i<20;$i++)
		<div class="row re" data-spy="scroll" data-target=".wri">
			<div class="panel panel-default">
				<div class="panel-heading">Title {{ $i }}</div>

				<div class="panel-body">
					body
				</div>
			</div>
		</div>
		@endfor
		<div class="row">

		</div>
	</div>
@endsection
