// esercizio 1
console.log("Esercizio Uno")
let a = 1
let b = 2
let c = 3
let d = 6
let e = 7

let somma = a + b + c + d + e
console.log(somma)

let media = somma / 5
console.log(media)

console.log( `La somma tra i numeri equivale a ${somma} e la media risulta ${media}` )

// esercizio 2
console.log ( " ")
console.log("Esercizio Due")
let year = 2023
let birth = 1997

let YearsOld = year - birth
console.log(YearsOld)

let hundred = 100 - YearsOld
console.log(hundred)

console.log(`Hai ${YearsOld} anni e ti mancano ${hundred} anni per compierne 100`)

// esercizio 3
console.log ( " ")
console.log("Esercizio Tre")

let cats = 44
let CatsInaRow = 6

// quante file di gatti
let rows = cats / CatsInaRow
rows = Math.round(rows)
console.log(`Ci sono ${rows} file di gatti`)


// quanti gatti avanzano
let OutCats = cats % CatsInaRow
console.log(`Restano fuori ${OutCats} gatti`)


// quanti gatti servono per completare un' altra fila
let MissingCats = CatsInaRow - OutCats
console.log(`Mancano ${MissingCats} gatti per completare una nuova fila`)

console.log(" ")
console.log("Quindi")

console.log(`Ci sono ${rows} di gatti e ne mancano ${MissingCats} per fare una nuova fila`)


// Extra

console.log ( " ")
console.log("Esercizio Extra 1° versione")

function temperaturamedia(messaggio, messaggio2)
{
let lun = 10
let mar = 2
let mer = 31
let gio = 22
let ven = 15
let sab = 6
let dom = 5

let media = (lun + mar + mer + gio + ven + sab + dom) / 7

console.log(messaggio + media + messaggio2)
}
temperaturamedia("La temperatura media è ", " gradi")


function temperaturaminima(messaggio, messaggio2)
{
let lun = 10
let mar = 2
let mer = 31
let gio = 22
let ven = 15
let sab = 6
let dom = 5

let min = Math.min( lun, mar, mer, gio, ven, sab, dom)

console.log(messaggio + min + messaggio2)
}
temperaturaminima("La temperatura minima è ", " gradi")

function temperaturamassima(messaggio, messaggio2)
{
let lun = 10
let mar = 2
let mer = 31
let gio = 22
let ven = 15
let sab = 6
let dom = 5

let max = Math.max( lun, mar, mer, gio, ven, sab, dom)

console.log(messaggio + max + messaggio2)
}
temperaturamassima("La temperatura massima è ", " gradi")


console.log ( " ")
console.log("Esercizio Extra 2° versione")

let tempMed;
function mediaTemp() 
{
let lun = 10;
let mar = 2;
let mer = 31;
let gio = 22;
let ven = 15;
let sab = 6;
let dom = 5;

tempMed = (lun + mar + mer + gio + ven + sab + dom) / 7;
}
mediaTemp();

let tempMin;
function minTemp() 
{
let lun = 10;
let mar = 2;
let mer = 31;
let gio = 22;
let ven = 15;
let sab = 6;
let dom = 5;

tempMin = Math.min(lun, mar, mer, gio, ven, sab, dom)
}
minTemp();

let tempMax;
function maxTemp() 
{
let lun = 10;
let mar = 2;
let mer = 31;
let gio = 22;
let ven = 15;
let sab = 6;
let dom = 5;

tempMax = Math.max(lun, mar, mer, gio, ven, sab, dom)
}
maxTemp();

console.log("La temperatura media è di " + tempMed + " gradi, la temperatura minima è " + tempMin + " gradi, la temperatura massima è di " + tempMax + " gradi.");












