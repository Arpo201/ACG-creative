let isclick = false;

function toggle(){
    var tog1 = document.getElementById("tog-1");
    var tog2 = document.getElementById("tog-2");

    if(!isclick){
        tog1.classList.add("show1");
        tog2.classList.add("show2");
        isclick = true;
    }else if(isclick){
        tog1.classList.remove("show1");
        tog2.classList.remove("show2");
        isclick = false;
    }
}

function getData(){
    var blob = new Blob(["Welcome to Websparrow.org."],
                { type: "text/plain;charset=utf-8" });
    saveAs(blob, "static.txt");
}