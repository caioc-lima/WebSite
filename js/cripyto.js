// CRIPYTO MOEDAS

function typeWrite(elemento) {
    const textoArray = elemento.innerHTML.split('');
    elemento.innerHTML = '';
    textoArray.forEach((letra, i) => {
        setTimeout(() => elemento.innerHTML += letra, 100 * i);
    });
}

const titulo = document.getElementById("titulo-cripyto");

console.log(titulo);

typeWrite(titulo);
