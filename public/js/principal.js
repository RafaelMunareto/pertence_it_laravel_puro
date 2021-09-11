
$(document).ready(function (){


  $(".dropdown-trigger").dropdown();
  $('.money').mask('000.000.000.000.000,00', {reverse: true});
  $('#telefone').mask('(00) 00000-0000');
  $('.telefone').mask('(00) 00000-0000');
  $('#telefoneCadastro').mask('(00) 00000-0000');
  $('.modal').modal();
  $('.parallax').parallax();
  $('select').formSelect();
  $('.collapsible').collapsible();
  $('#textarea1').val('');
  $('.sidenav').sidenav();
  M.updateTextFields();
  $('.fixed-action-btn').floatingActionButton();

  $('.carousel').carousel(
    {
      dist: 0,
      padding: 0,
      fullWidth: true,
      indicators: true,
      duration: 100,
    }
    );
  autoplay();
  function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 3500);
  }
  $('.fixed-action-btn').floatingActionButton();


  //botao para voltar ao topo nas vantagens

  //Coloca o botão em uma varivel
var btn_subir = $(".botao-voltar-ao-topo");


//Faz a primeira verificacao ao carregar a pagina
$(document).ready(function(){
    var minhaposicao = $(this).scrollTop();
    if(minhaposicao >=100){
        btn_subir.fadeIn();
    }
    else{
        btn_subir.fadeOut();
    }
});

    //Fica monitorando a rolagem de pagina
    $(window).scroll(function(){
        var minhaposicao = $(this).scrollTop();

        if(minhaposicao >=100){
            btn_subir.fadeIn();
        }
        else{
            btn_subir.fadeOut();
        }
    });

    btn_subir.click(function(){
        $('html,body').animate({scrollTop:0},500);
    })

    //alteracao do tamanho da imagem
    if( $(window).width() <= 1024){
    $('#desktop').css("display", "none");
    $   ('#mobile').css("display", "block");
    }else{
    $('#desktop').css("display", "block");
        $('#mobile').css("display", "none");
    }

    //troca de cor para clientes novos

    $('.fase').each(function(){
      var tr = $(this).parent();
      var td = $(this).text();
      if(td == 'Para tratamento'){
        tr.addClass('corTratamento');
      }
    });

    //area do cliente
    $('#nav-historico').click(function(){
        $('#areaCliente-historico').css('display', 'block').fadeIn('slow');
        $('#areaCliente-contratos').css('display', 'none');
    });

    $('#nav-contratos').click(function(){
        $('#areaCliente-contratos').css('display', 'block').fadeIn('slow');
        $('#areaCliente-historico').css('display', 'none');
    });

    $('#nav-historicoM').click(function(){
        $('#areaCliente-historico').css('display', 'block').fadeIn('slow');
        $('#areaCliente-contratos').css('display', 'none');
    });

    $('#nav-contratosM').click(function(){
        $('#areaCliente-contratos').css('display', 'block').fadeIn('slow');
        $('#areaCliente-historico').css('display', 'none');
    });

});
