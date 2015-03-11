@extends('layouts/faq')

@section('content')

    {{--<h3>Update {{ $category->category }} Category</h3>--}}

   {{--{{var_dump($category)}}--}}

   {{--{!! Form::model($category, ['method' => 'PATCH', 'route' => ['categories.update', $category->id]]) !!}--}}

        @include('categories/partials/form2', ['submit_text' => 'Update this Category'])

   {{--{!! Form::close() !!}--}}

@endsection