@extends('layouts.app')

@section('content')


@php
     /*use Carbon\Carbon;
     $today_date = Carbon::now();
     foreach ($orders as  $order) {
         $DateExpy = Carbon::createFromFormat('Y-m-d', $order->dateexpiration);
         $betweenTime = $today_date->diffInDays($dateexpiration, false);

         if($betweenTime > 0)
         {
             $boolExpy = False;
         }
         elseif($betweenTime <= 0)
         {
             $boolExpy = True;

         }
     }*/
    $date = date('Y-m-d H:i:s');
@endphp

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center"><h3>Your {{ __('account') }}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <main role="main">
                            <div class="container marketing">

                                <!-- Three columns of text below the carousel -->
                                <div class="row">
                                  <div class="col-lg-4">
                                    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                                    <h2>Heading</h2>
                                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                                  </div><!-- /.col-lg-4 -->
                                  <div class="col-lg-4">
                                    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                                    <h2>Heading</h2>
                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                                  </div><!-- /.col-lg-4 -->
                                  <div class="col-lg-4">
                                    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                                    <h2>Heading</h2>
                                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                                  </div><!-- /.col-lg-4 -->
                                </div><!-- /.row -->
                                <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
              <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
              <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
            </div>
          </div>

          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
              <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
            </div>
          </div>

          <hr class="featurette-divider">
          @if ($orders != NULL)
          <h3>Vos commandes</h3>
          @endif
          <table class="table">
            @if ($orders != NULL)
            <thead>
              <tr>
                <th scope="col">N° Order</th>
                <th scope="col">N° Product</th>
                <th scope="col">Country</th>
                <th scope="col">Expiry</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order )
                @php
                /*$date_today = Carbon::createFromFormat('Y-m-d', $date);
                $expire_date = Carbon::createFromFormat('Y-m-d', $order->dateexpiration);
                $betweenTime = $date_today->diffInDays($expire_date, false);
                echo $betweenTime;*/
                @endphp
                @if ($order != NULL)
              <tr>
                <th scope="row">{{$order ->id}}</th>
                <td>{{$order ->id_product}}</td>
                <td>{{$order ->country}}</td>
                <td>{{$order ->dateexpiration}}</td>
                <td>
                     @if ($order ->suspendu == "non")
                     <a href="stop/{{$order ->id}}">
                    <i class="fas fa-power-off" aria-hidden="true" style="color: green"></i>
                    @else
                    <a href="start/{{$order ->id}}">
                    <i class="fas fa-power-off" aria-hidden="true" style="color: red"></i>
                    @endif
                </a></td>
              </tr>
              @endif
              @endforeach
              @endif
            </tbody>
          </table>

          <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->
    </main>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
