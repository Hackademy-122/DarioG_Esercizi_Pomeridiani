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
