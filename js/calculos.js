var resultado = document.getElementById('result');
var table = document.getElementById('tabela_imc');


resultado.innerHTML = '';


document.getElementById("calcular").onclick = function () {
   
    var n_p = parseFloat(document.getElementById("peso").value.replace(",","."));
    var n_a = parseFloat(document.getElementById("altura").value.replace(",","."));


    if(n_p == true || n_a == true){
        console.log(imc);

        var imc = n_p / n_a**2;
    
        var result_imc = imc.toFixed(2);
        
        resultado.style.marginTop = "5%"
        resultado.innerHTML += "<h6>" + "Seu IMC é: " + result_imc + "</h6>";
        resultado.innerHTML += "<h6>" + "Confira abaixo a tabela" + "</h6>";
    
    
        table.innerHTML += '<img src="../img/imc.png">';  

    }else{
        alert("Preencha os campo")
    

    }


    
}



document.getElementById("limpar").onclick = function(){

    var peso = document.getElementById("peso").innerHTML;
    var altura = document.getElementById("altura").innerHTML;


    altura.innerHTML = '';
    peso.innerHTML = '';
    resultado.innerHTML = '';
    table.innerHTML = '';
}








