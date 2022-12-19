<div class="bg-white text-center rounded p-5">
    <h1 class="mb-4">Form Data Pasien</h1>

    {{-- @if (empty($no_order))
        <form action="">
            <div class="col-12 col-sm-12">
                <input required name="no_order" type="text" class="form-control bg-light border-0" placeholder="No Order"
                    style="height: 55px;">
            </div>
            <div class="col-12 mt-2">
                <button class="btn btn-secondary w-100 py-3 bg-button" type="submit"
                    id="save-appointment">Proccess</button>
            </div>
        </form>
    @else --}}
    <form id="form-appointment">
        <div class="row g-3">

            <div class="col-12 col-sm-12">
                <input required name="nm_pasien" type="text" class="form-control bg-light border-0"
                    placeholder="Nama Pasien" style="height: 55px;">
            </div>

            <div class="col-6 col-sm-6">
                <label for="">Jenis Kelamin</label> <br>
                <div class="form-check form-check-inline ml-0">
                    <input required class="form-check-input j_kelamin" value="Laki - laki" type="radio"
                        name="j_kelamin[]" id="inlineRadioL" value="optionL">
                    <label class="form-check-label" for="inlineRadioL">Laki - laki</label>
                </div>
                <div class="form-check form-check-inline ml-0">
                    <input required class="form-check-input j_kelamin" value="Perempuan" type="radio"
                        name="j_kelamin[]" id="inlineRadioP" value="optionP">
                    <label class="form-check-label" for="inlineRadioP">Perempuan</label>
                </div>
            </div>

            <div class="col-6 col-sm-6">
                <label for="">Golongan Darah</label> <br>
                <div class="form-check form-check-inline ml-0">
                    <input required class="form-check-input gol_darah" value="A" type="radio" name="gol_darah[]"
                        id="inlineRadioLA" value="optionLA">
                    <label class="form-check-label" for="inlineRadioLA">A</label>
                </div>
                <div class="form-check form-check-inline ml-0">
                    <input required class="form-check-input gol_darah" value="B" type="radio" name="gol_darah[]"
                        id="inlineRadioB" value="optionB">
                    <label class="form-check-label" for="inlineRadioB">B</label>
                </div>
                <div class="form-check form-check-inline ml-0">
                    <input required class="form-check-input gol_darah" value="O" type="radio" name="gol_darah[]"
                        id="inlineRadioLO" value="optionLO">
                    <label class="form-check-label" for="inlineRadioLO">O</label>
                </div>
                <div class="form-check form-check-inline ml-0">
                    <input required class="form-check-input gol_darah" value="AB" type="radio" name="gol_darah[]"
                        id="inlineRadioAB" value="optionAB">
                    <label class="form-check-label" for="inlineRadioAB">AB</label>
                </div>
            </div>


            <div class="col-6 col-sm-6">
                <input required id="alergi_obat" name="alergi_obat" type="text"
                    class="form-control bg-light border-0" placeholder="Alergi Obat" style="height: 55px;">
            </div>
            <div class="col-6 col-sm-6">
                <input required id="keluhan" name="keluhan" type="text"
                    class="form-control bg-light border-0" placeholder="Keluhan" style="height: 55px;">
            </div>
            <div class="col-6 col-sm-6">
                <div>
                    <input required name="tempat" type="text" class="form-control bg-light border-0"
                        placeholder="Tempat Lahir" style="height: 55px;">
                </div>
            </div>
            <div class="col-6 col-sm-6">
                <div>
                    <input required name="tgl_lahir" type="date" class="form-control bg-light border-0"
                        placeholder="Tanggal Lahir" style="height: 55px;">
                </div>
            </div>
            <div class="col-6 col-sm-4">
                <div>
                    <input required name="nohp_ibu" type="text" class="form-control bg-light border-0"
                        placeholder="No HP Ibu" style="height: 55px;">
                </div>
            </div>
            <div class="col-6 col-sm-4">
                <div>
                    <input required name="nohp_ayah" type="text"
                        class="form-control bg-light border-0 datetimepicker-input" placeholder="No HP Ayah"
                        style="height: 55px;">
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div>
                    <input required name="email" type="email"
                        class="form-control bg-light border-0 datetimepicker-input" placeholder="Email"
                        style="height: 55px;">
                </div>
            </div>

            <div class="col-12 col-sm-12">
                <div class="time" id="time" data-target-input="nearest">
                    <input required name="alamat" type="text" class="form-control bg-light border-0"
                        placeholder="Alamat tinggal" style="height: 55px;">
                </div>
            </div>



            <div class="col-12 col-sm-6">
                <select required name="provinsi" id="provinsi" class="form-select bg-light border-0 select2"
                    style="height: 55px;">
                    <option selected>Provinsi</option>
                    @foreach ($provinsi as $i => $p)
                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                    @endforeach

                </select>
            </div>
            <div class="col-12 col-sm-6">
                <div id="loading-kota">
                    <img width="25%" src="{{ asset('assets/img/icon/loading.gif') }}" alt="">
                </div>
                <div id="get-kota"></div>

            </div>
            <div class="col-12 col-sm-6">
                <div id="loading-kecamatan">
                    <img width="25%" src="{{ asset('assets/img/icon/loading.gif') }}" alt="">
                </div>
                <div id="get-kecamatan"></div>

            </div>
            <div class="col-12 col-sm-6">
                <div id="loading-kelurahan">
                    <img width="25%" src="{{ asset('assets/img/icon/loading.gif') }}" alt="">
                </div>
                <div id="get-kelurahan"></div>

            </div>
            <div class="col-12">
                <button class="btn btn-secondary w-100 py-3 bg-button" type="submit" id="save-appointment">Simpan <i
                        class="fa fa-arrow-right"></i></button>
                <button class="btn btn-primary w-100 py-3 bg-button" type="button" disabled
                    id="loading-submit-appointment">
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </button>
            </div>
        </div>
    </form>
    {{-- @endif --}}

</div>
