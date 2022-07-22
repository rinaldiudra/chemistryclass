@extends('layouts.layout_admin')

@section('content')
 <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Pengguna</h3>
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Data Pengguna</h4>
              <hr>
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tanggal Daftar</th>
                  </tr>
                </thead>
                <tbody>
             @foreach ($pengguna as $users)
                 <tr>
                    <td>{{$users->id}}</td>
                    <td>{{$users->name}}</td>
                    <td>{{$users->email}}</td>
                    <td>{{$users->created_ad}}</td>
                 </tr>
                 @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
    </section>
@endsection