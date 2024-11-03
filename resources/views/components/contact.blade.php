<!DOCTYPE html>
<html lang="en">
<head>
    <x-head></x-head>
</head>
<body>
    <x-navbar></x-navbar>
    <h1 class="w-full text-4xl font-bold ">Contact</h1>
    <br>
    <br>
    <form action="{{ route('contact.store') }}" method="post" class="text-center">
        @csrf
        <label for="nama">Nama</label>
        <br>
        <input type="text" name="nama" id="nama" class="rounded-2xl">
        <br>
        <br>
        <label for="email">E-Mail</label>
        <br>
        <input type="email" name="email" id="email" class="rounded-2xl">
        <br>
        <br>
        <label for="aduan">Pengaduan</label>
        <br>
        <textarea name="aduan" id="aduan" cols="22" rows="5" class=" rounded-2xl"></textarea>
        <br>
        <br>
        <input type="submit" value="Kirim" class="">
    </form>    
</body>
</html>
