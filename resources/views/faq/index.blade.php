@extends('layouts/faq')

@section('content')

<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>FAQ Page <small>General Frequently Ask Questions</small></h1>
			</div>
			<!-- END PAGE TITLE -->

			<!-- BEGIN PAGE TOOLBAR -->
			<div class="page-toolbar">
				<a href="{{URL::to('/categories')}}">Admin/User</a>
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
						<div class="col-md-3">
							<ul class="ver-inline-menu tabbable margin-bottom-10">

								@if ( !$categories->count() )
									<h4>You have no FAQ Categories</h4>
								@else
									@foreach( $categories as $category )
										<li>
											{{--{!! Form::open(array('class' => 'form-inline', 'method' => 'SHOW', 'route' => array('categories.show', $category->id))) !!}--}}
											<a data-toggle="tab" href="#tab_{{ $category->id }}">
												<i class="fa fa-briefcase"></i>{{ $category->category }}
											</a>
											<span class="after"></span>
											{{--{!! Form::close() !!}--}}
										</li>

									@endforeach
								@endif
							</ul>
						</div>

						<div class="col-md-9">
							<div class="tab-content">

								<div id="tab_1">
									<div id="accordion1" class="panel-group">
										@if ( !$faqs->count() )
											<h4>You have no any Frequently Ask Question and Answer</h4>
										@else
											@foreach( $faqs as $faq )
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="accordion1_{{ $faq->id }}">
																{{ $faq->faq }}
															</a>
														</h4>
													</div>
													<div id="accordion1_{{ $faq->id }}" class="panel-collapse collapse in">
														<div class="panel-body">
															{{ $faq->description }}
														</div>
													</div>
												</div>
											@endforeach
										@endif
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection


