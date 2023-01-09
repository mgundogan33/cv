@extends('admin.layout.app')
@section('content')
    <!-- Content Body Start -->
    <div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>Kişisel Bilgi Oluştur <span></span></h3>
                </div>
            </div>
        </div>

        <div class="row mbn-30">
            <!--Default Form Start-->
            <div class="col-lg-8 col-12 mb-30">
                <div class="box">

                    <div class="box-body">
                        <form method="POST" action="{{ route('admin_information.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mbn-20">
                                <div class="col-12 mb-20">
                                    <label for="name">İsim</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="İsim" value="{{ old('name') }}">
                                    <div class="p-2">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Email" value="{{ old('email') }}">
                                    <div class="p-2">
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="phone">Telefon</label>
                                    <input type="number" id="phone" name="phone" class="form-control"
                                        placeholder="Telefon" value="{{ old('phone') }}">
                                    <div class="p-2">
                                        @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="address">Adres</label>
                                    <input type="text" name="address" id="address" class="form-control"
                                        placeholder="Adres" value="{{ old('address') }}">
                                    <div class="p-2">
                                        @error('address')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="birthday">Doğum Tarihi</label>
                                    <input type="text" id="birthday" name="birthday" class="form-control"
                                        placeholder="Doğum Tarihi" value="{{ old('birthday') }}">
                                    <div class="p-2">
                                        @error('birthday')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="image" class="form-label">Resim</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                    <div class="p-2">
                                        @error('image')
                                            <small class="text-bold text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 mb-20">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" id="facebook" name="facebook" class="form-control"
                                        placeholder="Facebook Adresi" value="{{ old('facebook') }}">
                                    <div class="p-2">
                                        @error('facebook')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="twitter">Twitter</label>
                                    <input type="text" id="twitter" name="twitter" class="form-control"
                                        placeholder="Twitter Adresi" value="{{ old('twitter') }}">
                                    <div class="p-2">
                                        @error('twitter')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" id="instagram" name="instagram" class="form-control"
                                        placeholder="Instagram Adresi" value="{{ old('instagram') }}">
                                    <div class="p-2">
                                        @error('instagram')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="github">Github</label>
                                    <input type="text" id="github" name="github" class="form-control"
                                        placeholder="Github Adresi" value="{{ old('github') }}">
                                    <div class="p-2">
                                        @error('github')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="linkedin">Linkedin</label>
                                    <input type="text" id="linkedin" name="linkedin" class="form-control"
                                        placeholder="Linkedin Adresi" value="{{ old('linkedin') }}">
                                    <div class="p-2">
                                        @error('linkedin')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <input type="submit" value="Kaydet" class="button button-primary">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Default Form End-->



        </div>

    </div><!-- Content Body End -->
@endsection
