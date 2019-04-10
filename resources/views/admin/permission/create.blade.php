@extends('admin/layouts/app')

@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
        	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Permission</h3>
            </div>
            @include('includes.messages')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('permission.store')}}"> 
              @csrf
              <div class="box-body">
                <div class=" col-lg-offset-3 col-lg-6">

                  <div class="form-group">
                    <label for="name">Permission</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Permission">
                  </div>
                  <div class="form-group">
                    <label for="for">For</label>
                    <select name="for" id="for" class="form-control">
                      <option selected disabled>Select Permission for</option>
                      <option value="Post">Post</option>
                      <option value="User">User</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>  
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route ('permission.index')}}" class="btn btn-danger">Cancel</a>
              </div>
                </div> 
              <!-- /. tools -->

            </div> 

          </div>
              
            </form>
          </div>

           
          <!-- /.box -->

          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

  @endsection