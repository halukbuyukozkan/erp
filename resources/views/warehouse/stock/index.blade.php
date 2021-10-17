<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Malzemeler') }}
        </h2>
    </x-slot>


    <div class="row">
          <div class="col-12">
            <div class="card">
                <form action="{{ route('warehouse.stock.store',$warehouse) }}" method="POST">
                    @csrf
              <div class="card-header">
                <h3 class="card-title">Stok listesi</h3>

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
              <div class="card-body table-responsive">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Malzeme Adı</th>
                      <th>Stok</th>
                    </tr>  
                  </thead>
                  <tbody>
                    @foreach ($materials as $material)
                    <tr>
                      <td>{{ $material->name }}</td>
                      <td>
                          <input type="number" value= "{{$material->stock->quantity ?? 0}}" name="stock[{{ $material->id }}]">
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Kaydet</button>
              </div>
                     

              <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>





    </x-app-layout>