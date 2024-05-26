const boton = document.querySelector('.btn');
const wrap = document.querySelector('.wrap');
const form = document.getElementById('formprincipal');
const nombre = document.getElementById('nombre');
const correo = document.getElementById('correo');
const mensaje = document.getElementById('mensaje');



document.addEventListener('change', viendocambios);




function viendocambios()
{
   
if(nombre.value != '' && correo.value != '' && mensaje.value != '')
    {
        boton.disabled = false;
        boton.classList.remove('disabled');
     
    }

if(nombre.value == '' || correo.value == '' || mensaje.value == '')
    {
        boton.disabled = true;
        boton.classList.add('disabled');

    
        
    }

}




