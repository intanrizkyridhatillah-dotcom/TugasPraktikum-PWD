$(document).ready(function(){
    
    // Ketika checkbox 'Show' diklik / diubah statusnya
    $("#chkShow").click(function(){
        if ($(this).is(":checked")) {
            // Ubah tipe input menjadi text agar password terlihat
            $("#txtPassword").attr("type", "text");
        } else {
            // Kembalikan tipe input menjadi password (disembunyikan)
            $("#txtPassword").attr("type", "password");
        }
    });

});