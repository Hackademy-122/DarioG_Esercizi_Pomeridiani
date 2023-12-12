// esercizio 1
// Scrivere una funzione che prenda come input un numero e generi un array composto da n numeri casuali compresi tra 1 e 10.

function generaNumeriCasuali(n)
{
    let numeriCasuali = [];
        for (i = 0; i < n; i++)
        {
            let numeroCasuale = Math.random() * 11;
            numeroCasuale = Math.floor(numeroCasuale);
            numeriCasuali.push(numeroCasuale);
        }
        
        return numeriCasuali;
}
let risultato = generaNumeriCasuali(5)
console.log(risultato)



// esercizio2
// Scrivi un programma che dato un array di 10 numeri interi ordinati in modo casuale li riordini in modo decrescente.

function riordina()
{
    let xyz =  [6,25,9,3,147,5]
    xyz.sort(function(a, b){return b - a});
    // per ordinarli in maniera crescente invertire a - b

    
    return xyz;
    


}

let ordinati = riordina()
console.log(ordinati);




// esercizio 3
// Scrivi una funzione che dato un numero intero (massimo 9999) conti da quante cifre è formato.

function contaCifre(numero) {
    if (numero >= 0 && numero <= 99)
            {
                return  `${numero} ha 2 cifre`;
            }
        else if (numero >= 100 && numero <= 999)
            {
                return `${numero} ha 3 cifre`;
            }
        else if ( numero >= 1000 && numero <= 9999 )
            {
                return `${numero} ha 4 cifre`;
            }
        else{
                return `${numero} non è valido`
            }
    }
    
    let contaCifre2 = contaCifre(592)
    console.log(contaCifre2)


// Esercizio 4
// Scrivi una funzione di uguaglianza che prenda in input due argomenti e restituisca TRUE se i due argomenti sono IDENTICI,
// FALSE altrimenti.

function identici(c, d)
{
    if (c !== d)
        { return !(c!==d)}
    
    else if ( c == d)
        { return ( c == d )}
    else ( c!=d)
        {
        return (c!=d)
        }
    }
let identici2 = identici(1, 2)
console.log(identici2)



// esercizio 5
// Scrivi una funzione che dato un numero stampi la tabellina corrispondente.


function stampaTabellina(numero)
{   let tabellina = [];
    for (i = 1; i <= 10; i++)
    {
        let risultato = numero * i;
        risultato = numero + " x " + i + " = " + risultato
        tabellina.push(risultato);
    }
    return tabellina
}
let tabellina2 = stampaTabellina(6);
console.log(tabellina2)

// esercizio 6
// Scrivi due funzioni: dato un array: let numbers = [10, 12, 78, -4, -20, 11]; una che prenda in input un array di numeri e restituisca il maggiore l'altra che restituisca il minore. 

let numbers = [10, 12, 78, -4, 11]

function decrescente()
{
    let min = Math.min(...numbers)
    // per averli in ordine crescente sostituire .min con .max
    return ` il numero più piccolo è ${min}`
}
let minore = decrescente()
console.log(minore)

