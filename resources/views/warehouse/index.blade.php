<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Depolar') }}
        </h2>
    </x-slot>

    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Depo listesi</h3>

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
                      <th>Depo adı</th>
                      <th>Adres</th>
                      <th>Durum</th>
                      <th>Doluluk</th>
                      <th>
                      <a href="{{ route('warehouse.create') }}" class="btn btn-success">Depo Ekle</a>
                      </th>
                    </tr>  
                  </thead>
                  <tbody>
                    @foreach ($warehouses as $warehouse)
                    <tr>
                      <td>{{ $warehouse->name }}</td>
                      <td>{{ $warehouse->address }}</td>
                      <td>{{ $warehouse->active ?'aktif':'pasif'}}</td>
                      <td><span class="badge badge-success">{{ $warehouse->capacity }}</span></td>
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