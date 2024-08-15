function mostraSlide(n) {

    let i;
    let slides = document.getElementsByClassName("mySlides");
    let demo = document.getElementsByClassName("demo");
    let caption = document.getElementById("caption");

    if( n > slides.length){slideIndex = 1;}
    if( n < 1){slideIndex = slides.length;}
    for(i = 0; i < slides.length; i++){
        slides[i].style.display = "none";
    }
    for(i = 0; i < demo.length; i++){
        demo[i].className = demo[i].className.replace(" active", "");
    }

    slides[slideIndex - 1].style.display = "block";
    demo[slideIndex -1].className += " active";
    caption.innerHTML = demo[slideIndex - 1].alt;
    }

    var modale = document.getElementById("myModal");
    var img = document.getElementsByClassName("ModalImg");
    var imgModale = document.getElementById("img01");
    var captionText = document.getElementById("caption2");



    for(let i = 0; i < img.length; i++){
        img[i].onclick = function () {
            modale.style.display = "block";
            imgModale.src = this.src;
            captionText.innerHTML= this.alt;
        }
    }
    var span = document.getElementsByClassName("close")[0];
    span.onclick = function () {
        modale.style.display = "none";
    };

    let slideIndex = 1;
    mostraSlide(slideIndex);

    function plus_slide(n){
        mostraSlide(slideIndex += n);
    }

    function SlideCorrente(n){
        mostraSlide(slideIndex = n);
    }
