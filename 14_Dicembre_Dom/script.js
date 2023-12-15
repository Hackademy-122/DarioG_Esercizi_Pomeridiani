let btnuno = document.querySelector("#uno")
let btndue = document.querySelector("#due")
let btntre = document.querySelector("#tre")
let tuttibtn =document.querySelector(".css")
let p = document.querySelectorAll("p")
console.log(p)


// funzione per colore casuale che riutilizzerò più volte

let r; let g; let b;
function coloreCasuale()
{r = Math.floor(Math.random() * 256);g = Math.floor(Math.random() * 256);b = Math.floor(Math.random() * 256);}
coloreCasuale()

// fine funzione


btnuno.addEventListener("click", () => {
    p.forEach(a => {
        coloreCasuale();
        a.style.color = `rgb(${r}, ${g}, ${b})`;
    });
});

btndue.addEventListener("click", () => {
    p.forEach(a => {
        a.classList.toggle("d-none");
    });
});

btntre.addEventListener("click", () => {
    p.forEach((a, b) => {
        if (b!=1)
        {a.classList.toggle("bold");}
        
    });
});

// --------------------------------------------------------------
let row = document.querySelector(".row")
let persone = [
    { nome: 'Riccardo', age: 23, url: "https://picsum.photos/200/200" },
    { nome: 'Emanuele', age: 25, url: "https://picsum.photos/200/200" },
    { nome: 'Giovanni', age: 23, url: "https://picsum.photos/200/200" },
];

let sabrina = {nome:"sabrina", age: 36}


let dario = {nome: "Dario", age: 36, url: "https://picsum.photos/200/200" }
persone.push(dario)

persone.forEach((a) =>
{
    let div = document.createElement("div")
    div.classList.add("col-12","col-md-6","col-lg-3","my-5")
    div.innerHTML=
    `<div class="card shadow-lg p-3 mb-5 bg-white rounded mx-auto" >
    <img src="${a.url}" class="" alt="...">
    <div class="card-body text-center">
    <h5 class="card-title">${a.nome}</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    </div>
    `
    row.appendChild(div)
})










