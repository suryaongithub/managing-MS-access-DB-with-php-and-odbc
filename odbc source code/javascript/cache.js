
function cacheGo(){
    localStorage.setItem("concept",document.getElementById("concept").value);
    localStorage.setItem("chapter",parseInt(document.getElementById("chapter").value));
    localStorage.setItem("subject",document.getElementById("subject").value);
}

setTimeout(()=>{
    var concept = localStorage.getItem('concept');
    var subject = localStorage.getItem('subject');
    var chapter = localStorage.getItem('chapter');

    document.getElementById("concept").value= concept;
    document.getElementById("subject").value= subject;
    document.getElementById("chapter").value = chapter;}
    ,1)


