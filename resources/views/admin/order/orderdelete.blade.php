@extends('admin.master')

@push('css')
    <style>
        table.item_table {
            border-collapse: collapse;
        }
        table.item_table tbody tr td, table.item_table thead tr th {
            border: 1px solid #d3d3d3;
            border-collapse: collapse;
            text-align: center;
        }
        table.item_table thead tr th{
            background: #f3f3f3;
            font-weight: 900;
        }
        @media print {
            body {-webkit-print-color-adjust: exact;}
            h1 {
                background: #139ff7;
            }
            #printPageButton {
                display: none;
            }
            .col-lg-6 {
                float: left;
            }
            @media (min-width: 992px) {
                .col-lg-6 {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
            }
        }



    </style>

@endpush
@section('body')
    <div id="app">
        <invoice-component-update></invoice-component-update>
    </div>
    <script type="text/javascript" src="{{ asset('js\app.js') }}"></script>
@endsection
