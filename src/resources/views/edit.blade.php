@extends('web::layouts.app')

@section('title', 'Recruitment Guide - Edit')
@section('page_header', 'Recruitment Guide - Edit')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Edit Recruitment Guide</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('seat-busa-onboarding::store') }}">
                @csrf
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="markdown-editor" rows="15">{{ old('content', $content ?? '') }}</textarea>
                    @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="card-footer">
            Last Updated By: {{$content->updated_by->name ?? 'N/A'}}
        </div>
      </div>

    </div>
</div>
@stop

@push('javascript')
<style>
    .CodeMirror {
        border: 1px solid #35354f;
    }
    .editor-toolbar {
        background-color: #eee;
    }
    .CodeMirror-cursor {
        border-left: 1px solid #222 !important; 
    }
    .editor-toolbar button.active, .editor-toolbar button:hover {
        background: #a8a8a8 !important;
    }
    .EasyMDEContainer .CodeMirror-fullscreen {
        left: 250px !important;
    }
    .editor-preview {
        color: #282828 !important;
    }
    .editor-toolbar.fullscreen {
        top: 50px !important;
        left: 250px !important;
        background-color: #eee !important;
    }
    .EasyMDEContainer .CodeMirror-fullscreen {
        margin-top: 40px !important
    }
    </style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.css">
<script src="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.js"></script>
<script>
    var easyMDE = new EasyMDE({
        element: document.getElementById("markdown-editor"),
        initialValue: `{!! old('content', $content->content ?? '') !!}`,
    });
</script>
@endpush