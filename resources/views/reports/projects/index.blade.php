@extends('layout.main')
@section('content')
<div class="row">
    <div class="col-md-12">
        <strong><h2 class="page-title">Project - Hours Spent</h3></strong>
     </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-content animated fadeInUp">
                @include('reports.projects.search')
                <div id="project_content">
                
                </div>


                    </div>

                </div>

            </div>

            </div>

@endsection
@section('after_scripts')
<script src="{{ asset('js/resources/reports/projects/script-min.js') }}"></script>
@endsection