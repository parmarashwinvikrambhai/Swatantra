@include('admin.header')
@include('admin.sidebar')
<!--main content start-->
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
      Lawyer Apply For This Article
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">All Applied Articles</option>
          <option value="1">Latest</option>
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
      <th>Case ID</th>
      <th>Lawyer ID</th>
      <th>Lawyer Name</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Photo</th>
      <th>Signature</th>
      <th>Degree</th>
      <th>Case PDF</th>
      <th></th>
      <th>Actions</th>
      <th>Hire Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($lawyerData as $lawyer)
    <tr>
      <td>{{ $lawyer->case_id }}</td>
      <td>{{ $lawyer->lawyer_id }}</td>
      <td>{{ $lawyer->lawyer_name }}</td>
      <td><b>{{ $lawyer->email }}</b></td>
      <td>{{ $lawyer->mobile }}</td>
      <td>{{ $lawyer->photo }}
            <button class="fa fa-download">Download</button>
      </td>
      <td>{{ $lawyer->signature }}
            <button class="fa fa-download">Download</button>
      </td>
      <td>{{ $lawyer->degree }}
            <button class="fa fa-download">Download</button>
      </td>
      <td>{{ $lawyer->case_pdf }}
            <button class="fa fa-download">Download</button>
      </td>
      <td>
      <form action="{{ route('removeDocumentData')}}" method="POST">
          @csrf
          @method('delete')
          <input type="hidden" name="id" id="id" value="{{$lawyer['apply_id']}}">
          <td>
            <button type="submit" class="btn btn-danger">Remove</button>
          </td>
      </form>
       </td>
       <td>
        <form action="{{ route('hireLawyer', $lawyer->lawyer_id) }}" method="POST">  
            @csrf
              <input type="hidden" name="client_id" value="{{ $lawyer->client_id }}">
              <input type="hidden" name="case_id" value="{{ $lawyer->case_id }}">
              <button type="submit" class="btn btn-primary">Hire Lawyer</button>
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



