@extends('admin.layout.app')
@section('content')
    <!-- Content Body Start -->
    <div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>Hakkımda <span></span></h3>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title btn btn-success"> <a href="{{ route('admin_about.create') }}">Oluştur</a></h4>
                </div>
                <div class="box-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Başlık</th>
                                <th>Açıklama</th>
                                <th>Askerlik</th>
                                <th>Dil</th>
                                <th>Ehliyet</th>
                                <th>Cv</th>
                                <th>Teknoloji</th>
                                <th>Güncelle / Sil</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($about as $abouts)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $abouts->title }}</td>
                                    <td>{{ Str::limit($abouts->description) }}</td>
                                    <td>{{ $abouts->askerlik }}</td>
                                    <td>{{ $abouts->dil }}</td>
                                    <td>{{ $abouts->ehliyet }}</td>
                                    <td>{{ $abouts->cv }}</td>
                                    <td>{{ $abouts->tags }}</td>

                                    
                                    <td class="d-flex">
                                        <a href="{{ route('admin_about.edit',$abouts->id) }}" class="btn btn-primary">Güncelle</a>
                                        <form action="{{ route('admin_about.destroy', $abouts->id) }}" method="POST">
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
