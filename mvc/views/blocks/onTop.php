<button type="button" class="btn btn-floating btn-lg" id="btn-back-to-top">
    <i class="fas fa-arrow-up" style="color:white"></i>
</button>
<script>
let mybutton = document.getElementById("btn-back-to-top");

window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
<style>
#btn-back-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    display: none;
    border-radius: 35px;
    background-color: #1B9CE5;
}
#btn-back-to-top : hover {
    background-color: grey;
}
</style>