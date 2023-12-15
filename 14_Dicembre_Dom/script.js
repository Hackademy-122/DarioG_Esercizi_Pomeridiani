// // ESERCIZIO 1
// //   Lavoriamo sul DOM. Creare 3 paragrafi in HTML e 3 bottoni. 

// // Il primo bottone dovrà nascondere i 3 paragrafi e farli ricomparire
// // il secondo bottone dovrà cambiare i colori dei paragrafi in maniera casuale
// // il terzo bottone dovrà rendere i paragrafi in grassetto e farli tornare come prima.
// // PS: Uniamo le conoscenze che abbiamo appreso finora, come sappiamo quando c'è qualcosa di casuale possiamo utilizzare il Math.random().


let p = document.querySelectorAll("p")
let riprova = document.querySelector("#riprova")

let scompari = document.querySelector("#uno")
let colore = document.querySelector("#due")
let grassetto = document.querySelector("#tre")

scompari.addEventListener("click", () => {
    p.forEach(a => {
      a.classList.toggle("d-none");
    });
  
    scompari.classList.add("d-none");
  
    let xyz = document.createElement("button");
    xyz.innerHTML = "Ricompari";
    riprova.appendChild(xyz);
        
  });
  



// Scompare solo l' elemento con indice n
// scompari.addEventListener("click", () => {
//     p.forEach((a, b)=> {
//         if (b!==n){a.classList.toggle("d-none");}
//     });
// });

colore.addEventListener("click", () => {
    p.forEach(a => {
        let r = Math.floor(Math.random()*255);
        let g = Math.floor(Math.random()*255);
        let b = Math.floor(Math.random()*255);
        a.style.color =`rgb(${r}, ${g}, ${b})`        
    });
});

grassetto.addEventListener("click", () =>
    {
        p.forEach(a=>
            a.classList.toggle("grassetto"))
    }
);

// // ESERCIZIO 2
// // Replicare le card in dinamica con JavaScript, come visto a lezione.
// // Create un array di oggetti a vostro piacimento e provare a divertirvi come abbiamo fatto a lezione, se avete tempo provate ad inserire qualche altra feature o funzione in JS.


let row = document.querySelector(".row")

let array = [
    { nome: 'Riccardo', age: 23, url: "https://picsum.photos/200/200" },
    { nome: 'Emanuele', age: 25, url: "https://picsum.photos/200/200" },
    { nome: 'Giovanni', age: 23, url: "https://picsum.photos/200/200" },
];

let dario = 
{
    nome: "Dario", age: 36, url: "https://picsum.photos/200/200"
}
array.push(dario)

array.forEach((el) => {
    let div = document.createElement('div');
    div.classList.add('col-12', 'col-md-6', 'my-4');
    
    div.innerHTML = `
    <div class="card card-custom mx-auto" style="width: 18rem;">
    <img src="${el.url}" class="card-img-top" alt="...">
    <div class="card-body text-center">
    <h5 class="card-title">${el.nome}</h5>
    <p class="card-text">${el.age}</p>
    <div class="text-start">
    <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    
    </div>
    </div>`;
    
    
    row.appendChild(div);
});









