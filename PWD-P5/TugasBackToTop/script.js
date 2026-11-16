const tombolAtas = document.getElementById("backToTopBtn");

window.onscroll = function () {

    if (document.documentElement.scrollTop > 500) {
        tombolAtas.style.display = "block";
    } else {
        tombolAtas.style.display = "none";
    }

};

function kembaliKeAtas() {

    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });

}