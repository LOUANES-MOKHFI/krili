@extends('admin.layouts.app')
@section('title')
      Demandes
@endsection

@section('header')

@endsection
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Liste des demande</h1>
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
              <h3 class="card-title col-md-2">Liste des demande</h3>
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
                        	<td colspan="4" style="color: red;font-weight: bold" align="center">LA LISTE DES Demandes EST VIDE</td>
                        </tr>
                	@else
                  @foreach($agences as $agence)
                  
                <tr>
                  <td>{{$agence->name}}</td>
                  <td>{{$agence->type_agence}}</td>
                  <td>{{$agence->wilaya}} à {{$agence->ville}}</td>
                  <td>
                  	<a class="btn btn-info fa  fa-eye-slash" href="{{'/admin/demande/'.$agence->id}}">Voir</a>
                    <a class="btn btn-info" href="{{'/admin/demande/'.$agence->id.'/confirmer'}}">Confirmer</a>
                    <a class="btn btn-warning" href="{{'/admin/demande/'.$agence->id.'/rejeter'}}">Rejeter</a>
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