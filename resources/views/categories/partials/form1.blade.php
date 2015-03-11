

{{--{!! Form::model(new App\Category, ['route' => ['categories.store']]) !!}--}}

    {{--<div class="form-group">--}}
        {{--{!! Form::label('category', 'Category:') !!}--}}
        {{--{!! Form::text('category') !!}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--{!! Form::label('description', 'Description:') !!}--}}
        {{--{!! Form::text('description') !!}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--{!! Form::label('created_by', 'Creator/Modifier:') !!}--}}
        {{--{!! Form::text('created_by') !!}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--{!! Form::submit($submit_text, ['class'=>'btn primary']) !!}--}}
    {{--</div>--}}

{{--{!! Form::close() !!}--}}




<div class="page-container">
    <div class="page-content">
        <div class="container col-md-8-offset">
            <div class="tab-pane active">
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Add/Create New Category
                        </div>
                    </div>
                    <div class="portlet-body form">
                        @foreach( $errors->all() as $error )
                            <li>{{$error}}</li>
                        @endforeach
                        {!! Form::model(new App\Category, ['route' => ['categories.store']]) !!}
                            <div class="form-body">
                                <div class="form-horizontal">
                                    <br><br><br>
                                    <label class="col-md-3 control-label">New Category Name: </label>
                                    <div class="col-md-5">
                                        {!! Form::text('category', null, array('class' => 'form-control input-circle', 'placeholder' => 'Enter Category Name' )) !!}
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="form-horizontal">
                                    <label class="col-md-3 control-label">Creator / Modifier:</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            {!! Form::text('created_by', null, array('class' => 'form-control input-circle-left', 'placeholder' => 'Enter Creator or User Name' )) !!}
                                                <span class="input-group-addon input-circle-right">
                                                <i class="fa fa-user"></i>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="form-horizontal">
                                    <label class="col-md-3 control-label">Description</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            {!! Form::textarea('description', null, array('class' => 'form-control input-circle', 'rows' => 1, 'cols' => 100, 'placeholder' => 'Write something about the Category' )) !!}
                                        </div>
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-4 col-md-6">
                                            <button type="submit" class="btn btn-circle blue">Create Category</button>
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