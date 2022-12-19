<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Regency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AppointmentController extends Controller
{
    public function home(Request $r)
    {
        if (empty($r->hal)) {
            $hal = '1';
        } else {
            $hal = $r->hal;
        }
        $data = [
            'title' => 'app',
            'no_order' => $r->no_order,
            'hal' => $hal,
            'h1' => DB::table('h1')->where('id_h1', 1)->first()->isi,
            'img' => DB::table('h1')->where('id_h1', 2)->first()->isi,
            'teks1' => DB::table('h1')->where('id_h1', 3)->first()->isi,
            'teks2' => DB::table('h1')->where('id_h1', 4)->first()->isi,
            'img_hero' => DB::table('h1')->where('id_h1', 7)->first()->isi,
            'teks_tentang1' => DB::table('h1')->where('id_h1', 8)->first()->isi,
            'teks_tentang2' => DB::table('h1')->where('id_h1', 9)->first()->isi,
            'img_tentang' => DB::table('h1')->where('id_h1', 10)->first()->isi,
            'waktu' => DB::table('h1')->where('id_h1', 11)->first()->isi,
            'alamat' => DB::table('h1')->where('id_h1', 12)->first()->isi,
            'nohp' => DB::table('h1')->where('id_h1', 13)->first()->isi,
            'email' => DB::table('h1')->where('id_h1', 14)->first()->isi,
            'maps' => DB::table('h1')->where('id_h1', 15)->first()->isi,
            'warna' => DB::table('h1')->where('id_h1', 16)->first()->isi,
            'warna_bg' => DB::table('h1')->where('id_h1', 17)->first()->isi,
            'url_asset' => ' http://127.0.0.1:2222/assets/img/',
            'img_tamu' => DB::table('h1')->where('id_h1', 29)->first()->isi,
            
            'fontc1' => DB::table('h1')->where('id_h1', 30)->first()->isi,
            'fontc2' => DB::table('h1')->where('id_h1', 31)->first()->isi,
            'fontc3' => DB::table('h1')->where('id_h1', 32)->first()->isi,

        ];
        return view("home.content", $data);
    }
    public function index(Request $r)
    {
        $provinsi = DB::table('provinces')->get();


        $data = [
            'title' => 'app',
            'provinsi' => $provinsi,
            'no_order' => $r->no_order,
            'invoice' => DB::selectOne("SELECT * FROM invoice as a  left join dt_pasien as b on b.member_id = a.member_id where a.no_order = '$r->no_order'")
        ];
        return view("appointment.appointment", $data);
    }

    public function getKota(Request $r)
    {
        $id_provinsi = $r->id_provinsi;
        $kota = DB::table('regencies')->where('province_id', $id_provinsi)->get();

        echo "<select required name='kota' id='kota' class='form-select bg-light border-0 select2' style='height: 55px;'>";
        foreach ($kota as $i => $p) {
            echo "
                <option value=" . $p->id . ">" . $p->name . "</option>
            ";
        }
        echo "</select>";
    }

    public function getKecamatan(Request $r)
    {
        $id_kota = $r->id_kota;
        $kecamatan = DB::table('districts')->where('regency_id', $id_kota)->get();
        echo "<select required name='kecamatan' id='kecamatan' class='form-select bg-light border-0 select2' style='height: 55px;'>";
        foreach ($kecamatan as $i => $p) {
            echo "
                <option value=" . $p->id . ">" . $p->name . "</option>
            ";
        }
        echo "</select>";
    }

    public function getKelurahan(Request $r)
    {
        $id_kecamatan = $r->id_kecamatan;
        $kelurahan = DB::table('villages')->where('district_id', $id_kecamatan)->get();

        echo "<select required name='kelurahan' id='kelurahan' class='form-select bg-light border-0 select2' style='height: 55px;'>";
        foreach ($kelurahan as $i => $p) {
            echo "
                <option value=" . $p->id . ">" . $p->name . "</option>
            ";
        }
        echo "</select>";
    }

    public function save_appointment(Request $r)
    {
        $nm_pasien = $r->nm_pasien;

        $j_kelamin = $r->j_kelamin[0];
        $gol_darah = $r->gol_darah[0];

        $alergi_obat = $r->alergi_obat;
        $tempat = $r->tempat;
        $keluhan = $r->keluhan;
        $tgl_lahir = $r->tgl_lahir;
        $nohp_ibu = $r->nohp_ibu;
        $nohp_ayah = $r->nohp_ayah;
        $email = $r->email;
        $alamat = $r->alamat;

        // id api wilayah
        $provinsi = $r->provinsi;
        $kota = $r->kota;
        $kecamatan = $r->kecamatan;
        $kelurahan = $r->kelurahan;

        // get nama wilayah
        $getProvinsi = DB::table('provinces')->where('id', $provinsi)->first();
        $getKota = DB::table('regencies')->where('province_id', $provinsi)->first();
        $getKecamatan = DB::table('districts')->where('regency_id', $kota)->first();
        $getKelurahan = DB::table('villages')->where('district_id', $kecamatan)->first();

        $provinsi = $getProvinsi->name;
        $kota = $getKota->name;
        $kecamatan = $getKecamatan->name;
        $kelurahan = $getKelurahan->name;

        $invoice = DB::selectOne("SELECT max(a.urutan) as urutan FROM invoice as a");

        if (empty($invoice->urutan)) {
            $no_order = 1001;
        } else {
            $no_order = 1001 + 1;
        }

        $member_id = rand(1, 999999999999);

        $no_member = Str::remove(' ', strtolower($nm_pasien)) . date('dmY', strtotime($tgl_lahir));

        $data = [
            'nama_pasien' => $nm_pasien,
            'member_id' => $no_member,
            'jenis_kelamin' => $j_kelamin,
            'golongan_darah' => $gol_darah,
            'alergi_obat' => $alergi_obat,
            'keluhan' => $keluhan,
            'tgl_lahir' => $tgl_lahir,
            'tempat' => $tempat,
            'alamat' => $alamat,
            'provinsi' => $provinsi,
            'kota' => $kota,
            'kecamatan' => $kecamatan,
            'kelurahan' => $kelurahan,
            'nohp_ibu' => $nohp_ibu,
            'nohp_ayah' => $nohp_ayah,
            'email' => $email,
            'no_order' => $no_order,
            'tgl' => date('Y-m-d'),
        ];

        DB::table('dt_pasien')->insert($data);
        Session::put('no_order', $no_member);
        Session::put('hal', '2');
    }

    public function appointment2(Request $r)
    {

        $data = [
            'title' => 'tes',
            'no_order' => Session::get('no_order')
        ];
        return view('appointment.appointment2', $data);
    }

    public function pernahDaftar(Request $r)
    {
        $cek = DB::table('dt_pasien')->where('member_id', $r->member_id)->first();
        if (!$cek) {
            $res = 'Member ID tidak ditemukan !';
            $no_order = '';
        } else {
            $res = 'ok';
            $no_order = Str::random(10);
            $data = [
                'no_order' => $no_order,
                'member_id' => $r->member_id,
                'tgl' => date('Y-m-d'),
                'rupiah' => '100000'
            ];
            DB::table('invoice')->insert($data);
        }

        $data = [
            'response' => $res,
            'no_order' => $no_order
        ];

        return json_encode($data);
    }

    public function delAppointment(Request $r)
    {
        $no_order = $r->no_order;
        DB::table('dt_pasien')->where('no_order', $no_order)->delete();
        Session::forget('no_order');
    }

    public function save_appointment2(Request $r)
    {
        $no_order = $r->no_order;

        $pasien = DB::table('dt_pasien')->where('member_id', $no_order)->first();
        $id_pasien = $pasien->id_pasien;
        $n_order = $pasien->no_order;


        // ayah
        $nm_ayah = $r->nm_ayah;
        $tgl_lahir_ayah = $r->tgl_lahir_ayah;
        $agama_ayah = $r->agama_ayah;
        $suku_bangsa_ayah = $r->suku_bangsa_ayah;
        $perkawinan_ke_ayah = $r->perkawinan_ke_ayah;
        $usia_menikah_ayah = $r->usia_menikah_ayah;
        $pendidikan_ayah = $r->pendidikan_ayah;
        $pekerjaan_ayah = $r->pekerjaan_ayah;

        // ibu
        $nm_ibu = $r->nm_ibu;
        $tgl_lahir_ibu = $r->tgl_lahir_ibu;
        $agama_ibu = $r->agama_ibu;
        $suku_bangsa_ibu = $r->suku_bangsa_ibu;
        $perkawinan_ke_ibu = $r->perkawinan_ke_ibu;
        $usia_menikah_ibu = $r->usia_menikah_ibu;
        $pendidikan_ibu = $r->pendidikan_ibu;
        $pekerjaan_ibu = $r->pekerjaan_ibu;

        $dataAyah = [
            'id_pasien' => $id_pasien,
            'member_id_pasien' => $no_order,
            'nama_orang_tua' => $nm_ayah,
            'tgl_lahir' => $tgl_lahir_ayah,
            'agama' => $agama_ayah,
            'suku_bangsa' => $suku_bangsa_ayah,
            'perkawinan_ke' => $perkawinan_ke_ayah,
            'usia_saat_menikah' => $usia_menikah_ayah,
            'pendidikan' => $pendidikan_ayah,
            'pekerjaan' => $pekerjaan_ayah,
            'orang_tua' => 'Ayah',
        ];

        DB::table('dt_orang_tua')->insert($dataAyah);

        $dataIbu = [
            'id_pasien' => $id_pasien,
            'member_id_pasien' => $no_order,
            'nama_orang_tua' => $nm_ibu,
            'tgl_lahir' => $tgl_lahir_ibu,
            'agama' => $agama_ibu,
            'suku_bangsa' => $suku_bangsa_ibu,
            'perkawinan_ke' => $perkawinan_ke_ibu,
            'usia_saat_menikah' => $usia_menikah_ibu,
            'pendidikan' => $pendidikan_ibu,
            'pekerjaan' => $pekerjaan_ibu,
            'orang_tua' => 'Ibu',
        ];

        DB::table('dt_orang_tua')->insert($dataIbu);

        $invoice = DB::selectOne("SELECT max(a.urutan) as urutan FROM invoice as a");

        $no_invoice = empty($invoice->urutan) ? 1001 : $invoice->urutan+ 1;        

        $data = [
            'no_order' => 'HK-' . $no_invoice,
            'urutan' => $no_invoice,
            'member_id' => $no_order,
            'tgl' => date('Y-m-d'),
            'rupiah' => '200000'
        ];
        DB::table('invoice')->insert($data);
        Session::forget('no_order');
        // return redirect()->route("home");
    }

    public function appointment_selesai(Request $r)
    {
        $data = [
            'title' => 'app',
            'no_order' => $r->no_order,
            
            // teks tamu selesai
            'teks_janji1' => DB::table('h1')->where('id_h1', 19)->first()->isi,
            'teks_janji2' => DB::table('h1')->where('id_h1', 20)->first()->isi,
            'nominal_app' => DB::table('h1')->where('id_h1', 21)->first()->isi,
            'nominal_tf' => DB::table('h1')->where('id_h1', 22)->first()->isi,
            'mandiri_admin' => DB::table('h1')->where('id_h1', 23)->first()->isi,
            'mandiri_norek' => DB::table('h1')->where('id_h1', 24)->first()->isi,
            'bca_admin' => DB::table('h1')->where('id_h1', 25)->first()->isi,
            'bca_norek' => DB::table('h1')->where('id_h1', 26)->first()->isi,
            'wa_admin' => DB::table('h1')->where('id_h1', 27)->first()->isi,
            'wa_nohp' => DB::table('h1')->where('id_h1', 28)->first()->isi,
        ];
        return view("appointment.selesai", $data);
    }
}
