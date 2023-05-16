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
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Hired Cases
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">All Hired Cases</option>
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
            <th>Lawyer Id</th>
            <th>Client Id</th>
            <th>Case ID</th>
            <th>Client Name</th>
            <th>Case Title</th>
            <th>Case Date</th>
            <th>Case Details</th>
            <th>Donation</th>
            <th>Remove</th> 
          </tr>
        </thead>
        <tbody>
            @foreach ($hiredData as $hired)
          <tr>
              <td>{{ $hired['lawyer_id'] }}</td>
              <td>{{ $hired['client_id'] }}</td>
              <td>{{ $hired['case_id'] }}</td>
              <td>{{ $hired['client_name'] }}</td>
              <td>{{ $hired['case_title'] }}</td>
              <td>{{ $hired['case_date'] }}</td>
              <td>{{ $hired['case_details'] }}</td>
              <td><span class="input-group-btn">
              <form action="{{ route('getDonationReq')}}" method="POST">
            @csrf
            @method('POST')
            <input type="hidden" id="client" name="client_id" value="{{ $hired['client_id']}}">
            <input type="hidden" id="case_id_popup" name="case_id" value="{{ $hired['case_id']}}">
                <button type="submit" class="btn btn-primary">Apply Donation</button>
        </form>
          </span></td>
          <td><span class="input-group-btn">
              <form action="{{ route('removeHireLawyer')}}" method="POST">
                  @csrf
                  @method('delete')
                    <input type="hidden" name="id" id="id" value="{{$hired['hire_id']}}">
                    <td>
                    <button type="submit" class="btn btn-danger">Remove</button>
                    </td>
              </form>
          </span></td>
          </tr> 
          @endforeach
        </tbody>
      </table>
<!-- </form> -->
    </div>

    <script>
  // When the user clicks the apply donation button, add the value of the hidden field to the URL query string
  const applyBtns = document.querySelectorAll('button[type="submit"]');
  applyBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      const caseId = e.target.closest('form').querySelector('input[name="id"]').value;
      const url = '{{ route("getDonationReq") }}?case_id=' + encodeURIComponent(caseId);
      window.location.href = url;
      e.preventDefault();
    });
  });
</script>
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