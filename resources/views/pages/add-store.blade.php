@extends('layouts.default')
@section('content')
<div class="row" id="store_list">
	<div class="col-lg-12">
		<div class="box">
		   	<div class="row">
		   		<div class="col-md-7">
		   			<div class="panel">
		   				<div class="panel-heading">
		   					<h4>Setup API Credentials</h4>
		   				</div>
		   				<div class="panel-body">

							 <form>
							  <div class="form-group">
							    <label for="destination">Select a destination market.</label>
	                            <select class="form-control" name="destination_market" id="destination">
	                                <option value="ebay_us">eBay US</option>
	                            </select>
							  </div>

							  <button type="submit" class="btn btn-default pull-right">Authorize</button>
							</form> 

		   				</div>
		   			</div>
		   		</div>
		   	</div>
		</div>	
	</div>
</div>
@stop

