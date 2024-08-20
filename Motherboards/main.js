const colorBtn = document.getElementById("colorbtn")
const cards = document.querySelectorAll('.card')
const linksCard = document.querySelectorAll(".card h3 a")

console.log(linksCard)
colorBtn.addEventListener("click",()=>{
    document.body.classList.toggle("darkTheme")
    //alert(colorBtn.firstChild.classList.contains("fa-lightbulb"))
    if(colorBtn.firstChild.classList.contains("fa-lightbulb")){
        colorBtn.firstChild.classList.remove('fa-lightbulb')
        colorBtn.firstChild.classList.add('fa-moon')
        cards.forEach(element => {
            console.log(element)
            element.classList.remove("color-card-white")
        })
        linksCard.forEach(e =>{
            e.style.color = "black"
        })
     
    }else{
        colorBtn.firstChild.classList.remove('fa-moon')
        colorBtn.firstChild.classList.add('fa-lightbulb')
        cards.forEach(element => {
            console.log(element)
            element.classList.add("color-card-white")
        })
        linksCard.forEach(e =>{
            e.style.color = "white"
        })
    }
})