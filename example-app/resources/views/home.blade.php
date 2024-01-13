@extends('layouts.default')

@section('title','Homepage')

@section('content')
<!--content Header-->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
             <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Personal Information</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-personal">
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputSurname" class="col-sm-2 col-form-label">Surname</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSurname" placeholder="Surname">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputBirthday" class="col-sm-2 col-form-label">Surname</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputBirthday" placeholder="Birthday">
                        </div>
                    </div>



                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck2">
                          <label class="form-check-label" for="exampleCheck2">Remember me</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Sign in</button>
                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
              <!-- /.card -->
        </div>
        <!--/.col (left) -->

         <!-- right column -->
         <div class="col-md-6">

         </div>
         <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
