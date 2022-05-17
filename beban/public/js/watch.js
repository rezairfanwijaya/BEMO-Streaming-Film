//memilih event pada class nav-item
$(".nav-items ").on("click ", function() {
    //hapus class active
    $(".nav-items ").removeClass("active ")
        //tambahkan class active di nav-item yang di klik
    $(this).addClass("active ")
})

//mode bioskop
if (localStorage.getItem('theme') === 'dark') {

    darkmode(true)
} else {
    darkmode(false)
}

function darkmode(isdark) {
    if (isdark) {
        let nav = document.getElementById("nav")
        nav.classList.remove("navbar-light")
        nav.classList.add("navbar-dark")
        document.body.setAttribute('class', 'dark')
        localStorage.setItem('theme', 'dark')
    } else {
        let nav = document.getElementById("nav")
        nav.classList.add("navbar-light")
        nav.classList.remove("navbar-dark")
        document.body.setAttribute('class', ' ')
        localStorage.removeItem('theme')
    }
}
F