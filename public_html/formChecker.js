



function clearinputs() {

    console.log("clearinputs ran");

    document.getElementById('q1-A').checked = false;
    document.getElementById('q1-B').checked = false;
    document.getElementById('q1-C').checked = false;
    document.getElementById('q2-A').checked = false;
    document.getElementById('q2-B').checked = false;
    document.getElementById('q2-C').checked = false;
    document.getElementById('name').value = '';
    document.getElementById('pass').value = '';


}

function checkinputs() {


    if (
    (document.getElementById('q1-A').checked == false) &&
    (document.getElementById('q1-B').checked == false) &&
    (document.getElementById('q1-C').checked == false)
    ){

        alert("Please select a product");
        return;

    }

    if (
        (document.getElementById('q2-A').checked == false) &&
        (document.getElementById('q2-B').checked == false) &&
        (document.getElementById('q2-C').checked == false)
     ){
    
        alert("Please select a shipping option");
        return;
    
    }

    if(document.getElementById('name').value == ''){

        alert("Please enter a valid email address");
        return;

    }

    if(document.getElementById('pass').value == ''){

        alert("Please provide a password");
        return;

    }

    let emailName = document.getElementById('name').value;
    console.log(emailName);
    let atCheck = false;
    let dotCheck = false;

    for(let i = 0 ; i <= (emailName).length; i++){

        if(emailName[i] == '@'){ atCheck = true;}
        if(emailName[i] == '.'){ dotCheck = true;}


    }

    if((atCheck == false) || (dotCheck == false)){

        alert("Email address needs to be a valid format");
        return;

    }


    document.getElementById('theForm').submit();


}
