const form  = document.getElementById('form');
form.addEventListener('submit', simpan);

function Tampilkan() {
    document.getElementById("innama").value = document.getElementById("nama").value;
    document.getElementById("inrole").value =     document.getElementById("role").value ;
    document.getElementById("inava").value =     document.getElementById("ava").value;
    document.getElementById("inusia").value =     document.getElementById("usia").value ;  
    document.getElementById("inlokasi").value =     document.getElementById("lokasi").value ;
    document.getElementById("inyears").value =     document.getElementById("years").value ;
    document.getElementById("inemail").value =     document.getElementById("email").value ;

    




}
function simpan(e) {
    var idnama = document.getElementById("innama").value;
    var idrole = document.getElementById("inrole").value;
    var idava = document.getElementById("inava").value;
    var idusia = document.getElementById("inusia").value;
    var idlokasi = document.getElementById("inlokasi").value;
    var idyears = document.getElementById("inyears").value;
    var idemail = document.getElementById("inemail").value;

    document.getElementById("nama").innerHTML = idnama;
    document.getElementById("role").innerHTML = idrole;
    document.getElementById("ava").innerHTML = idava;
    document.getElementById("usia").innerHTML = idusia;    
    document.getElementById("lokasi").innerHTML = idlokasi;
    document.getElementById("years").innerHTML = idyears;
    document.getElementById("email").innerHTML = idemail;
    e.preventDefault();
}