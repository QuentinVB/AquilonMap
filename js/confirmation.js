function confirmDel(param) {
    console.log(bl);
    var r = confirm("Etes-vous sûr ?");
    
    if (r == true) {      
        window.location=param;
        console.log("true");
    } else {
       console.log("false");
    }
}