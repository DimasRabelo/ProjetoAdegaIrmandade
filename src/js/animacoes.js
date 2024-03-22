$(document).ready(function () {
  $('.galeria').slick({
    centerMode: true,
    centerPadding: '5%',
    slidesToShow: 7,
    autoplay: true,
    responsive: [
      {
        breakpoint: 1001,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 5
        }
      },
      {
        breakpoint: 601,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
});


$(document).ready(function(){
  $('.tabacaria-slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false, // Ativa as setas de navegação
    fade: true,
    asNavFor: '.tabacaria-slider-nav'
  });
  $('.tabacaria-slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.tabacaria-slider-for',
    dots: false,
    centerMode: true,
    focusOnSelect: true
  });
});

/* MENU MOBILE */
document.querySelector(".abrir-menu").onclick = function () {
  document.documentElement.classList.add("menu-mobile");  
}
document.querySelector(".fechar-menu").onclick = function (){
  document.documentElement.classList.remove("menu-mobile");
}











// Menu interatirativo da Página Bebidas //
  
const menuItems = document.querySelectorAll('.sample-menu li');
const contentItems = document.querySelectorAll('.sample-content');


menuItems.forEach(item => {
    item.addEventListener('click', () => {
        const tabId = item.getAttribute('data-tab');


        contentItems.forEach(contentItem => {
            contentItem.classList.remove('active');
        });

        document.getElementById(tabId).classList.add('active');
    });
  });

/* Enviar Dados do Form por Whatsapp */

/* function Enviarwhats(){
    alert ("CHEGUEI AQUI");
}*/
//} teste para saber se está funcionado //

function EnviarWhats(){
  let assunto = '*Site - Adega Irmandade Tabacaria*';
  let nome    =  ' *Nome:* ' + document.querySelector('#nome').value;
  let email    =  ' *E-mail:* ' + document.querySelector('#email').value;
  let fone    =  ' *Telefone:* ' + document.querySelector('#fone').value;
  let mens    =   '*Mensagem:*'  + document.querySelector('#mens').value;
  
  let numeroWhats = '5511951779809';

  let quebraDelinha = '%0A'; 

  window.open('https://api.whatsapp.com/send?phone=' +
    numeroWhats + '&text=' + 
    assunto + quebraDelinha + quebraDelinha + 
    nome + quebraDelinha + 
    email + quebraDelinha +
    fone + quebraDelinha +
    mens, '_blank' );

  
    //console.log(nome + " - " + email); teste console //


}

function fecharLogin() {
  var login = document.querySelector('.estruturaLogin'); // Seleciona a estrutura pelo elemento de classe para o fechamento
  login.style.display = 'none';

  window.location.href = 'https://adegairmandade.smpsistema.com.br/';
}




function carregarLogin() {
  var formData = $('#loginUsuario').serialize();
  // console.log("Dados do Form: " + formData);

  $.ajax({
    url: '/admin/class/cliente.php',
    method: 'POST',
    data: formData,
    dataType: 'json',
    success: function(data) {
      if (data.success) {
        $('#msgLogin').html('<div class="msgSuccess">' + data.message + '</div>');
        window.location.href = 'https://adegairmandade.smpsistema.com.br/';
      } else {
        $('#msgLogin').html('<div class="msgSuccess">' + data.message + '</div>');
      }
    },
    error: function(xhr, status, error) {
      // console.log(xhr);
      // console.log("A requisição para cliente.php falhou.");
    }
  });
}






 
  
 
  

































