@include('Backend.Layouts.header')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="{{route('dashboard')}}">Dashboard</a>
          <span class="breadcrumb-item active">Intro Table</span>
        </nav>
      </div><!-- br-pageheader -->
      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
      @endif
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Intoduction Table</h4>
        <a href="{{route('intro.create')}}" class="btn btn-primary" style="float:right;">Add Intro</a>
        <p class="mg-b-0"> Here are list of introductions</p>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Introduction table</h6>
        

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">S.N</th>
                  <th class="wd-15p">Title</th>
                  <th class="wd-20p">Description</th>
                  <th class="wd-15p">Action</th>
                </tr>
              </thead>
              <tbody>
             @foreach($intro as $in)
                <tr>
                  <td>1</td>
                  <td>{{$in->title}}</td>
                  <td>{{$in->description}}</td>
                  <td></td>
                  
                </tr>
              @endforeach
                 
              </tbody>
            </table>
          </div><!-- table-wrapper -->


        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
      <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2023. Lautan Tharu. All Rights Reserved.</div>
      
        </div>
        
      </footer>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/popper.js/popper.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>
    <script src="lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="lib/moment/moment.js"></script>
    <script src="lib/jquery-ui/jquery-ui.js"></script>
    <script src="lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="lib/peity/jquery.peity.js"></script>
    <script src="lib/highlightjs/highlight.pack.js"></script>
    <script src="lib/datatables/jquery.dataTables.js"></script>
    <script src="lib/datatables-responsive/dataTables.responsive.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>

    <script src="js/bracket.js"></script>
    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
  </body>

<!-- Mirrored from themepixels.me/demo/bracket/app/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Jun 2023 18:40:19 GMT -->
</html>
