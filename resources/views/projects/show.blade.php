@extends('layout')

@section('styles')
    <style>
        .project.page, .keywords {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            list-style-type: none;
            padding-top: 50px;
        }

        .page_container {
            width: 300px;
        }

        .modal.show {
            display: block;
        }
    </style>
@endsection

@section('content')

<div class="project page">
    <div class='page_container'>
        <div class="project-name">
            Name: {{$project[0]['name']}}
        </div>

        <div class="project-description">
            Description: {{$project[0]['description']}}
        </div>

        <div style="margin-top: 50px;">
            <span>Keywords</span>
            <a href="javascript:void(0)" onclick="show_modal()" style="float:right">+Keyword</a>
            <ul class="keywords">
                @foreach($project[0]['keywords'] as $keyword)
                    <li class='keyword_item'>{{$keyword->keyword_name}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" role="dialog">
    <div class="modal-dialog" style="max-width:500px;">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h3>+Add keywords</h3>
            </div>
            <div class="modal-body">
                <div class='form-group'>
                    <form id="malfunction-form" style="width:100%;">
                        {{method_field('PUT')}}
                        <input type="text" name="keywords" value="<?php !empty($project[0]['keywords']) ? $project[0]['keywords']  : ''?>" style="width:100%">
                    </form>
                </div>
            </div>
            <div class="cb"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="save();"><i class='fa fa-save'></i>  Save</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript">
        var PROJECT_ID = "{{ $project[0]['id'] }}",
            SAVE_URL = "{{ action('ProjectController@update', $project[0]['id']) }}";

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function show_modal() {
            $('.modal').addClass('show');
        }

        function hide_modal() {
            $('.modal').removeClass('show');
        }

        function save() {
            hide_modal();
            var form_data = $('#malfunction-form').serialize();

            $.ajax({
                url: SAVE_URL,
                method: 'PUT',
                data: form_data,
                success: function (data) {
                    window.location.reload();
                }
            });
        }
    </script>
@stop