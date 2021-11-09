@extends('layouts.admin')

@section('content')
					<div class="content-area">
						<div class="mr-breadcrumb">
							<div class="row">
								<div class="col-lg-12">
										<h4 class="heading">{{ __('City') }}</h4>
										<ul class="links">
											<li>
												<a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }} </a>
											</li>

											<li>
												<a href="{{ route('admin.city.index') }}">{{ __('City') }}</a>
											</li>
										</ul>
								</div>
							</div>
						</div>
						<div class="product-area">
							<div class="row">
								<div class="col-lg-12">
								<div class="heading-area">
									<h4 class="title">
										City :
									</h4>
                                    <a href="{{ route('admin.city.create') }}" class="btn btn-primary">Add City</a>
								</div>
									<div class="mr-table allproduct">

                                        @include('includes.admin.form-success')

										<div class="table-responsiv">
												<table id="geniustable" class="table table-hover dt-responsive" cellspacing="0" width="100%">
													<thead>
														<tr>
									                        <th>{{ __('Name') }}</th>
									                        <th>{{ __('Lat') }}</th>
									                        <th>{{ __('Lang') }}</th>
									                        <th>{{ __('State') }}</th>
									                        <th>{{ __('Option') }}</th>
														</tr>
													</thead>
                                                    <tbody>
                                                        @foreach ($data as $city)
                                                        <tr>
                                                            <td>{{ucfirst($city->name)}}</td>
                                                            <td>{{$city->latitude}}</td>
                                                            <td>{{$city->longitude}}</td>
                                                            <td>{{ucfirst($city->state)}}</td>
                                                            <td>
                                                                <a href="{{ route('admin.city.edit',$city) }}" class="btn btn-sm btn-primary">Edit</a>
                                                                <a onclick="confirmLink('{{ route('admin.city.delete',$city) }}')" class="btn btn-sm btn-danger">Delete</a>
                                                            </td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
												</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>




@endsection



@section('scripts')

    <script type="text/javascript">

		var table = $('#geniustable').DataTable();

    </script>
@endsection
