@extends('admin_layout')
@section('admin_content')

    <div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break">Customer Details</h2>
					</div>
					<div class="box-content">
						<table class="table">
							  <thead>
								  <tr>
									  <th>Username</th>
									  <th>Mobile</th>
								  </tr>
							  </thead>
							  <tbody>
								<tr>
                                    @foreach($order_by_id as $v_orders)
                                    @endforeach
                                    <td>{{$order_by_id->customer_name}}</td>
									<td>{{$order_by_id->mobile_number}}</td>
								</tr>
							  </tbody>
						 </table>
					</div>
                </div>

                <div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break">Shipping Details</h2>
					</div>
					<div class="box-content">
						<table class="table">
							  <thead>
								  <tr>
									  <th>Username</th>
                                      <th>Address</th>
                                      <th>Mobile</th>
                                      <th>Email</th>
								  </tr>
							  </thead>
							  <tbody>
								<tr>
									<td>{{$order_by_id->shipping_first_name}}</td>
                                    <td>{{$order_by_id->shipping_address}}</td>
                                    <td>{{$order_by_id->shipping_mobile_number}}</td>
                                    <td>{{$order_by_id->shipping_email}}</td>
								</tr>
							  </tbody>
						 </table>
					</div>
			    </div>
    </div>

    <div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Order Details</h2>

					</div>
					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">
							  <thead>
								  <tr>
                                    {{-- <th>ID</th> --}}
                                    <th>Product Name</th>
									<th>Product Price</th>
									<th>Product Sales Quantity</th>
									<th>Product Sub Total</th>
								  </tr>
							  </thead>
							  <tbody>
                                  @foreach($order_by_id as $v_orders)
								<tr>
									{{-- <td>{{$v_orders->order_id}}</td> --}}
									<td>{{$v_orders->product_name}}</td>
									<td>{{$v_orders->product_price}}</td>
                                    <td>{{$v_orders->product_sales_quantity}}</td>
                                    <td>{{$v_orders->product_price*$v_orders->product_sales_quantity}}</td>

                                </tr>
                                  @endforeach
                                  {{-- <tr><td>{{$order_by_id->order_total}} tk</td></tr> --}}
                              </tbody>
                              <tfoot>
                                <tr>
                                    <td colspan="4">Total</td>
                                    <td>{{$v_orders->order_total}}</td>
                                </tr>
                              </tfoot>
						 </table>
						 <!-- <div class="pagination pagination-centered">
						  <ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						  </ul>
						</div>    -->
					</div>
				</div><!--/span-->
			</div><!--/row-->
@endsection
