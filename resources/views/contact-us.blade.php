<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - PT. Mardika Sarana Engineering</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body class="bg-gray-100">
    @include('pages/header')
    @include('pages/navbar')

    <header class="relative bg-cover bg-center h-64" style="background-image: url('/images/portofolio.jpg');">
        <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
            <h1 class="text-white text-4xl font-bold">CONTACT US</h1>
        </div>
    </header>

    <section class="py-12 bg-white">
        <div class="container mx-auto max-w-5xl px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold text-[#002349] mb-4">Hubungi Kami :</h3>
                    <form id="contactForm">
                        <div class="mb-4">
                            <label class="block text-gray-900">Nama</label>
                            <input type="text" id="nama" name="nama" required class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-900">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-900">Email</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-900">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-900">Telepon</label>
                            <input type="text" id="telepon" name="telepon" required class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-900">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-900">Pesan</label>
                            <textarea id="pesan" name="pesan" rows="4" required class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-900"></textarea>
                        </div>
                        <button type="submit" class="px-4 py-2 bg-[#002349] text-white rounded hover:bg-blue-900">Kirim Pesan</button>
                    </form>
                </div>

                <div>
                    <h3 class="text-xl font-semibold text-[#002349] mb-4">Find Us on Map:</h3>
                    <div class="w-full h-64 rounded-lg overflow-hidden shadow-lg">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1189.426772139641!2d112.76072489822457!3d-7.316686794714819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb1d3f85ee67%3A0x77373d84e4032b0b!2sPT.%20Mardika%20Sarana%20Engineering!5e0!3m2!1sen!2sid!4v1746515130895!5m2!1sen!2sid"
                            class="w-full h-full border-0"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>
@include('pages/footer')
<script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = {
            nama: document.getElementById("nama").value,
            email: document.getElementById("email").value,
            telepon: document.getElementById("telepon").value,
            pesan: document.getElementById("pesan").value,
        };

        fetch("http://localhost:8000/api/kirim-pesan", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
            },
            body: JSON.stringify(formData),
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(err => { throw err; });
            }
            return response.json();
        })
        .then(data => {
            alert(data.message);
            form.reset();
        })
        .catch(error => {
            alert("Terjadi kesalahan: " + (error.message || "Periksa input."));
            console.error(error);
        });
    });
});
</script>
</body>
</html>