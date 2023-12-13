// ESERCIZIO 1
// Dato un array x e un valore y verificare se l'array fornito contiene il valore. L'array può contenere numeri o stringhe.Restituire true se l'array contiene il valore, false in caso contrario. ESEMPIO: check([66, 101], 66) ---> true check(['what', 'a', 'great', 'kata'], 'kat') ---> false

function contieneValore(a, b)
{
let c = a.includes(b)
return c
}
let d = contieneValore([1, 2, 3, 58, 96, 4, "dario", "tessa", true, false], "dario")
console.log(d);



// ES 2:
// Dato un array di numeri, creare una funzione che restituisca la somma di tutti i numeri contenuti nell'array. Esempio: let array = [1, 5 ,7 ,12]; Output = 25

function sommaArray(n)
{
let somma = n.reduce((a, b) => a + b, 0);
return somma;
}
let somma = sommaArray([1, 5 ,7 ,12,35,47]);
console.log(somma);

// ES 3:
// Scrivi un programma che dato un array di numeri, restituisca in output la media e tutti i valori minori della media. Esempio: Input: a = [3, 5, 10, 2, 8] Output: media = 5.6, valori minori = [3, 5, 2]

function temperatura(temperature)
{
temperature = temperature.sort((a,b) => a - b);
let minimi = temperature.slice(0, 2);
let somma = temperature.reduce((a,b)=>a + b, 0);
let nValor = temperature.length;
let media = somma / nValor;
return `La media è stata ${media}, le minime sono state ${minimi}`
}
let temperature = temperatura([4, 5, 89, 2, 8, 36,])
console.log(temperature)

// ES 4
// Creare una funzione javascript che prende due argomenti e restituisce tutti i numeri divisibili per il divisore dato. Il primo argomento è una array e il secondo è il divisore. findMultiples([1, 2, 3, 4, 5, 6], 2) --> [2, 4, 6]

function dividi(a,b)
{
let c = a.filter((a)=> a%b==0)
return c
}
let c = dividi([2,4,5,9,10,22], 2)
console.log(c);


// ES 6: 
// Scrivere un programma che permetta di filtrare soltanto le parole all’interno di un array:
// let mixArray = [1, true, ‘hackademy’, 100, ‘Javascript’, false, null, ‘php’]
// il risultato dovra’ dare, let filtered = [‘hackademy’, ‘Javascript’, ‘php’]



function isString(a)
{
let xx = a;
let z = xx.filter((el) =>  typeof el === "number" )
return z;
}
let filtrati = isString([1, true, "dario", 100, "tessa", false, null, NaN])
console.log(filtrati)


