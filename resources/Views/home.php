<?= component('head',['js'=>['home.ts']]) ?>
<header>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</header>
<main>
    <section class="flex flex-col items-center justify-center h-screen w-full overflow-hidden relative landpage">
     
        <h1 class="text-8xl font-bold text-bright-gray-900">Mattis Babin</h1>
        <hr class="w-1/8 border-royal-blue-400 border-3 rounded-full my-4">
        <h2 class="text-3xl text-bright-gray-600 mb-3">Développeur Web</h2>
        <div class="text-xl font-semibold mt-4 flex flex-wrap">
        <a draggable="false" target="_blank" href="https://github.com/mattisbbn" class="cursor-pointer text-gray-700 border-gray-700 group p-2 border-2 rounded-lg me-2 mb-2 hover:border-royal-blue-500 hover:bg-royal-blue-500 hover:text-white">GitHub <i class="fa-brands fa-github group-hover:text-white"></i></a>
            <a draggable="false" target="_blank" href="/documents/CV.pdf" class="cursor-pointer text-gray-700 border-gray-700 group p-2 border-2 rounded-lg me-2 mb-2 hover:border-royal-blue-500 hover:bg-royal-blue-500 hover:text-white">Mon CV <i class="fa-solid fa-file-pdf group-hover:text-white"></i></a>
            <a draggable="false" target="_blank" href="https://www.linkedin.com/in/mattisbbn/" class="cursor-pointer text-gray-700 border-gray-700 group p-2 border-2 rounded-lg me-2 mb-2 hover:border-royal-blue-500 hover:bg-royal-blue-500 hover:text-white">LinkedIn <i class="fa-brands fa-linkedin group-hover:text-white"></i></a>
        </div>
        <div class="mouse absolute bottom-10 left-1/2"></div>
    </section>



















    <section class="flex flex-col h-screen w-6/12 mx-auto introduction">
        <h2 class="text-5xl text-center font-bold text-gray-800 font-patrick-hand mt-[15vh] mb-12">Qui suis-je ? </h2>

        <p class="text-gray-800 text-2xl font-semibold">Je m'appelle Mattis, j'ai 19 ans je suis actuellement en alternance chez Akoufen et je viens d'obtenir mon BTS SIO option SLAM avec la mention assez bien. Passionné par le développement web, je suis curieux et touche-à-tout.
        <br><br>

        Je poursuis en Bachelor Concepteur Développeur d’Applications à la rentrée 2025 et je recherche une alternance sur Angers dès septembre 2025.

        <br><br>
        Je suis à l’aise aussi bien avec Laravel et ReactJS que sur des projets en PHP natif. Actuellement, j’apprends Next.js et j’ai déjà eu l’occasion de développer des projets complets, du back-end au front-end. Curieux, motivé et sérieux, je suis toujours prêt à découvrir de nouvelles technologies.</p>
    </section>
    <section class="flex flex-col h-screen w-6/12 mx-auto">
        <h2 class="text-5xl text-center font-bold text-gray-800 font-patrick-hand mt-[15vh] mb-12">Mon parcours</h2>



        <div class="mx-auto mb-4">
        <button id="school-button" unselectable="on" class="text-white cursor-pointer bg-blue-marguerite-600 group p-2 border-2 rounded-lg me-2 mb-2 border-blue-marguerite-600 hover:bg-blue-marguerite-600 hover:text-white"><i class="fa-solid text- fa-graduation-cap w-8 text-xl"></i>Scolaire</button>
        <button id="work-button" unselectable="on" class="group cursor-pointer p-2 border-2 rounded-lg me-2 mb-2 border-blue-marguerite-600 hover:bg-blue-marguerite-600 hover:text-white"><i class="fa-solid fa-suitcase w-8 text-xl"></i>Professionel</button>
    </div>








        <div id="parcours-scolaire" class=" ms-auto me-auto">
        <div class="border-l-6 border-blue-marguerite-600 relative ">
            <span class="rounded-full h-[25px] w-[25px] top-[0px] left-[-16px] bg-blue-marguerite-600 absolute"></span>
            <div class="ms-4 pb-2">
                <h1 class="font-bold text-xl mb-3">Lycée Saint Aubin La Salle</h1>
                <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-graduation-cap w-8 text-xl"></i>BAC PRO systemes Numériques</p>
                <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-location-dot w-8 text-xl"></i>Verrieres-sur-Anjou</p>
                <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-calendar-days w-8 text-xl"></i>2020-2023</p>
            </div>
        </div>

        <div class="border-l-6 border-blue-marguerite-600 relative">
            <span class="rounded-full h-[25px] w-[25px] top-[0px] left-[-16px] bg-blue-marguerite-600 absolute"></span>
            <div class="ms-4 pb-2">
                <h1 class="font-bold text-xl mb-3">École Supérieure des Pays de Loire</h1>
                <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-graduation-cap w-8 text-xl"></i>BTS SIO SLAM</p>
                <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-location-dot w-8 text-xl"></i>Belle-Beille</p>
                <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-calendar-days w-8 text-xl"></i>2023-2025</p>
            </div>
        </div>
        <div class="border-l-6 border-blue-marguerite-300 relative">
            <span class="rounded-full h-[25px] w-[25px] top-[0px] left-[-16px] bg-blue-marguerite-600 absolute"></span>
            <div class="ms-4 pb-2">
                <h1 class="font-bold text-xl mb-3">MyDigitalSchool</h1>
                <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-graduation-cap w-8 text-xl"></i>Bachelor CDA</p>
                <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-location-dot w-8 text-xl"></i>Belle-Beille</p>
                <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-calendar-days w-8 text-xl"></i>Septembre 2025</p>
            </div>
            <span class="rounded-full h-[25px] w-[25px] top-[99%] left-[-16px] bg-blue-marguerite-300 absolute"></span>
        </div>
    </div>
      
    </section>
</main>

    
</body>
</html>