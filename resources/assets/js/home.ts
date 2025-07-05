import { log } from "console"

const schoolButton: Element | null = document.querySelector("#school-button")
const workButton: Element | null = document.querySelector("#work-button")

const schoolContainer: Element | null = document.querySelector("#parcours-scolaire")
const workContainer: Element | null = document.querySelector("#parcours-professionel")

schoolButton?.addEventListener("click",()=>{
    if(!schoolButton.classList.contains("bg-blue-marguerite-600")){
        schoolButton.classList.add("bg-blue-marguerite-600")
        schoolButton.classList.add("text-white")
        workButton?.classList.remove("bg-blue-marguerite-600")
        workButton?.classList.remove("text-white")
        workContainer?.classList.add("hidden")
        schoolContainer?.classList.remove("hidden")
    }
})

workButton?.addEventListener("click",()=>{
    if(!workButton.classList.contains("bg-blue-marguerite-600")){
        workButton.classList.add("bg-blue-marguerite-600")
        workButton.classList.add("text-white")
        schoolButton?.classList.remove("bg-blue-marguerite-600")
        schoolButton?.classList.remove("text-white")
        workContainer?.classList.remove("hidden")
        schoolContainer?.classList.add("hidden")
    }
})

const mouse: HTMLElement | null = document.querySelector(".mouse")


document.addEventListener("scroll",(e)=>{
    const landpageElement = document.querySelector(".introduction") as HTMLElement;
    
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
        
        console.log({
            landpageScrollPercentage: Math.round(landpageScrollPercentage)
        });
    }
})