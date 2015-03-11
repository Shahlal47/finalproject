@extends('layouts.faq')

@section('content')

    {{--<h3>Create New Category</h3>--}}

    {{--{!! Form::model(new App\Category, ['route' => ['categories.store']]) !!}--}}

    @include('categories.partials.form1', ['submit_text' => 'Create New Category'])

    {{--{!! Form::close() !!}--}}
@endsection


<p>
<ul>

</ul>
</p>
