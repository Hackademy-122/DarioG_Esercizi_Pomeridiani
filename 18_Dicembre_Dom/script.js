let nomiVisualizzati = document.querySelector("#nomi_Visualizzati");
let mostraContatti = document.querySelector("#mostra_contatti");
let nascondiContatti = document.querySelector("#nascondi_contatti");
let addContact = document.querySelector("#AddContact")
let nome = document.querySelector("#contactName")
let numero = document.querySelector("#contactNumber")




let rubrica = {
    "contacts": [
        { nome: "Dario", numero: 6496444 },
        { nome: "Dario", numero: 6496444 },
        { nome: "Dario", numero: 6496444 },
        { nome: "Dario", numero: 6496444 },
    ],
    
    "mostraContatti": function () {
        nomiVisualizzati.innerHTML = "";
        this.contacts.forEach((el) => {
            let div = document.createElement("div")
            div.classList.add("col-12")
            div.innerHTML = `
            <div class="contact-card">
            <p>${el.nome}</p>
            <p>${el.numero}</p>
            <i class="fa-regular fa-trash-can text-danger fs-4"></i>
            </div>
            `;
            nomiVisualizzati.appendChild(div);
        });
    },
    "aggiungiContatto": function()
    {
        {
            if (nome.value != false && numero.value != false)
            {this.contacts.push({"nome": contactName.value, "numero": contactNumber.value})
            
        }
        
        else{
            alert("Inserisci i valori")
        }
    }
    
    
    
    
    
    
    
    
    
}
};
mostraContatti.addEventListener("click", () => {
    rubrica.mostraContatti()
    nascondiContatti.classList.remove("nascondi")
    mostraContatti.classList.add("nascondi")
    rubrica.mostraContatti()
    
    
    
});

nascondiContatti.addEventListener("click", () =>
{
    mostraContatti.classList.add("nascondi")
    nomiVisualizzati.classList.add("nascondi")
    nascondiContatti.classList.add("nascondi")
    mostraContatti.classList.remove("nascondi")
})





addContact.addEventListener("click", () =>
{
    rubrica.aggiungiContatto()
    nome.value=""
    
})









