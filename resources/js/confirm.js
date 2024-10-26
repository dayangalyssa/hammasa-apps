document.getElementById('order-code').addEventListener('click', function() {
    // Ambil elemen yang memiliki kode pesanan
    var orderCode = this.innerText;

    // Buat elemen textarea sementara untuk menampung kode
    var tempInput = document.createElement('textarea');
    tempInput.value = orderCode;
    document.body.appendChild(tempInput);

    // Pilih dan salin teks dari textarea sementara
    tempInput.select();
    tempInput.setSelectionRange(0, 99999); // Untuk perangkat mobile
    document.execCommand('copy');

    // Hapus elemen textarea sementara
    document.body.removeChild(tempInput);

    // Opsional: Berikan notifikasi bahwa kode telah disalin
    alert('Kode pesanan telah disalin: ' + orderCode);
  });
