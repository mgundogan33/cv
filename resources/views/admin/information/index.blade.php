@extends('admin.layout.app')
@section('content')
    <!-- Content Body Start -->
    <div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>Kişisel Bilgiler <span></span></h3>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title btn btn-success"> <a href="{{ route('admin_information.create') }}">Oluştur</a></h4>
                </div>
                <div class="box-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>İsim</th>
                                <th>Email</th>
                                <th>Telefon</th>
                                <th>Adres</th>
                                <th>Doğum Tarihi</th>
                                <th>Resim</th>
                                <th>Güncelle / Sil</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($information as $informations)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $informations->name }}</td>
                                    <td>{{ $informations->email }}</td>
                                    <td>{{ $informations->phone }}</td>
                                    <td>{{ Str::limit($informations->address, 30) }}</td>
                                    <td>{{ $informations->birthday }}</td>
                                    <td><img width="100" height="100"
                                            src="{{ asset('images/' . $informations->image) }}" alt=""></td>
                                    <td class="d-flex">
                                        <a href="{{ route('admin_information.edit',$informations->id) }}" class="btn btn-primary">Güncelle</a>
                                        <form action="{{ route('admin_information.destroy', $informations->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger ml-2">Sil</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div><!-- Content Body End -->
@endsection
