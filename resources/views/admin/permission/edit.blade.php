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
              <h3 class="box-title">Permission</h3>
            </div>
            @include('includes.messages')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route ('permission.update',$permission->id)}}"> 
              @csrf
              {{ method_field('PUT') }}
              <div class="box-body">
                <div class=" col-lg-offset-3 col-lg-6">

                  <div class="form-group">
                  <label for="name">Permission Title</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{$permission->name}}">
                  </div>
                  <div class="form-group">
                    <label for="for">For</label>
                    <select name="for" id="for" class="form-control">
                      <option value="">Select Permission for</option>
                      <option value="Post" {{$permission->for == 'Post' ? 'selected':''}}>Post</option>
                      <option value="User" {{$permission->for == 'User' ? 'selected':''}}>User</option>
                      <option value="Other" {{$permission->for == 'Other' ? 'selected':''}}>Other</option>
                    </select>
                  </div>  
                <div class="form-group">
                <button type="submit" class="btn btn-success">Update</button>
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