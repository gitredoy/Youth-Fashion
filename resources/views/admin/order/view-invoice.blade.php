@extends('admin.master')

@section('body')

<div id="app">
    <invoice-component></invoice-component>
</div>
<script type="text/javascript" src="{{ asset('js\app.js') }}"></script>
@endsection
