// ESERCIZIO 1
// Dato un array x e un valore y verificare se l'array fornito contiene il valore. L'array può contenere numeri o stringhe.Restituire true se l'array contiene il valore, false in caso contrario. ESEMPIO: check([66, 101], 66) ---> true check(['what', 'a', 'great', 'kata'], 'kat') ---> false

function contieneValore(a, b)
{
let arr = a;
let incluso = arr.includes(b);
return incluso;
}
let contienevalore = contieneValore([1,25,"dario","gianni"],3)
console.log(contienevalore)


// ES 2:
// Dato un array di numeri, creare una funzione che restituisca la somma di tutti i numeri contenuti nell'array. Esempio: let array = [1, 5 ,7 ,12]; Output = 25

function sommaArray(n)
{
let somma = n.reduce((a, b) => a + b, 0);
return somma;
}
let risultato = sommaArray([1, 5 ,7 ,12,35]);
console.log("Output:", risultato);

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
let temperature = temperatura([1, 5, 89, 2, 8])
console.log(temperature)


// ES 6: 
// Scrivere un programma che permetta di filtrare soltanto le parole all’interno di un array:
// let mixArray = [1, true, ‘hackademy’, 100, ‘Javascript’, false, null, ‘php’]
// il risultato dovra’ dare, let filtered = [‘hackademy’, ‘Javascript’, ‘php’]


let mixArray = [1, true, "hackademy", 100, "Javascript", false, null, "php", "dario"];
function isString(element)
{
return typeof element === "string";
}
let filtered = mixArray.filter(isString);
console.log(filtered);