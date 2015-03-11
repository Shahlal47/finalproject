@extends('layouts/faq')

@section('content')
    <div class="page-container">
        <div class="page-head">
            <div class="page-content">
                <div class="container">
                    <div class="portlet light">
                        <div class="portlet-body">
                            <div class="row">
                                <h3>List of All Questions of {{ $category->category }}</h3>

                                @if ( !$category->faqs->count() )
                                    Your category has no Question(s).
                                @else
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Serial Number</th>
                                                <th>Question</th>
                                                <th>Answer</th>
                                                <th>Status</th>
                                                <th>Created By</th>
                                                <th>Created Time</th>
                                                <th>Action(s)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $category->faqs as $faq )
                                            <tr>
                                                <td>{{ $faq->id }}</td>
                                                <td>{{ $faq->faq }}</td>
                                                <td>{{ $faq->description }}</td>
                                                <td>{{ $faq->status }}</td>
                                                <td>{{ $faq->created_by }}</td>
                                                <td>{{ $faq->created_at }}</td>
                                                <td>
                                                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('categories.faqs.destroy', $category->id, $faq->id))) !!}
                                                    {{--{!! link_to_route('categories.faqs.show', 'View', array($category->id, $faq->id), array('class' => 'btn btn-info')) !!}--}}
                                                    {!! link_to_route('categories.faqs.edit', 'Edit', array($category->id, $faq->id), array('class' => 'btn btn-info')) !!}
                                                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @endif

                                <p>
                                    {!! link_to_route('categories.index', 'Back to Category List') !!} |
                                    {!! link_to_route('categories.faqs.create', 'Create New Faq/Faqs', $category->id) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
