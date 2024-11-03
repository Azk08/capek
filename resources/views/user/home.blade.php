<!DOCTYPE html>
<html lang="en" class=" scroll-smooth">
<x-head></x-head>
<style>
    html{
        scroll-behavior: smooth;
    }
</style>

<body class="font-sans bg-black scroll-smooth">
    <header class="p-[250px] text-center text-white">
        <h1 class="font-extrabold text-7xl">Welcome</h1>
        <h4 class="text-3xl">Casing Plass</h4>
    </header>
    <x-navbar></x-navbar>
    <main>
        <section class="flex flex-wrap items-center justify-around contact p-[100px]" id="contact">
            <h1 class="w-full text-4xl font-bold text-white">Contact</h1>
            <br>
            <br>
            <form action="{{ route('contact.store') }}" method="post"
                class="flex flex-wrap items-center justify-around w-full">
                @csrf
                <div class="flex flex-wrap w-1/2 bio items-cemter">
                    <input type="text" name="nama" id="nama" class="w-full rounded-2xl" placeholder="Nama">
                    <br>
                    <br>
                    <input type="email" name="email" id="email" class="w-full rounded-2xl" placeholder="E-Mail">
                </div>
                <textarea name="aduan" id="aduan" cols="20" rows="3" class="w-1/2 rounded-2xl" placeholder="Comment"></textarea>
                <br>
                <br>
                <input type="submit" value="Kirim" class="w-full text-white rounded-2xl">
            </form>
        </section>
    </main>
    <x-footer></x-footer>
</body>

</html>
