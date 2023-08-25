
const productos = document.getElementById("productos");

productos.addEventListener("click", (e) => {
        ObtenerItem(e);
});

function ObtenerItem(item) {
    item.preventDefault();
   
    if(item.target.classList.contains("enviar")){
       let item2 = item.target.parentElement.parentElement.parentElement;
        console.log(item2)
        let nombre;
        nombre = item2.querySelector(".dark").textContent;
        
        

        let data = {nombre}
        console.log(data);
        MandarWhatsapp(data);
}else{
    console.log("no es el elemento")
}
}

function MandarWhatsapp(data){
    let link = "https://wa.me/51912849782?text=Hola,%20quisiera%20adquirir%20el%20panel%20de%20"+data.nombre;

    let a = document.createElement("a");
    a.href =link;
    a.target="_blank";
    a.click();

}