
@extends('layouts/faq')

<div class="portlet light">
    <div class="portlet-body">
        <div class="row">

            <div class="col-md-3">
                <ul class="ver-inline-menu tabbable margin-bottom-10">

                    @if ( !$categories->count() )
                        You have no categories
                    @else
                        <ul>
                            @foreach( $categories as $category )
                                <li>

                                    {{ $category->category }}

                                </li>
                            @endforeach
                        </ul>
                    @endif

                </ul>
            </div>
        </div>
    </div>
</div>



