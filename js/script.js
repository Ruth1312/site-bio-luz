

function dataBrasil(parametro) {
    var dia = parametro.getDate();
    var mes = parametro.getMonth() + 1;
    var ano = parametro.getFullYear();
    return dia + "/" + mes + "/" + ano;
}

function calcular() {
    var dia = calculo.dia.value;
    var mes = calculo.mes.value;
    var ano = calculo.ano.value;

    var dt = ano + '-' + mes + '-' + dia + ' 00:01:00';
    var mest = new Date(dt);
    //alert(mest);    
    mest.setDate(mest.getDate() + 15);    
    alert("Sua data de fecundação é: " + dataBrasil(mest));

    var datamin = new Date(dt);
    //alert(datamin);
    datamin.setDate(mest.getDate() + (38 * 7));
    alert('A data mínima pro seu bebê nascer é: ' + dataBrasil(datamin));

    var datamax = new Date(dt);
    //alert(datamin);
    datamax.setDate(mest.getDate() + (42 * 7));
    alert('A data máxima pro seu bebê nascer é: ' + dataBrasil(datamax));

}


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}