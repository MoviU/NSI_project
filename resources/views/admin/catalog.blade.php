@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">  
        <div class="container-fluid">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Позиції каталогу</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Назва</th>
                      <th>Дії</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($catalogs as $id => $catalog)
                    <tr>
                      <td>{{ $catalog->id }}</td>
                      <td>{{ $catalog->name }}</td>
                      <td class="text-right">
                        <a href="{{ route('catalog.edit', $catalog->id) }}" class="btn btn-sm bg-gradient-warning m-1"><i class="fas fa-pencil-alt"></i> Змінити</a>
                        <!-- <a class="btn btn-sm bg-gradient-danger m-1"><i class="fas fa-times"></i> Видалити</a> -->
                        <a href="{{ url('catalog/' . $catalog->name) }}" class="btn btn-sm bg-gradient-primary m-1"><i class="far fa-eye"></i> Переглянути</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
    </div>
        </div>      
  
@endsection