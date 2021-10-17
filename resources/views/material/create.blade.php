<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Malzemeler') }}
        </h2>
    </x-slot>

    <form action="{{ route('material.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Malzeme Adı</label>
            <input type="string" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Malzeme Adı Girin">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Açıklama</label>
            <input type="text" name="information" class="form-control" id="exampleInputPassword1" placeholder="Açıklama">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Malzeme Kodu</label>
            <input type="integer" name="code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Malzeme Kodu">
            <li>
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </li>
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>

</x-app-layout>