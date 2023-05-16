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
      All Users
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">All Users</option>
          <option value="0">Latest Users</option>
          <option value="1">Clients Only</option>
          <option value="2">Lawyers Only</option>
          <option value="3">Who Register In Last 10 Days</option>
          <option value="4">Who Register In Last 3 Months</option>
          <option value="5">Who Register In Last 6 Months</option>
          <option value="6">Who Register In Last 10 Days/clients</option>
          <option value="7">Who Register In Last 3 Months/clients</option>
          <option value="8">Who Register In Last 6 Months/clients</option>
          <option value="9">Who Register In Last 10 Days/Lawyers</option>
          <option value="10">Who Register In Last 3 Months/Lawyers</option>
          <option value="10">Who Register In Last 6 Months/Lawyers</option>

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
            <th>ID</th>
            <th>Category</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
            <th style="width:30px;"></th> 
          </tr>
        </thead>
        <tbody>
        <?php 
        //$count = ''; ?>

        <!-- @php $count = 0; @endphp -->
                            @foreach ($views as $val)
                                <!-- {{ $count++ }} -->
          <tr>
          <!-- <td>{{ $count }}</td> -->

              <td>{{ $val['id'] }}</td>
              <td>{{ $val['category'] }}</td>
              <td>{{ $val['firstname'] }}</td>
              <td>{{ $val['email'] }}</td>
              <td><span class="input-group-btn">
                <form action="{{ route('destroy', $val['id']) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Remove</button>
                </form>
              {{--<a href="{{ route('destroy', ['id' => $val['id']]) }}">
              </a>
            <button class="btn btn-primary" type="button">View</button>--}}
          </span></td>
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



