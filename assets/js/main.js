const NUMBER_REG_EXPRE = /(^09[0-9]{8})\b/; // Para verificar un numero telefonico
const EMAIL_REG_EXPRE = /([\w]+)@([a-z]+)\.([a-z])/i; // Para  verificar un correo electronico
const CEDULA_REG_EXPRE = /\b(?<province>^[01][1-9]|[2][0-4]|30|10|20)(?<tercer>[0-6]{1})(?<number>[0-9]{7})\b/; // para verificar una cedula

const cedula= document.getElementById('cedula')
cedula.addEventListener('input',verificacion)
function verificacion(e){
    

    if(CEDULA_REG_EXPRE.test(e.target.value.trim())){
       cedula.classList.remove('is-invalid')
       cedula.classList.add('is-valid')
        
    }
    else{
        cedula.classList.add('is-invalid')
        
    }
}