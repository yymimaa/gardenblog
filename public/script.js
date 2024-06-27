const header = document.querySelector("nav");

window.addEventListener("scroll", function() {
    header.classList.toggle("bg-success", window.scrollY > 0);
});

var typingEffect = new Typed(".multiText",{
    strings : ["You", "Me", "Better World"],
    loop : true,
    typeSpeed : 95,
    backSpeed : 100,
    backDelay : 2000
})
