

function createTableForm(){

    let table=document.createElement("table");
    let row1=document.createElement("tr");
    let row2=document.createElement("tr");
    let row3=document.createElement("tr");
    let row4=document.createElement("tr");
    let row5=document.createElement("tr");
    let row6=document.createElement("tr");


    let firstNameCell=document.createElement("td");
    firstNameCell.innerHTML="First Name:";
    let firstNameInputCell=document.createElement("td");
    let  firstNameInput = document.createElement("input");
    firstNameInput.setAttribute("type","text");
    firstNameInputCell.appendChild(firstNameInput);
    row1.appendChild(firstNameCell);
    row1.appendChild(firstNameInputCell);
    


    let lastNameCell=document.createElement("td");
    lastNameCell.innerHTML="Last Name:";
    let lastNameInputCell=document.createElement("td");
    let  lastNameInput = document.createElement("input");
    lastNameInput.setAttribute("type","text");
    lastNameInputCell.appendChild(lastNameInput);
    row2.appendChild(lastNameCell);
    row2.appendChild(lastNameInputCell);

    let addressCell=document.createElement("td");
    addressCell.innerHTML="Address:";
    let addressInputCell=document.createElement("td");
    let addressInput=document.createElement("input");
    addressInput.setAttribute("type","text");
    addressInputCell.appendChild(addressInput);
    row3.appendChild(addressCell);
    row3.appendChild(addressInputCell);

    
    let emailCell=document.createElement("td");
    emailCell.innerHTML="Email:";
    let emailInputCell=document.createElement("td");
    let emailInput=document.createElement("input");
    emailInput.setAttribute("type","email");
    emailInputCell.appendChild(emailInput);
    row4.appendChild(emailCell);
    row4.appendChild(emailInputCell);


    let passwordCell=document.createElement("td");
    passwordCell.innerHTML="Password:";
    let passwordInputCell=document.createElement("td");
    let passwordInput=document.createElement("input");
    passwordInput.setAttribute("type","password");
    passwordInputCell.appendChild(passwordInput);
    row5.appendChild(passwordCell);
    row5.appendChild(passwordInputCell);
    
    let buttonCell = document.createElement("td");
    let SubmitButton=document.createElement("input");
    SubmitButton.setAttribute("type","submit");
    let resetButton=document.createElement("input");
    resetButton.setAttribute("type","reset");
    buttonCell.appendChild(SubmitButton);
    
    row6.appendChild(buttonCell);

    //insert rows in table

    table.appendChild(row1);
    table.appendChild(row2);
    table.appendChild(row3);
    table.appendChild(row4);
    table.appendChild(row5);
    table.appendChild(row6);

    
    document.body.appendChild(table);

};

function upperCase() {
    const x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
  };

  