// SOFT SKILLS

function typeWrite(elemento) {
    const textoArray = elemento.innerHTML.split('');
    elemento.innerHTML = '';
    textoArray.forEach((letra, i) => {
        setTimeout(() => elemento.innerHTML += letra, 150 * i);
    });
}

const titulo = document.getElementById("nick_usuario");

typeWrite(titulo);

