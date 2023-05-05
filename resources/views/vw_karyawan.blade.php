<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil Data Karyawan</title>
</head>
<body class="m-5">

    <nav class="text-center mb-5">
        <button onclick="gotoAdd()" id="btn_tambah" class="bg-red-300 w-32 h-10 rounded-full border-2 border-black">Tambah</button>
        <button id="btn_refresh" class="bg-slate-300 w-32 h-10 rounded-full border-2 border-black">Refresh</button>
    </nav>

    <table class="w-full">
        <thead class="text-center bg-cyan-950 text-white">
            <tr class="h-10">
                <th class="w-1/12">Aksi</th>
                <th class="text-left w-1/12">NIK</th>
                <th class="text-left w-3/12">Nama Karyawan</th>
                <th class="text-left w-2/12">Alamat</th>
                <th class="text-left w-2/12">Telepon</th>
                <th class="text-left w-2/12">Jabatan</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($result as $output)
            <tr>
                <td class="pt-5">-</td>
                <td class="pt-5 text-left">{{$output->kode_karyawan}}</td>
                <td class="pt-5 text-left">{{$output->nama_karyawan}}</td>
                <td class="pt-5 text-left">{{$output->alamat_karyawan}}</td>
                <td class="pt-5 text-left">{{$output->telepon_karyawan}}</td>
                <td class="pt-5 text-left">{{$output->jabatan_karyawan}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


    {{-- cdn TailWinds  --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Custom JavaScript --}}
    <script>
        // buat fungsi link untuk tambah data
        function gotoAdd()
        {
            location.href="{{url('/add')}}"

            //windows.open("") gunakan ini untuk hal tertentu contohn=ya saat print
        }

        //gunsi untuk refresh
        document.querySelector("#btn_refresh").addEvenListener('click', function(){
            location.href="{{url('/')}}"
        })
    </script>

</body>
</html>