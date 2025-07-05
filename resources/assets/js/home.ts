const schoolButton: Element | null = document.querySelector("#school-button")
const workButton: Element | null = document.querySelector("#work-button")

const schoolContainer: Element | null = document.querySelector("#parcours-scolaire")
const workContainer: Element | null = document.querySelector("#parcours-professionel")

schoolButton?.addEventListener("click",()=>{
    if(!schoolButton.classList.contains("bg-royal-blue-500")){
        schoolButton.classList.add("bg-royal-blue-500")
        schoolButton.classList.add("text-white")
        workButton?.classList.remove("bg-royal-blue-500")
        workButton?.classList.remove("text-white")
        workContainer?.classList.add("hidden")
        schoolContainer?.classList.remove("hidden")
    }
})

workButton?.addEventListener("click",()=>{
    if(!workButton.classList.contains("bg-royal-blue-500")){
        workButton.classList.add("bg-royal-blue-500")
        workButton.classList.add("text-white")
        schoolButton?.classList.remove("bg-royal-blue-500")
        schoolButton?.classList.remove("text-white")
        workContainer?.classList.remove("hidden")
        schoolContainer?.classList.add("hidden")
    }
})

const mouse: HTMLElement | null = document.querySelector(".mouse")
const landpageElement: HTMLElement | null = document.querySelector(".introduction");

document.addEventListener("scroll",(e)=>{
   
    
    if (landpageElement) {
        const scrollY = window.scrollY || window.pageYOffset;
        const landpageTop = landpageElement.getBoundingClientRect().top + scrollY;
        const landpageHeight = landpageElement.offsetHeight;
        const windowHeight = window.innerHeight;
        const landpageScrollPercentage = Math.max(0, Math.min(100, 
            ((scrollY + windowHeight - landpageTop) / landpageHeight) * 100
        ));
        let opacity = 70 - landpageScrollPercentage;
        if (mouse) {
            mouse.style.opacity = `${opacity / 100}`;
        }
    }
})

const expandProjectButtons = document.querySelectorAll(".expand-project-button")
const projectDescriptions = document.querySelectorAll(".project-description")   

expandProjectButtons.forEach((button,index) => {

    button.addEventListener("click",()=>{
        if(projectDescriptions[index].classList.contains("line-clamp-3")){
            projectDescriptions[index].classList.remove("line-clamp-3")
        }else{
            projectDescriptions[index].classList.add("line-clamp-3")
        }
    })

    
});