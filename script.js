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


var firebaseConfig = {
    apiKey: "AIzaSyCr7Wk2oJa7qBJ20xgUk5PWwWDkHNHK2A8",
    authDomain: "test-6e854.firebaseapp.com",
    databaseURL: "https://test-6e854-default-rtdb.firebaseio.com",
    projectId: "test-6e854",
    storageBucket: "test-6e854.appspot.com",
    messagingSenderId: "767489462538",
    appId: "1:767489462538:web:715d5803b1c46d1663eaf3",
    measurementId: "G-QRC42L1597"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
  let myFirebase = firebase.database();
  let dataRef = myFirebase.ref('/contact');

function pushData(){
    var name = document.getElementById("name").value;
    var email = document.getElementById("mail").value;
    var call = document.getElementById("call").value;
    var content = document.getElementById("content").value;

    var now = new Date();
    var date = now.getDate()+'/'+(now.getMonth()+1)+'/'+now.getFullYear();
    var time = now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds();
    var dateTime = date+' '+time;

    if(call.length != 10) return alert("กรุณากรอกเบอร์โทรติดต่อให้ถูกต้อง");
    
    dataRef.push({
        name: name,
        email: email,
        call: call,
        content: content,
        time: time
        });
    return alert("Finish");
}