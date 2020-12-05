@extends('admin.layouts.app')
@section('title')
      Agences
@endsection

@section('header')

@endsection
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Liste des agences</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/agence')}}">Liste des agences</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

    </div>
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
             <div class="card-header row">
              <h3 class="card-title col-md-2">Liste des agences</h3>
              <form class="card card-sm col-md-7" action="{{url('/admin/search_agence')}}" method="get">
        {{ csrf_field()}}
         <div class=" row no-gutters align-items-center">
             <div class="col-md-10 col-sm-12">
                 <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Agence ,Type d'agence ,wilaya, .." name="agence">
             </div>
                                    <!--end of col-->
            <div class="col-md-2 col-sm-12">
                 <button class="btn btn-lg btn-info" type="submit" name="search">Rechercher</button>
             </div>
                                    <!--end of col-->
         </div>
     </form>
             <div class="col-md-3 col-sm-12">
                <a href="{{url('/admin/agence/create')}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Ajouter une agences</a>
             </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="150">AGENCES</th>
                  <th width="150">TYPE</th>
                  <th width="150">ADRESS</th>
                  <th width="100">ACTION</th>
                </tr>
                </thead>
                <tbody>
                	@if(count($agences) == 0)
                        <tr>
                        	<td colspan="4" style="color: red;font-weight: bold" align="center">LA LISTE DES AGENCES EST VIDE</td>
                        </tr>
                	@else
                  @foreach($agences as $agence)
                  
                <tr>
                  <td>{{$agence->name}}</td>
                  <td>{{$agence->type_agence}}</td>
                  <td>{{$agence->wilaya}} - {{$agence->ville}}</td>
                  <td>
                    <a class="btn btn-info fa  fa-eye-slash" href="{{'/admin/agence/'.$agence->id}}"></a>
                    <a class="btn btn-warning fa fa-btn fa-edit" href="{{'/admin/agence/'.$agence->id.'/edit'}}"></a>
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                        <a class="btn btn-danger far fa-trash-alt" href="{{'/admin/agence/'.$agence->id.'/delete'}}"></a>
                  </td>
                </tr>
          
                 @endforeach
                 @endif
                </tbody>
                <tfoot>
                <tr>
                         <th width="150">AGENCES</th>
                  <th width="150">TYPE</th>
                  <th width="150">ADRESS</th>
                  <th width="100">ACTION</th>
                </tr>
                </tfoot>
              </table>
            </div>
            {{$agences->links()}}
          </div>
        </div>
      </div>
    </section>
@endsection
@section('footer')

@endsection