@php
    $pertanyaan1 = 'Apa itu simaksi?';
    $jawaban1 = "Simaksi, sering kamu mendengar bukan dengan kata 'Simaksi' apa
                sih simaksi itu, simaksi adalah surat izin masuk konservasi.
                Dalam dunia pendakian tentunya kata-kata ini memang tidak asing
                dan sering kita dengar karena setiap akan melakukan pendakian
                gunung maka kamu harus melakukan simaksi terlebih dahulu. Untuk
                lebih jelas tentang hal ini pihak pemerintah dalam hal ini
                kementerian Lingkungan Hidup dan Kehutanan Republik Indonesia
                telah menerbitkan tentang aturan ini dengan nomor :
                P.7/IV-SET/2011 tentang 'Tata Cara Masuk Kawasan Suaka Alam
                Kawasan Pelestarian Alam Dan Taman burung'.";
    $pertanyaan2 = 'Peralatan apa saja yang direkomendasikan dibawa saat pendakian?';
    $jawaban2 = "Bagi kaum pemula, ada beberapa tips sebelum melakukan pendakian
                yang perlu diikuti, agar tidak terjadi hal-hal yang
                membahayakan.ini beberapa tips mendaki gunung yang bisa
                dijadikan referensi sebelum melakukan olahraga ekstrim tersebut
                : <br/> 
                Membawa Peralatan Yang Mumpuni Bagi pemula, sebaiknya pilih
                medan yang tidak terlalu sulit, medan tersebut bisa ditingkatkan
                secara bertahap. Tentunya jika telah terbiasa. Baik medan yang
                mudah atau sulit, perlu persiapan matang, salah satunya adalah
                peralatan yang mumpuni. Berikut ini beberapa jenis peralatan
                yang perlu dipersiapkan : (Untuk Peralatan Wajib) ` Carrier (tas
                gunung, usahakan setiap carrier mempunyai rain cover). ` Sepatu
                gunung/hiking. ` Matras. ` Sleeping bag. ` Celana hiking/ cargo
                panjang/pendek. ` Ponco plastik/jas hujan. ` Jaket tebal. `
                Sarung tangan. (Peralatan Pribadi) ` Mie (bawa sesuai
                kebutuhan). ` 2 botol aqua 1,5lt. ` Snack (bawa sesuai
                kebutuhan). ` Membawa alat makan seperti sendok, piring plastik
                atau kertas nasi. ` Bawa pakaian ganti sesuai dengan kebutuhan.
                ` Kaos kaki membawa minimal 2 pasang. ` Salonpas. ` Madu/coklat.";
@endphp

<x-layout.base>
    <!-- navbar -->
    @include('components.layout._header')

    <div class="app min-h-screen bg-grey-lightest font-sans overflow-hidden mb-8">
        <div class="h-32 flex items-center justify-center bg-indigo">
            <h1 class="text-2xl text-black -mt-8 uppercase font-semibold font-mono">
                info lainnya
            </h1>
        </div>

        <div class="wrapper border-b-2 -mt-8 bg-white overflow-hidden mx-10 lg:mx-auto max-w-4xl rounded shadow-xl">
            <div class="question-wrap mx-8 mt-2">
                <x-info :pertanyaan="$pertanyaan1" :jawaban="$jawaban1" />
                <x-info :pertanyaan="$pertanyaan2" :jawaban="$jawaban2" />
            </div>
        </div>
    </div>


    {{-- footer --}}
    @include('components.layout._footer')
</x-layout.base>
