@extends('layouts.app')

@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">PRICING</h1>
    <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
  </div>
  <div class="container">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">

          <h4 class="my-0 font-weight-normal">{{$product[0] ->name}}</h4>

        </div>

        <form action="/buying/{{$product[0] ->id}}" method="GET">
        <div class="card-body">
          <h1 class="card-title pricing-card-title">${{$product[0]->price}} <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>{{$product[0]->description1}}</li>
            <li>{{$product[0]->description2}}</li>
            <li>{{$product[0]->description3}}</li>
            <li>{{$product[0]->description4}}</li>
          </ul>
          <button type="submit"  class="btn btn-lg btn-block btn-outline-success">Get started free</button>
        </div>
      </div>
    </form>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">{{$product[1]->name}}</h4>
        </div>
       <form  action="/buying/{{$product[1] ->id}}" method="GET">
        <div class="card-body">
          <h1 class="card-title pricing-card-title">${{$product[1]->price}} <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>{{$product[1]->description1}}</li>
            <li>{{$product[1]->description2}}</li>
            <li>{{$product[1]->description3}}</li>
            <li>{{$product[1]->description4}}</li>
          </ul>
          <button type="submit" class="btn btn-lg btn-block btn-outline-primary">Get started</button>
        </div>
    </form>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">{{$product[2] ->name}}</h4>
        </div>
        <form action="/buying/{{$product[2] ->id}}" method="GET">
        <div class="card-body">
          <h1 class="card-title pricing-card-title">${{$product[2]->price}} <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>{{$product[2]->description1}}</li>
            <li>{{$product[2]->description2}}</li>
            <li>{{$product[2]->description3}}</li>
            <li>{{$product[2]->description4}}</li>
          </ul>
          <button type="submit" class="btn btn-lg btn-block btn-outline-primary">Get started</button>
        </div>
        </form>
      </div>
    </div>
@endsection
