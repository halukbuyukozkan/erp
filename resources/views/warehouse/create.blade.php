<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Depolar') }}
        </h2>
    </x-slot>

    <form action="{{ route('warehouse.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Depo Adı</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Depo Adı Girin">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Adres</label>
            <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Adres">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Depo Durumu</label>
            <input type="boolean" name="active" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Depo Durumu">
            <li>
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </li>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Depo Kapasitesi</label>
            <input type="boolean" name="capacity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Depo Kapasitesi">
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>

</x-app-layout>