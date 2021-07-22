$(document).ready(function () {
  $("#tombol-cari").hidden();
  $("#keyword").on("keyup", function () {
    $("#container").load("ajax/mahasiswa.php?keyword=" + "#keyword".val());
  });
});
