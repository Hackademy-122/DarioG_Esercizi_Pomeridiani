let navbar = document.querySelector(".navbar")

window.addEventListener("scroll", () =>
{
    if(window.scrollY > 0)
    {
        navbar.style.backgroundColor = "#cd05ab";
    }
    else
    {
        navbar.style.backgroundColor = "blueviolet"
    }
});

let click = document.querySelector("#click");
let title = document.querySelector("#title");

click.addEventListener("click", () => {
    let r = Math.floor(Math.random() * 255);
    let g = Math.floor(Math.random() * 255);
    let b = Math.floor(Math.random() * 255);

    title.style.color = `rgb(${r}, ${g}, ${b})`;
});
