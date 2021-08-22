const text=document.getElementById("text")
const prog="hello there welcome to trevors ngugi resume"
let idx=1

setInterval(writeText,200);

function writeText(){
    text.innerText=prog.slice(0,idx)
    idx++;

    if(idx>prog.length){
        idx=1
    }
}