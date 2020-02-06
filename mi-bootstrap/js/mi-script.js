var d = document;
var FotoGrande = d.getElementById("fotoGrande");
var TextoFotoGrande = d.getElementById("texto");
var Caja = d.getElementById("caja");
var anterior = d.getElementById("anterior");
var siguiente = d.getElementById("siguiente");
var miniaturas = d.getElementById("miniaturas");
var FotosMin = miniaturas.getElementsByTagName("img");

var indiceactual = 0;

function actualizarGaleria(quesrc, quealt){
    var srcgrande = quesrc.replace("miniaturas", "grandes");
    Caja.className = "cargando";
    
    setTimeout(function(){   
         FotoGrande.src = srcgrande;
        TextoFotoGrande.innerHTML = quealt;
            }, 1000);
   
}

FotoGrande.onload = function(){
    Caja.className= "";
};

for(var i = 0; i < FotosMin.length; i++){    
    FotosMin[i].dataset.indice = i;
    FotosMin[i].onclick = function(){ 
        indiceactual = this.dataset.indice; 
        actualizarGaleria(this.src, this.alt);
    }   
}


function irAnterior(){
    indiceactual--;
        if(indiceactual == -1){
        indiceactual = FotosMin.length - 1;
    }
    actualizarGaleria(FotosMin[indiceactual].src, FotosMin[indiceactual].alt);
    
}
anterior.onclick = irAnterior;

function irSguiente(){
    indiceactual++;
    if(indiceactual == FotosMin.length){       
        indiceactual = 0;
    }
        actualizarGaleria(FotosMin[indiceactual].src, FotosMin[indiceactual].alt);
    
}

siguiente.onclick = irSguiente;

//teclado
d.onkeydown = function(evento){
    var quetecla = evento.keyCode;
    
    if(quetecla == 37){
        irAnterior();        
    }else if(quetecla == 39){
        irSguiente();
    }
};


 

    
    
    
    
    
    
    
    
    
    
 
