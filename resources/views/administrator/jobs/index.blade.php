@extends('administrator.layouts.admin')



@section('content')

<div class="col-12">

	@if($jobs)
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="" class="table table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Slug</th>
								<th>Type</th>
								<th>Salary</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($jobs as $value)
							<tr>
								<td>{{ $value->name }}</td>													
								<td>{{ $value->slug }}</td>													
								<td>{{ $value->type }}</td>													
								<td>{{ $value->salary }}</td>													
								<td>
									<a href="{{ url('administrator/view-job') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Edit</a>
									<a href="{{ url('administrator/delete-job') }}/{{ $value->id }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?')"; >Delete </a>
								</td>
							</tr>
							@endforeach							
						</tbody>
					</table>
				</div>
			</div>

		</div>

	@endif

</div>                   

@endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection

