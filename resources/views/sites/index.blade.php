@extends('layouts.master_layout')
@section('content')
<div class="panel panel-default">
	<div class="panel-heading">
		@if (strlen($msg) > 0)
		<div class="alert alert-info">
			{{ $msg }}
		</div>
		@endif

		<div class="clearfix">
			<h3 class="panel-title pull-left">Sites</h3>
			<div class="pull-right">
				<a class="btn btn-success btn-xs" href="{{ URL::to('/sites/add') }}" title="Add Item" role="button"><span class="fa fa-plus"></span> Add Item</a>
			</div>
		</div>
	</div>
	<div class="panel-body">
		{!! Form::open(array('name' => 'search_form', 'url' => URL::to('sites'), 'class'=>'form-inline', 'role' => 'form')) !!}
			<div class="form-group">
				<div class="input-group input-group-sm">
					<input class="form-control" type="text" maxlength="255" name="q" id="q" value="{{ $q }}">
					<span class="input-group-btn">
						<input class="btn btn-default btn-sm" type="submit" value="Search" name="search-btn" id="search-btn">
					</span>
				</div>
			</div>
		{!! Form::close() !!}
	</div>
	<div class="table-responsive">
		<table id="grid_table" class="table table-bordered table-condensed table-striped table-hover tablesorter">
		<thead>
			<tr>
				@if (App\Http\Controllers\LoginController::can_access())
				<th>&nbsp;</th>
				@endif
				<th class="text-center">#</th>
				<th width="100%" class="text-center">Site</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 0; ?>
		    @foreach($rows as $row)
		    <?php $i++; ?>
		    @include('sites.index_row', ['row' => $row, 'i' => $i])
		    @endforeach
		</tbody>
		</table>
	</div>
	<div class="panel-footer">
		<div id="grid_pager">
            <form class="form-inline" style="text-align:center;" role="form">
                <div class="form-group form-group-sm">
                    <a class="btn btn-primary btn-sm first" title="First"><span class="glyphicon glyphicon-step-backward"></span></a>
                    <a class="btn btn-primary btn-sm prev" title="Previous"><span class="glyphicon glyphicon-backward"></span></a>
                    <input type="text" class="form-control input-sm text-center pagedisplay" disabled>
                    <a class="btn btn-primary btn-sm next" title="Next"><span class="glyphicon glyphicon-forward"></span></a>
                    <a class="btn btn-primary btn-sm last" title="Last"><span class="glyphicon glyphicon-step-forward"></span></a>
                    <select class="form-control input-sm pagesize" title="No. of items per page.">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option selected="selected" value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
            </form>
        </div>	
	</div>
</div>
<script type="text/javascript">
var _tsOptions = {
	headers:{
		0: { sorter: false}
		}
	};
</script>
@endsection