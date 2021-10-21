@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Phone number</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($forms as $id => $form)
                    <tr>
                      <td>{{ $id }}</td>
                      <td>{{ $form->username }}</td>
                      <td>{{ $form->userphone }}</td>
                      <td>{{ $form->usermail ? $form->usermail : '----' }}</td>
                      <td>{{ $form->useradress ? $form->useradress : '----' }}</td>
                      <td>Complete: <input type="checkbox" id="{{ $form->id }}" class="complete-checkbox" onclick="submitData(this)" {{ $form->complete == 1 ? 'checked' : '' }}></td>
                    </tr>
                    @endforeach
                    {{ csrf_field() }}
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    {{ $forms->links() }}
                </ul>
              </div>
            </div>
            <!-- /.card -->

          </div>
          </div>
          <script>
              function submitData(el) {
                $.ajax({
                        url: '/admin/form/' + el.id,
                        data: {
                                '_token': $('input[name=_token]').val(),
                            },
                        type: 'PUT',
                        dataType: 'json',
                        success: function (response) {
                            console.log('Data downloaded.');
                        }
                    });
                }
          </script>
@endsection