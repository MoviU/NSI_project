@extends('layouts.admin') 

@section('content')
    <div class="content-wrapper">  
    <div class="col-md-12">
        @if(session('success'))
                <div class="alert alert-success col-lg-6 offset-lg-3" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
            <!-- general form elements -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('catalog.update', $catalogItem->id) }}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_method" value="put" hidden/>

                <div class="card-body">
                    {{ csrf_field() }}

                  <div class="form-group">
                    <label for="inputNamel1">Назва</label>
                    <input type="text" class="form-control" id="inputName1" name="name" value="{{ $catalogItem->name }}" placeholder="Enter name">
                  </div>
                  <div class="row">
                      <div class="col-4">
                          <label for="photos">З малюнком</label>
                          <a href="{{ route('destroyPattern', [$catalogItem->id, 'pattern']) }}" class="btn btn-danger">Видалити фотографії з малюнком</a>
                          <input type="file" class="form-control" id="photos" name="images[]" multiple>
                      </div> <div class="col-4">
                          <label for="smooth">Гладкі</label>
                          <a href="{{ route('destroySmooth', [$catalogItem->id]) }}" class="btn btn-danger">Видалити фотографії без малюнку</a>
                          <input type="file" class="form-control" id="photos-smooth" name="smooth[]" multiple>
                      </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
                </form>

            </div>
            <!-- /.card -->

          </div>
    </div>
    <!-- <script>
        function selectImage (el) {
            var formId = "form-" + el.id.split('-')[1];
            $("#" + formId).trigger('click');
            $("#" + formId).change(function() {
                var file_data = $('#' + formId).prop('files')[0];
                var form_data = new FormData();
                form_data.append('image', file_data);
                $.ajax({
                    type: "PUT",
                    url:"{{ route('catalog.update', $catalogItem->id) }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        form_data
                    },
                    cache: false,
                    dataType:'json',
                    contentType: false,
                    processData: false,
                    success:function(response){
                        console.log(response);
                    },
                });
                document.getElementById(el.id).src = document.getElementById(formId).value;
            });
        }
    </script> -->


@endsection