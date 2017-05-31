@extends('layouts.default')
@section('content')
<div class="row" id="store_list">
	<div class="col-lg-9">
		<div class="box">
		    <div class="row">

		    	<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
		    		<a href="#" class="is_store">
			    		<div class="well">
			    			<div class="text-center"><span class="ebay-logo"></span></div>
			    			<p class="store-name">Sample Static Store</p>
			    		</div>
		    		</a>
		    	</div>

		    	<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
		    		<a href="{{ url('/add-store') }}">
			    		<div class="well">
			    			<i class="fa fa-plus-circle"></i> add store
			    		</div>
		    		</a>
		    	</div>

		    </div>
		</div>	
	</div>
</div>
@stop

