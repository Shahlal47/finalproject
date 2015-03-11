@extends('layouts/faq')

@section('content')
    <h2>
        {!! link_to_route('categories.show', $category->category, [$category->id]) !!} -
        {{ $faq->faq }}
    </h2>

    {{ $faq->description }}

@endsection


