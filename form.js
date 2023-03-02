function buatSurat(button) {
    // Mendapatkan data dari tabel
    let row = button.parentNode.parentNode;
    let nomor_agenda = row.cells[1].textContent;
    let nama_agenda = row.cells[2].textContent;
    let lokasi = row.cells[3].textContent;
    let tanggal = row.cells[4].textContent;
    let jam = row.cells[5].textContent;

    $.ajax({
        url: "prosessurat.php",
        method: "POST",
        data: {
            nomor_agenda: nomor_agenda,
            nama_agenda: nama_agenda,
            lokasi: lokasi,
            tanggal: tanggal,
            jam: jam
        },
        success: function(response) {
            // alert(response)
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
}