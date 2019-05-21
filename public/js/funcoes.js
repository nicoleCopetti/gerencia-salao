
 var visibilidade = true; 

 function ocultarExibir() {
 
 if (visibilidade) {
     document.getElementById("mySidenav").style.display = "none";
     visibilidade = false;
 } else {
     document.getElementById("mySidenav").style.display = "block";
     visibilidade = true;
 }
}


 function exibirCadastros() {
 
 if (visibilidade) {
     document.getElementById("subProfissionais").style.display = "none";
     document.getElementById("subServicos").style.display = "none";
     document.getElementById("subJornada").style.display = "none";
     visibilidade = false;
 } else {
     document.getElementById("subProfissionais").style.display = "block";
     document.getElementById("subServicos").style.display = "block";
     document.getElementById("subJornada").style.display = "block";
     visibilidade = true;
 }
}

$('select').selectpicker();