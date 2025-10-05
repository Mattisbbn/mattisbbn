

export const journeyHandler = () => {
    const pills = document.querySelectorAll('.journey-pill');
    const timelines = document.querySelectorAll('.timeline');

    pills.forEach(pill => {
    pill.addEventListener('click', () => {

        if(pill.classList.contains('active')) {
            return;
        }


        pills.forEach(otherPill => {
            otherPill.classList.remove('bg-chetwode-blue-500', 'text-white', 'border-chetwode-blue-500');
            otherPill.classList.add('bg-gray-50', 'text-bright-gray-900', 'border-2', 'dark:bg-gray-800', 'dark:border-gray-700', 'dark:text-gray-200');
            otherPill.classList.remove('active');
            timelines.forEach(timeline => {
                timeline.classList.add('hidden');
            });
        });
        pill.classList.remove('bg-gray-50', 'text-bright-gray-900', 'border-gray-200', 'dark:bg-gray-800', 'dark:border-gray-700', 'dark:text-gray-200');
        pill.classList.add('bg-chetwode-blue-500', 'text-white', 'border-chetwode-blue-500');
        pill.classList.add('active');
        if(pill.id === 'school') {
            document.getElementById('school-timeline')?.classList.remove('hidden');
        }
        if(pill.id === 'professional') {
            document.getElementById('professional-timeline')?.classList.remove('hidden');
        }
    });
});

}
export const ProjectHandler = () => {

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

}
export const ThemeToggle = () => {
    const themeToggleButton = document.getElementById("theme-toggle-button")
    const body = document.documentElement
    themeToggleButton.addEventListener("click",()=>{
    
        body.classList.toggle("dark")
        if(body.classList.contains("dark")){
            document.getElementById("moon-icon").classList.add("hidden")
            document.getElementById("sun-icon").classList.remove("hidden")
        }else{
            document.getElementById("moon-icon").classList.remove("hidden")
            document.getElementById("sun-icon").classList.add("hidden")
        }
    })
}