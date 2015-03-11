@extends('layouts.faq')

@section('content')
    {{--<h2>Create New Question(s) for {{ $category->category }}</h2>--}}

    {{--{!! Form::model(new App\Faq, ['route' => ['categories.faqs.store', $category->id]]) !!}--}}

    @include('faqs.partials.form1', ['submit_text' => 'Create New Question'])

    {{--{!! Form::close() !!}--}}

@endsection