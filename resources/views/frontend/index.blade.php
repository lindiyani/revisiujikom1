@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Nama : {{$profil->nama}}
                    sejarah :{$sejarah->Berbicara mengenai Sejarah Sekolah Menengah Kejuruan Indonesia, terdapat sedikit catatan tapi padat yang bisa dijelaskan. Penamaan Sekolah Menengah Kejuruan (SMK) adalah hasil revolusi dari nama-nama sebelumnya. Di dalam sejarah pendidikan Indonesia, sebelum SMK dikenal yang namanya STM yang merupakan akronim dari Sekolah Teknologi Menengah, ada lagi SMEA singkatan dari Sekolah Menengah Ekonomi Atas, ada juga Sekolah Menengah Industri dan Kerajinan disingkat dengan SMIK, Sekolah Menengah Musik (SMM) dan lain-lain.

Melihat isu-isu yang berkembang di masyarakat tentang SMK, bisa dirasakan banyak hal positif yang bisa menjadi sumber inspirasi, seperti; produk otomotif lahir dari keahlian anak-anak SMK, contoh: mobil Esemka, komputer Zyrex, Buggy Car dan lain-lain. Belum lagi bila kita berbicara kiprah anak-anak SMK di kancah internasional, semisal pelajar SMK Indonesia memenangkan kontes dalam ajang World Skill Competition – kompetisi tingkat dunia yang memperlombakan keahlian dan Indonesia meraih medali emas, perak juga Medallion excellence}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
