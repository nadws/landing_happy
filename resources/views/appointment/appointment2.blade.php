<div class="bg-white text-center rounded p-5">
    <h1 class="mb-4">Data Orang Tua</h1>
    <div class="row">
        <div class="col-6 col-sm-6">
            <h2>Ayah</h2>
        </div>
        <div class="col-6 col-sm-6">
            <h2>Ibu</h2>
        </div>
    </div>

    <form id="form-appointment2">
        @csrf
        <input type="text" class="form-control" style="display: none" name="no_order" value="{{ $no_order }}">
        <div class="row g-3">
            <div class="col-6 col-sm-6">
                <input required name="nm_ayah" type="text" class="form-control bg-light border-0"
                    placeholder="Nama Ayah" style="height: 55px;">
            </div>
            <div class="col-6 col-sm-6">
                <input required name="nm_ibu" type="text" class="form-control bg-light border-0"
                    placeholder="Nama Ibu" style="height: 55px;">
            </div>

            <div class="col-6 col-sm-6">
                <input required name="tgl_lahir_ayah" type="text" class="form-control bg-light border-0"
                    placeholder="Tanggal Lahir Ayah" onfocus="(this.type='date')" style="height: 55px;">
            </div>
            <div class="col-6 col-sm-6">
                <input required name="tgl_lahir_ibu" type="text" class="form-control bg-light border-0"
                    placeholder="Tanggal Lahir Ibu" onfocus="(this.type='date')" style="height: 55px;">
            </div>
            <div class="col-3 col-sm-3">
                <input required name="agama_ayah" type="text" class="form-control bg-light border-0"
                    placeholder="Agama" style="height: 55px;">
            </div>
            <div class="col-3 col-sm-3">
                <input required name="suku_bangsa_ayah" type="text" class="form-control bg-light border-0"
                    placeholder="Suku" style="height: 55px;">
            </div>

            <div class="col-3 col-sm-3">
                <input required name="agama_ibu" type="text" class="form-control bg-light border-0"
                    placeholder="Agama" style="height: 55px;">
            </div>
            <div class="col-3 col-sm-3">
                <input required name="suku_bangsa_ibu" type="text" class="form-control bg-light border-0"
                    placeholder="Suku" style="height: 55px;">
            </div>

            <div class="col-3 col-sm-3">
                <input required name="perkawinan_ke_ayah" type="text" class="form-control bg-light border-0"
                    placeholder="Perkawinan ke" style="height: 55px;">
            </div>
            <div class="col-3 col-sm-3">
                <input required name="usia_menikah_ayah" type="text" class="form-control bg-light border-0"
                    placeholder="Usia menikah" style="height: 55px;">
            </div>
            <div class="col-3 col-sm-3">
                <input required name="perkawinan_ke_ibu" type="text" class="form-control bg-light border-0"
                    placeholder="Perkawinan ke" style="height: 55px;">
            </div>
            <div class="col-3 col-sm-3">
                <input required name="usia_menikah_ibu" type="text" class="form-control bg-light border-0"
                    placeholder="Usia menikah" style="height: 55px;">
            </div>


            <div class="col-6 col-sm-6">
                <input required name="pendidikan_ayah" type="text" class="form-control bg-light border-0"
                    placeholder="Pendidikan" style="height: 55px;">
            </div>
            <div class="col-6 col-sm-6">
                <input required name="pendidikan_ibu" type="text" class="form-control bg-light border-0"
                    placeholder="Pendidikan" style="height: 55px;">
            </div>
            <div class="col-6 col-sm-6">
                <input required name="pekerjaan_ayah" type="text" class="form-control bg-light border-0"
                    placeholder="Pekerjaan" style="height: 55px;">
            </div>
            <div class="col-6 col-sm-6">
                <input required name="pekerjaan_ibu" type="text" class="form-control bg-light border-0"
                    placeholder="Pekerjaan" style="height: 55px;">
            </div>


            <div class="col-4">
                <button class="btn btn-secondary w-100 py-3 bg-button" type="button" no_order="{{ $no_order }}"
                    id="back-appointment2"><i class="fa fa-arrow-left"></i> Kembali </button>
            </div>
            <div class="col-8">
                <button class="btn btn-secondary w-100 py-3 bg-button" type="submit" id="save-appointment2">Simpan
                    <i class="fa fa-arrow-right"></i></button>

                {{-- <button class="btn btn-primary w-100 py-3 bg-button" type="button" disabled
                    id="loading-submit-appointment2">
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </button> --}}
            </div>
        </div>
    </form>
</div>
