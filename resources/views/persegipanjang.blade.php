<!DOCTYPE html>
<html>
<head>
    <title>Keliling Persegi Panjang</title>
</head>
<body>
    <h2>Hitung Keliling Persegi Panjang</h2>

    <form method="POST" action="/hitung-keliling">
        @csrf
        <label>Panjang:</label>
        <input type="number" name="panjang" step="any" min="0" required>
        <label>Lebar:</label>
        <input type="number" name="lebar" step="any" min="0" required>
        <button type="submit">Hitung</button>
    </form>

    @isset($keliling)
        <p>Keliling dari persegi panjang dengan panjang {{ $panjang }} dan lebar {{ $lebar }} adalah <strong>{{ $keliling }}</strong></p>
    @endisset
</body>
</html>
