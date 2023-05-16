@include('admin.header')
@include('admin.sidebar')

@if(session('error'))
                <script>
                    alert("{{ session('error') }}");
                </script>
            @elseif(session('success'))
                <script>
                    alert("{{ session('success') }}");
                </script>
            @endif
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      All Cases
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">All Cases</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Case Id</th>
            <th>Client Id</th>
            <th>Client Name</th>
            <th>Case Title</th>
            <th>Case Type</th>
            <th>Case Date</th>
            <th>Case Details</th>
            <th>Case Status</th>
            <th style="width:30px;"></th> 
          </tr>
        </thead>
        <tbody>
            @foreach ($caseDetails as $val)
          <tr>
              <td>{{ $val['case_id'] }}</td>
              <td>{{ $val['client_id'] }}</td>
              <td>{{ $val['client_name'] }}</td>
              <td>{{ $val['case_title'] }}</td>
              <td>{{ $val['case_type'] }}</td>
              <td>{{ $val['case_date'] }}</td>
              <td>{{ $val['case_details'] }}</td>
              <td>{{ $val['case_status'] }}</td>
              <td>
                <form action="{{ route('removeCase')}}" method="POST">
                  @csrf
                  @method('delete')
                    <input type="hidden" name="id" id="id" value="{{$val['case_id']}}">
                  <td>
                    <button type="submit" class="btn btn-danger">Remove</button>
                  </td>
                </form>
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
<!-- </form> -->
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
</section>
@include('admin.footer')

</section>



