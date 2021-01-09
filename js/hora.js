// nos retorna la fecha actual
let fechaactual = new Date();

 //METODO PARA OBTENER LA HORA
 document.body.innerHTML = "<h2> La hora actual es: " + 
 fechaactual.getHours() + ":" +
 fechaactual.getMinutes() + ":" + 
 fechaactual.getSeconds() +
 "</h2>"