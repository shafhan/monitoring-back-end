$(function() {

    $('.tampilModalTambah').on('click', function() {

        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');

    });

    $('.tampilModalUbah').on('click', function() {

        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/study/mvc/public/mahasiswa/ubah')

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/study/mvc/public/mahasiswa/getubah',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#umur').val(data.umur);
                $('#email').val(data.email);
                $('#id').val(data.id);
            }
        });

    });

});