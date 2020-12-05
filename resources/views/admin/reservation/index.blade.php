@extends('admin.layouts.app')
@section('title')
      Les reservation
@endsection

@section('header')

@endsection
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Liste des reservations</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/reservation')}}">Liste des reservations</a></li>
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
              <h3 class="card-title col-md-2">Liste des reservations</h3>
            </div>
              <h2>{{$type_agence}}</h2>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                 
                <tr>
                  <th width="150">DATE DE RESERVATION</th>
                  <th width="150">DATE FIN DE RESERVATION</th>
                  <th width="100">ACTION</th>
                </tr>
                

               
                </thead>
                <tbody>
                	@if(count($reservations) == 0)
                        <tr>
                        	<td colspan="4" style="color: red;font-weight: bold" align="center">LA LISTE DES RESERVATIONS EST VIDE</td>
                        </tr>
                	@else
                  @foreach($reservations as $reservation)
                  
                <tr>
                  <td>{{$reservation->date_reservation}}</td>
                  <td>{{$reservation->date_fin_reservation}}</td>
                  <td>
                    <a class="btn btn-info fa  fa-eye-slash" href="{{'/admin/reservation/'.$reservation->id}}"></a>
                   
                  </td>
                </tr>
          
                 @endforeach
                 @endif
                </tbody>
                <tfoot>
                <tr>
                  <th width="150">DATE DE RESERVATION</th>
                  <th width="150">DATE FIN DE RESERVATION</th>
                  <th width="100">ACTION</th>
                </tr>
                </tr>
                </tfoot>
              </table>
            </div>
            {{$reservations->links()}}
          </div>
        </div>
      </div>
    </section>
@endsection
@section('footer')

@endsection