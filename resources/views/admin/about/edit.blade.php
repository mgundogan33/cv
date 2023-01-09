@extends('admin.layout.app')
@section('content')
    <!-- Content Body Start -->
    <div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>Hakkımda Güncelle <span></span></h3>
                </div>
            </div>
        </div>

        <div class="row mbn-30">
            <!--Default Form Start-->
            <div class="col-lg-8 col-12 mb-30">
                <div class="box">

                    <div class="box-body">
                        <form method="POST" action="{{ route('admin_about.update', $about->id) }}">
                            @csrf
                            @method('PATCH')
                            <div class="row mbn-20">
                                <div class="col-12 mb-20">
                                    <label for="title">Başlık</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        placeholder="Başlık" value="{{ old('title', $about->title) }}">
                                    <div class="p-2">
                                        @error('title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="description">Açıklama</label>
                                    <textarea type="text" id="description" name="description" class="form-control" placeholder="Açıklama" cols="30"
                                        rows="10">{{ old('description', $about->description) }}</textarea>
                                    <div class="p-2">
                                        @error('description')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="askerlik">Askerlik</label>
                                    <input type="text" id="askerlik" name="askerlik" class="form-control"
                                        placeholder="Askerlik" value="{{ old('askerlik', $about->askerlik) }}">
                                    <div class="p-2">
                                        @error('askerlik')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="dil">Dil</label>
                                    <input type="text" name="dil" id="dil" class="form-control"
                                        placeholder="Dil" value="{{ old('dil', $about->dil) }}">
                                    <div class="p-2">
                                        @error('dil')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="cv" class="form-label">Cv</label>
                                    <input type="file" name="cv" id="cv" class="form-control">
                                    <div class="p-2">
                                        @error('cv')
                                            <small class="text-bold text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="ehliyet">Ehliyet</label>
                                    <input type="text" name="ehliyet" id="ehliyet" class="form-control"
                                        value="{{ old('askerlik', $about->ehliyet) }}">
                                    <div class="p-2">
                                        @error('ehliyet')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <label class="sub-title">Kullandığım Teknolojiler</label>
                                    <select class="form-control select2" name="tags" id="tags" multiple>
                                        {{ old('askerlik', $about->tags) }}
                                        <option value="Php">Php</option>
                                        <option value="Laravel">Laravel</option>
                                        <option value="Html">Html</option>
                                        <option value="Css">Css</option>
                                        <option value="Api">Api</option>
                                        <option value="JavaScript">JavaScript</option>
                                        <option value="Jquery">Jquery</option>
                                        <option value="Vue">Vue</option>
                                        <option value="React">React</option>
                                        <option value="MySqL">MySqL</option>
                                    </select>
                                    <div class="p-2">
                                        @error('tags')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 mb-20">
                                    <input type="submit" value="Güncelle" class="button button-primary">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Default Form End-->

        </div>

    </div><!-- Content Body End -->
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
