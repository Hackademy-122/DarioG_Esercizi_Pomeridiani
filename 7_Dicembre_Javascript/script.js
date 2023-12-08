// // esercizio 1 con if esle
// console.log(" ");
// console.log("Esercizio 1 con if else")

// let voto = 19;

// if (voto < 18)
// {
// console.log("Insufficiente");
// }
// else if (voto >= 18 && voto < 21)
// {
// console.log("Sufficiente");
// }
// else if (voto >= 21 && voto < 24)
// {
// console.log("Buono");
// }
// else if (voto >= 24 && voto < 27)
// {
// console.log("Distinto");
// }
// else if (voto >= 27 && voto <= 29)
// {
// console.log("Ottimo");
// }
// else if (voto === 30)
// {
// console.log("Eccellente");
// }
// else {
// console.log("Voto non valido");
// }

// // esercizio 1 con switch
// console.log(" ");
// console.log("Esercizio 1 con switch")


// let voto2 = 24;
// switch (true)
// {
// case voto2 >= 0 && voto2 < 18:
// console.log("Insufficiente");
// break;
// case voto2 >= 18 && voto2 < 21:
// console.log("Sufficiente");
// break;
// case voto2 >= 21 && voto2 < 24:
// console.log("Buono");
// break;
// case voto2 >= 24 && voto2 < 27:
// console.log("Distinto");
// break;
// case voto2 >= 27 && voto2 <= 29:
// console.log("Ottimo");
// break;
// case voto2 === 30:
// console.log("Eccellente");
// break;
// default:
// console.log("Voto non valido");
// }





// // esercizio 2 con switch
// console.log(" ");
// console.log("Esercizio 2 con switch")

// let temp2 = 15;
// switch (true) {
// case temp2 < -10:
// console.log("copriti…ancora ti raffreddi");
// break;

// case temp2 >= -10 && temp2 < 0:
// console.log("non e’ tanto il freddo quanto l’umidità");
// break;

// case temp2 >= 0 && temp2 < 20:
// console.log("non ci sono piu’ le mezze stagioni");
// break;

// case temp2 >= 20 && temp2 < 30:
// console.log("mi dia una peroni sudata");
// break;

// case temp2 >= 30:
// console.log("lu mare, lu sole, lu ientu");
// break;

// default:
// console.log("non valido");
// }


// // esercizio 2 con if esle
// console.log(" ");
// console.log("Esercizio 2 con if else")


// let temp = 29;

// if (temp < -10)
// {
// console.log("copriti…ancora ti raffreddi");
// } 
// else if (temp >= -10 && temp < 0)
// {
// console.log("non e’ tanto il freddo quanto l’umidità");
// }
// else if (temp >= 0 && temp < 20)
// {
// console.log("non ci sono piu’ le mezze stagioni");
// } else if (temp >= 20 && temp < 30)
// {
// console.log("mi dia una peroni sudata");
// }
// else if (temp >= 30)
// {
// console.log("lu mare, lu sole, lu ientu");
// } else
// {
// console.log("non valido");
// }


// // esercizio 3

let acqua = 1
let coca = 2
let birra = 3

let risposta= prompt("che bevanda vuoi")

while (risposta == 1 || risposta == 2 || risposta || 3)
{ 
if (risposta== 1)
{
alert("hai scelto l' acqua")
break;
}
else if (risposta == 2)
{
alert("hai scelto coca")
break;
}
else if ( risposta == 3)
{
alert("hai scelto birra")
break;
}
else
{
alert("devi scegliere una bevanda")
let risposta2= prompt("che bevanda vuoiiiiiiiii")
risposta = risposta2
}    
}
22