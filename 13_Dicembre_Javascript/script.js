// ES 1 : Realizzare un oggetto che rappresenti un garage, dovrà contenere una lista di automobili. Ciascuna automobile dovra’ avere una marca (es. Fiat) ed una lista di modelli (es. Pandino tattico rosso).
// Scrivere un metodo che prenda in input una marca e stampi i modelli presenti nel garage di quella stessa marca.


let Garage = {
    "fiat": [
    {"nome": "500", "colore": "rossa"},
    {"nome": "panda", "colore": "nera"},
    {"nome": "punto", "colore": "bianca"},
    ],
    "toyota": [
    {"nome": "corolla", "colore": "rosso"},
    {"nome": "yaris", "colore": "nero"},
    {"nome": "rav4", "colore": "bianca"},
    ],
    "stampaModelli": function (marca)
    {
        
        if (Garage[marca])
            {
                console.log("Si, abbiamo " + marca)
                let ok = Garage[marca.toLowerCase()].forEach((element)=> console.log(element.nome, element.colore))
                console.log ( "Grazie ma non mi piacciono le macchine rosse, dimmi solo le bianche" )
                let autoBianche = Garage[marca.toLowerCase()].filter((element) => element.colore == "bianca");
                console.log("Le auto bianche sono:", autoBianche);
            }
        else
            {
                console.log(`Mi dispiace, ma non abbiamo ${marca}`)
            }
    },
}
Garage.stampaModelli("toyota")


