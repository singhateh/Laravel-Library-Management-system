@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Issue a new Book</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid">
                <div class="control-group">
                    <label class="control-label">Student ID</label>
                    <div class="controls">
                        <input type="number" id="issue_student_id" data-form-field="student-issue-id" placeholder="Enter the student code here" class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Book ID</label>
                    <div class="controls">
                        <input type="number" id="issue_book_id" data-form-field="book-issue-id" placeholder="Enter the book code here" class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="button" class="btn btn-inverse" id="issuebook">Issue Book</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="module">
        <div class="module-head">
            <h3>Return a Book</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid">
                <div class="control-group">
                    <label class="control-label">Book ID</label>
                    <div class="controls">
                        <input type="number" id="return_book_id" data-form-field="book-issue-id" placeholder="Enter the book code here" class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="button" class="btn btn-inverse" id="returnbook">Return Book</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <input type="hidden" id="_token"  data-form-field="token"  value="{{ csrf_token() }}">
</div>
@stop

@section('custom_bottom_script')
<script type="text/javascript" src="{{asset('static/custom/js/script.logs.js') }}"></script>
<script type="text/template" id="all_logs_display">
    @include('underscore.all_logs_display')
</script>
@stop