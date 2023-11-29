<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head Section -->
</head>
<body>
  @include('navbar')
    <div class="container mt-4">
        <h1 class="text-center">Edit Data Barang</h1>
        <div class="div row justify-content-center">
            <div class="div col-8">
                <div class="card">
                    <div class="card-body">
                        <form id="editDataForm" data-id="{{$data->KodeBarang}}">
                            <!-- Form Content -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Mendapatkan ID Barang dari form
            var kodeBarang = $('#editDataForm').data('id');

            // Event ketika form disubmit
            $('#editDataForm').submit(function (e) {
                e.preventDefault();

                // Mengambil data dari form
                var formData = {
                    NamaBarang: $('input[name="NamaBarang"]').val(),
                    Satuan: $('input[name="Satuan"]').val(),
                    HargaSatuan: $('input[name="HargaSatuan"]').val(),
                    Stok: $('input[name="Stok"]').val(),
                };

                // Mengirim permintaan AJAX ke endpoint API untuk update data barang
                $.ajax({
                    type: 'POST',
                    url: '/api/barang/' + kodeBarang,
                    data: formData,
                    success: function (response) {
                        console.log(response); // Output respons dari server
                        alert('Data berhasil diupdate'); // Ubah sesuai kebutuhan Anda
                    },
                    error: function (error) {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan'); // Ubah sesuai kebutuhan Anda
                    }
                });
            });
        });
    </script>
</body>
</html>
