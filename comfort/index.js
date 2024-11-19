window.addEventListener('scroll', reveal);
function reveal(){
    var reveals = document.querySelectorAll('.reveal');
    for(var i = 0; i < reveals.length; i++){
        var windowheight = window.innerHeight;
        var revealpoint = reveals[i].getBoundingClientRect().top;
        var revealTop = 150;

        if(revealpoint < windowheight - revealTop){
            reveals[i].classList.add('active');
        }
        else{
            reveals[i].classList.remove('active');
        }
    }
}