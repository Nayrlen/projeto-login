
const eye = window.document.getElementById('eye')
const inputPass = window.document.getElementById('isenha')

eye.addEventListener('click', mostrarPass)

function mostrarPass() { 
    if (inputPass.type === 'password') {
        inputPass.setAttribute('type','text')
        eye.classList.replace('bi-eye-slash-fill','bi-eye-fill')
    } else {
        inputPass.setAttribute('type','password')
        eye.classList.replace('bi-eye-fill','bi-eye-slash-fill')
    }
}

