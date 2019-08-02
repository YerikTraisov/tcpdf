@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{url('/')}}/css/dashboard/index.css">

<div class="container">
  <div class="card">
    <!-- page header -->
    <div class="card-header">
      <h2 class="text-center page-title">{{__('Dashboard')}}</h2>
      <div class="btn-group">
        <a href="{{route('generate-pdf')}}" class="btn-action" id="export_pdf" title="Export PDF File" download><img src="{{url('/')}}/img/pdf.png" width="40" height="40"></a>
      </div>
    </div>

    <!-- page body -->
    <div class="card-body">
      <table class="table table-striped" border="1" id="computers-table">
        <thead style="background-color:#0074D9;color:white;">
          <tr>
            <th data-index='0' data-sort="string" class="sortStyle">#</th>
            <th data-index='1' data-sort="string" class="sortStyle">{{__('User Name')}}</th>
            <th data-index='2' data-sort="string" class="sortStyle">{{__('Type')}}</th>
            <th data-index='3' data-sort="string" class="sortStyle">{{__('Hard Disk')}}</th>
            <th data-index='4' data-sort="string" class="sortStyle">{{__('Ram')}}</th>
            <th data-index='4' data-sort="string" class="sortStyle">{{__('Size')}}</th>
          </tr>
        </thead>
        <tbody>
          @foreach($computers as $computer)
          <tr data-id='{{ $computer->id }}'">
            <td>{{ $loop->index + 1}}</td>
            <td>{{ empty($computer->owner) ? "" : $computer->owner }}</td>
            <td>{{ empty($computer->type) ? "" : $computer->type }}</td>
            <td>{{ empty($computer->hard) ? "" : $computer->hard }}</td>
            <td>{{ empty($computer->ram) ? "" : $computer->ram }}</td>
            <td>{{ empty($computer->size) ? "" : $computer->size }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script src="{{url('/')}}/js/dashboard/index.js"></script>
  
  <script>
    var BASE_URL = "{{ action('DashboardController@index') }}";

    $('#computers-table').DataTable({
      responsive: true,
      "oLanguage": {
        "oAria": {
        "sSortAscending": "{{__('sorting ascending')}}",
        "sSortDescending": "{{__('sorting descending')}}"
        },
        "oPaginate": {
        "sFirst": "{{__('First')}}",
        "sLast": "{{__('Last')}}",
        "sNext": "{{__('Next')}}",
        "sPrevious": "{{__('Previous')}}"
        },
        "sEmptyTable": "{{__('No data available in table')}}",
        "sLengthMenu": "{{__('show _MENU_ entries')}}",
        "sLoadingRecords": "{{__('Loading...')}}",
        "sProcessing": "{{__('Processing...')}}",
        "sSearch": "{{__('Search')}}",
        "sZeroRecords": "{{__('No matching records found')}}",
        "sInfo": "{{__('Showing _START_ to _END_ of _TOTAL_ entries')}}",
        "sInfoEmpty": "{{__('No entries to show')}}",
        "sInfoFiltered": "{{__('filtered from _MAX_ total records')}}"
      }
    });
  </script>
@stop