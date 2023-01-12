var elementosOpcaoMenu = document.getElementsByClassName('nav-global-opc');

$(document).ready(function() {
  document.getElementById('title-reader').classList.add('active');
});

document.getElementById('menu-amburguer').addEventListener('click', function(){
  document.getElementById('nav-global').classList.toggle('active');
  document.getElementById('menu-amburguer').classList.toggle('active-hamburguer');
});

for(var i = 0; i < elementosOpcaoMenu.length; i++){
  elementosOpcaoMenu[i].addEventListener('click',function(){
    document.getElementById('nav-global').classList.toggle('active');
    document.getElementById('menu-amburguer').classList.toggle('active-hamburguer');
  });
}