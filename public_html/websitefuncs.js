function passwordcheck() {
    var password1 = document.getElementById("password1").value;
    var password2 = document.getElementById("password2").value;

    if (password1.length < 8) {
        alert("First password is less than 8 characters, try again")
    } else if (password2.length < 8) {
        alert("Second password is less than 8 characters, try again")
    } else if (password1 != password2) {
        alert("Your passwords do not match, try again")
    } else {
        alert("Passwords match, good job!")
    }
}

function paragraphcolor() {
    var border_R = document.getElementById("border_R").value;
    var border_G = document.getElementById("border_G").value;
    var border_B = document.getElementById("border_B").value;
    var border_width = document.getElementById("border_width").value;
    var bg_R = document.getElementById("bg_R").value;
    var bg_G = document.getElementById("bg_G").value;
    var bg_B = document.getElementById("bg_B").value;

    var tag = document.getElementById("paragraph");
    tag.style.borderColor = `rgb(${border_R},${border_G},${border_B})`;
    tag.style.borderWidth = border_width
    tag.style.backgroundColor = `rgb(${bg_R},${bg_G},${bg_B})`;

}
