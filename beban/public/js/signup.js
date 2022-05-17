function myFunction() {
    var x = document.getElementById("myInput");
    var y = document.getElementById("hide1");
    var z = document.getElementById("hide2");

    if (x.type === 'password') {
        x.type = "text";
        y.style.display = "block";
        y.style.marginTop = "4px";
        z.style.display = "none";
    } else {
        x.type = "password";
        y.style.display = "none";
        z.style.display = "block";
        z.style.marginTop = "4px";
    }
}

function myFunction1() {
    var x = document.getElementById("myInput1");
    var a = document.getElementById("hide3");
    var b = document.getElementById("hide4");

    if (x.type === 'password') {
        x.type = "text";
        a.style.display = "block";
        a.style.marginTop = "4px";
        b.style.display = "none";
    } else {
        x.type = "password";
        a.style.display = "none";
        b.style.display = "block";
        b.style.marginTop = "4px";
    }
}