@extends('layouts/faq')

@section('content')
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>FAQ Page <small>general faq sample</small></h1>
			</div>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PAGE TOOLBAR -->
			<div class="page-toolbar">

                <a href="{{URL::to('/faq')}}">Logout/Sign Out</a>

			</div>
			<!-- END PAGE TOOLBAR -->
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="portlet light">
				<div class="portlet-body">
					<div class="row">
                            <h2>List of All Categories</h2>

                            @if ( !$categories->count() )
                                You have no categories
                            @else
							<table class="table">
								<thead>
								<tr>
									<th>Serial Number</th>
									<th>Category Name</th>
									<th>Description</th>
									<th>Created By</th>
									<th>Created Time</th>
									<th>Action(s)</th>
								</tr>
								</thead>
								<tbody>
                                    @foreach( $categories as $category )
										<tr>
											<td>{{ $category->id }}</td>
											<td><a href="{{ route('categories.show', $category->id) }}">{{ $category->category }}</a></td>
											<td>{{ $category->description }}</td>
											<td>{{ $category->created_by }}</td>
											<td>{{ $category->created_at }}</td>
											<td>
												{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('categories.destroy', $category->id))) !!}
												{!! link_to_route('categories.show', 'View', array($category->id), array('class' => 'btn btn-info')) !!}
												{!! link_to_route('categories.edit', 'Edit', array($category->id), array('class' => 'btn btn-info')) !!}
												{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
												{!! Form::close() !!}
                                        	</td>
										</tr>
                                    @endforeach
                                </tbody>
								</table>
                            @endif
                            <p>{!! link_to_route('categories.create', 'Create New Category') !!}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection