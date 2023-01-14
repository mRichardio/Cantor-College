(function(){
                // Image Carousel
    let imageAr = ['images/cantorBuilding.webp', 'images/cantorAtrium.webp', 'images/learningStudents.webp', 
    'images/cantorStreetArt.webp', 'images/cantorGallaryArt.webp'];
    let count = 0;
    document.getElementById("myImages").setAttribute("src", imageAr[count]) // Default to show before the loop   
    setInterval(function(){
        count++
        if(count === imageAr.length){
            count = 0;
        }
        document.getElementById("myImages").setAttribute("src", imageAr[count])
    }, 3000)
})();