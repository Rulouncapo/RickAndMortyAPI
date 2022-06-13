
  
    let estado = document.querySelectorAll(".estado");
    let titulo = document.querySelectorAll(".titulo");
    let flechas = document.querySelectorAll(".flecha");
    var bool = false;
    for (let i = 0; i < flechas.length; i++) {
        estado[i].addEventListener('click',()=>{
            console.log(titulo);
            console.log(flechas);            
            let fle = flechas[i];
            if (bool == false) {
                console.log(fle);
                fle.classList.add("movido");
                bool = true;
            } else{
                console.log(fle);
                fle.classList.remove("movido");
                bool = false;
            }
        })            
    }
    for (let i = 0; i < flechas.length; i++) {
        titulo[i].addEventListener('click',()=>{
            let fle = flechas[i];
            if (bool == false) {
                console.log(fle);
                fle.classList.add("movido");
                bool = true;
            } else{
                console.log(fle);
                fle.classList.remove("movido");
                bool = false;
            }
        })            
    }




      