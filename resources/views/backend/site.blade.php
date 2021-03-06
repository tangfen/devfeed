@extends('backend.layout')

@section('pageTitle', '站点管理')

@section('extraMeta')

@endsection

@section('content')
    <h1 class="page-header">站点管理</h1>

    <div class="row">
        <div class="col-md-12" id="quotaApp">
            <site-list></site-list>
            <div class="container page_container">
                <nav>
                    <ul class="pagination pull-right">

                    </ul>
                </nav>
            </div>

        </div>
    </div>
@endsection

@section('pageScript')
    @include('backend.partial.vue-foot')
    <script src="{{ mix('js/quotas.js') }}"></script>
@endsection
