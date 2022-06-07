const url = "http://localhost/Rick/index.php?id=1"; 
const d = document,
$main = d.querySelector("main"),
$links = d.querySelector(".links");
async function cargar(url){
try {
    let res = await fetch(url),
    json = await res.json(),
    $template,
    $next,
    $prev;
    console.log(json);
} catch (err) {
    
}
}    
d.addEventListener("DOMContentLoaded", e=>cargar(url));