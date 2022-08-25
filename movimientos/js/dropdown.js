document.getElementById('navbarDropdown').addEventListener('click',dropdown);

function dropdown() {
    box = document.getElementById('box-drop');
    
    if (box.style.display == "none") {
        box.style.display="block";
    } else if (box.style.display == "block") {
        box.style.display="none";
    }
}