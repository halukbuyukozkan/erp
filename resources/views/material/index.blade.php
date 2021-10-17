<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Malzemeler') }}
        </h2>
    </x-slot>


    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Malzeme listesi</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Malzeme Adı</th>
                      <th>Açıklama</th>
                      <th>Malzeme Kodu</th>
                      <th>
                      <a href="{{ route('material.create') }}" class="btn btn-success">Malzeme Ekle</a>
                      </th>
                    </tr>  
                  </thead>
                  <tbody>
                    @foreach ($materials as $material)
                    <tr>
                      <td>{{ $material->name }}</td>
                      <td>{{ $material->information }}</td>
                      <td><span class="badge badge-success">{{ $material->code }}</span></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>





    </x-app-layout>