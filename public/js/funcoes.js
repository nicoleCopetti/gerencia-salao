
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

$(document).ready(function() {
    $('#multiselect').multiselect({
      buttonWidth : '160px',
      includeSelectAllOption : true,
          nonSelectedText: 'Select an Option'
    });
  });
  
  function getSelectedValues() {
    var selectedVal = $("#multiselect").val();
      for(var i=0; i<selectedVal.length; i++){
          function innerFunc(i) {
              setTimeout(function() {
                  location.href = selectedVal[i];
              }, i*2000);
          }
          innerFunc(i);
      }
  }