@include('Backend.Layouts.header')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="{{route('dashboard')}}">Dashboard</a>
      
          <span class="breadcrumb-item active">Intro Form</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Intro Form</h4>
        <p class="mg-b-0">Please fill the following details</p>
      </div>
      @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Intro Form</h6>
          <p class="mg-b-30 tx-gray-600">You will be see this result in front end.</p>

          <div class="form-layout form-layout-1">
          <form method="POST" action="{{route('intro.store')}}">
          @csrf
            <div class="row mg-b-25">
              <div class="col-lg-8">
                <div class="form-group">
                  <label class="form-control-label">Title <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title" placeholder="Write title about your profile">
                </div>
              </div><!-- col-4 -->
             
              
              <div class="col-lg-8">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Description <span class="tx-danger">*</span></label>
                  <input class="form-control" type="textarea" name="description" placeholder="Write more about yourself">
                </div>
              </div><!-- col-8 -->
             
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info" type="submit">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
            </form>
          </div><!-- form-layout -->


          

        
        

        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
      

    @include('Backend.Layouts.footer')
    <script>
      $(function(){
        'use strict'

        $('.form-layout .form-control').on('focusin', function(){
          $(this).closest('.form-group').addClass('form-group-active');
        });

        $('.form-layout .form-control').on('focusout', function(){
          $(this).closest('.form-group').removeClass('form-group-active');
        });

        // Select2
        $('#select2-a, #select2-b').select2({
          minimumResultsForSearch: Infinity
        });

        $('#select2-a').on('select2:opening', function (e) {
          $(this).closest('.form-group').addClass('form-group-active');
        });

        $('#select2-a').on('select2:closing', function (e) {
          $(this).closest('.form-group').removeClass('form-group-active');
        });

      });
    </script>
  
  