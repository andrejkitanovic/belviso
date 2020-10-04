let element = document.querySelectorAll("table tbody tr th");
let br = 1;
element.forEach(el => {
    if(el.getAttribute("scope") === "col"){
        el.innerHTML += br;
        br++;
    }
})