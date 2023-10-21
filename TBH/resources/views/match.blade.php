<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pertandingan Sepak Bola</title>

    <!-- Tambahkan referensi ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Form Pertandingan Sepak Bola</h1>

    <form action="{{ route('proses.form') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="tim_home" class="form-label">Tim Home</label>
            <input type="text" class="form-control" name="tim_home" id="tim_home" required>
        </div>
        <div class="mb-3">
            <label for="tim_away" class="form-label">Tim Away</label>
            <input type="text" class="form-control" name="tim_away" id="tim_away" required>
        </div>
        <div class="mb-3">
            <label for="skor_home" class="form-label">Skor Home</label>
            <input type="number" class="form-control" name="skor_home" id="skor_home" required>
        </div>
        <div class="mb-3">
            <label for="skor_away" class="form-label">Skor Away</label>
            <input type="number" class="form-control" name="skor_away" id="skor_away" required>
        </div>
        <div class="mb-3">
            <label for="nama_competition" class="form-label">Nama Competition</label>
            <input type="text" class="form-control" name="nama_competition" id="nama_competition" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_pertandingan" class="form-label">Tanggal Pertandingan</label>
            <input type="date" class="form-control" name="tanggal_pertandingan" id="tanggal_pertandingan" required>
        </div>
        <div class="mb-3">
            <label for="jumlah_penonton" class="form-label">Jumlah Penonton</label>
            <input type="number" class="form-control" name="jumlah_penonton" id="jumlah_penonton" required>
        </div>

        <h2>Statistik Pemain</h2>

        <div class="mb-3">
            <label for="tim" class="form-label">Tim</label>
            <select class="form-select" name="tim" id="tim">
                <option value="home">Home</option>
                <option value="away">Away</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Jumlah Pemain</label>
            <div class="input-group">
                <input type="text" class="form-control" id="jumlah_pemain" value="0" readonly>
                <span class="input-group-text">
            <button type="button" class="btn btn-success" onclick="tambahPemain()">+</button>
            <button type="button" class="btn btn-danger" onclick="kurangPemain()">-</button>
          </span>
            </div>
        </div>

        <div id="pemainFields">
            <!-- Input pemain akan ditambahkan di sini sesuai dengan jumlah pemain -->
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Tambahkan referensi ke Bootstrap JavaScript (Opsional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>

<script>
    function tambahPemain() {
        var jumlahPemainInput = document.getElementById("jumlah_pemain");
        var jumlahPemain = parseInt(jumlahPemainInput.value);
        jumlahPemainInput.value = jumlahPemain + 1;
        tambahInputPemain(jumlahPemain + 1);
    }

    function kurangPemain() {
        var jumlahPemainInput = document.getElementById("jumlah_pemain");
        var jumlahPemain = parseInt(jumlahPemainInput.value);
        if (jumlahPemain > 0) {
            jumlahPemainInput.value = jumlahPemain - 1;
            hapusInputPemain(jumlahPemain);
        }
    }

    function tambahInputPemain(index) {
        var pemainFields = document.getElementById("pemainFields");
        var fieldset = document.createElement("fieldset");
        fieldset.innerHTML = `
        <legend>Statistik Pemain ${index}</legend>
        <div class="mb-3">
          <label for="nama_${index}" class="form-label">Nama Pemain ${index}</label>
          <input type="text" class="form-control" name="nama_${index}" id="nama_${index}" required>
        </div>
        <div class="mb-3">
          <label for="gol_${index}" class="form-label">Gol Pemain ${index}</label>
          <input type="number" class="form-control" name="gol_${index}" id="gol_${index}" required>
        </div>
        <div class="mb-3">
          <label for="assist_${index}" class="form-label">Assist Pemain ${index}</label>
          <input type="number" class="form-control" name="assist_${index}" id="assist_${index}" required>
        </div>
      `;
        pemainFields.appendChild(fieldset);
    }

    function hapusInputPemain(index) {
        var pemainFields = document.getElementById("pemainFields");
        pemainFields.removeChild(pemainFields.lastElementChild);
    }
</script>
</body>
</html>
