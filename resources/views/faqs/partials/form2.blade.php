{{--{!! Form::model(new App\Faq, ['route' => ['categories.faqs.store', $category->id]]) !!}--}}

{{--<div class="form-group">--}}
    {{--{!! Form::label('faq', 'Question:') !!}--}}
    {{--{!! Form::text('faq') !!}--}}
{{--</div>--}}

{{--<div class="form-group">--}}
    {{--{!! Form::label('created_by', 'Creator/Modifier:') !!}--}}
    {{--{!! Form::text('created_by') !!}--}}
{{--</div>--}}

{{--<div class="form-group">--}}
    {{--{!! Form::label('status', 'Published:') !!}--}}
    {{--{!! Form::checkbox('status') !!}--}}
{{--</div>--}}

{{--<div class="form-group">--}}
    {{--{!! Form::label('description', 'Answer:') !!}--}}
    {{--{!! Form::textarea('description') !!}--}}
{{--</div>--}}

{{--<div class="form-group">--}}
    {{--{!! Form::submit($submit_text) !!}--}}
{{--</div>--}}

{{--{!! Form::close() !!}--}}






<div class="page-container">
    <div class="page-content">
        <div class="container col-md-8-offset">
            <div class="tab-pane active">
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Update Question & Answer for {{ $category->category }}
                        </div>
                    </div>
                    <div class="portlet-body form">
                        {!! Form::model($faq, ['method' => 'PATCH', 'route' => ['categories.faqs.update', $category->id, $faq->id]]) !!}
                        <br><br><br>
                        <div class="form-horizontal">
                            <label class="col-md-3 control-label">Creator / Modifier:</label>
                            <div class="col-md-5">
                                <div class="input-group">
                                    {!! Form::text('created_by', null, array('class' => 'form-control input-circle', 'placeholder' => 'Admin/User/Creator' )) !!}
                                </div>
                            </div>
                        </div>
                        <br><br><br>
                        <div class="form-horizontal">
                            <label class="col-md-3 control-label">Publishing Status:</label>
                            <div class="col-md-5">
                                <div class="input-group">
                                    {!! Form::checkbox('status') !!}
                                </div>
                            </div>
                        </div>
                        <br><br><br>
                        <div class="form-body">
                            <div class="form-horizontal">
                                <label class="col-md-3 control-label">New Question: </label>
                                <div class="col-md-5">
                                    {!! Form::text('faq', null, array('class' => 'form-control input-circle', 'placeholder' => 'Enter New Question' )) !!}
                                </div>
                            </div>
                            <br><br><br>
                            <div class="form-horizontal">
                                <label class="col-md-3 control-label">Answer</label>
                                <div class="col-md-5">
                                    {!! Form::textarea('description', null, array('class' => 'form-control input-circle', 'rows' => 1, 'cols' => 100, 'placeholder' => 'Provide the Answer' )) !!}
                                </div>
                            </div>
                            <br><br><br>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-4 col-md-6">
                                        <button type="submit" class="btn btn-circle blue">Update Question and Answer</button>
                                        <button type="button" class="btn btn-circle purple">Cancel/Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>