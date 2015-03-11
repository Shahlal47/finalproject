@extends('layouts/faq')

@section('content')

    {{--<h3>Update Faq "{{ $faq->faq }}"</h3>--}}

    {{--{!! Form::model($faq, ['method' => 'PATCH', 'route' => ['categories.faqs.update', $category->id, $faq->id]]) !!}--}}

    @include('faqs.partials.form2')

    {{--{!! Form::close() !!}--}}

@endsection