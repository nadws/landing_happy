<?php

namespace App\View\Components;

use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class Navcom extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data = [
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
            'fontc1' => DB::table('h1')->where('id_h1', 30)->first()->isi,
            'fontc2' => DB::table('h1')->where('id_h1', 31)->first()->isi,
            'fontc3' => DB::table('h1')->where('id_h1', 32)->first()->isi,
        ];
        return view('components.navcom', $data);
    }
}
