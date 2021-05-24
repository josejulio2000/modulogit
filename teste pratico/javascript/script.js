//mudar o tamanho do arquivo input file
var upload = document.getElementById("file");
upload.addEventListener("change", function (e) {
  var size = upload.files[0].size;
  if (size < 1000000000) {
    //1MB
    alert("Tamanho Permitido"); //Abaixo do permitido
  } else {
    alert("Tamanh Não Permitido"); //Acima do limite
    upload.value = ""; //Limpa o campo
  }
  e.preventDefault();
});
