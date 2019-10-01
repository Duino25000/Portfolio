//jQuery(document).ready(function($){
 


function traitement() {
	var nomSaisie = document.querySelector("#nom").value;
	var mailSaisie = document.querySelector("#mail").value; 
	var contactSaisie = document.querySelector("#contact").value;
	
	var chgtNom = document.querySelector("#label_nom");
	var chgt_p_nom = document.querySelector("#label_p_nom");
	var chgt_p_contact = document.querySelector("#pArea");
	var chgtContact = document.querySelector("#label_contact");
	var chgt_p_mail = document.querySelector("#pMail");
	var chgtMail = document.querySelector("#label_mail");

//************************************
    if (nomSaisie!=""){	
    	var nomOK=false;//Même méthode pour les 3. Doivent passer true pour envoi au serveur.
    	if(/^[a-zA-Z- ]+$/.test(nomSaisie)){
    		//chgtNom.innerHTML = "Nom";
    		chgt_p_nom.innerHTML = "Format correct";
    		document.querySelector("#nom").style.borderColor = 'green';
    		var sVar1 = encodeURIComponent(nomSaisie);
    		nomOK = true;
    		
    	}else{
    		chgt_p_nom.innerHTML = "Seule les majuscules, minuscules et le tiret sont autorisés.";
    		document.querySelector("#nom").style.borderColor = 'red';	
    	}
    }
//**********************************
	if (mailSaisie!=""){
		var mailOK=false;
    	 if(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(mailSaisie)){
    	 	//chgtMail.innerHTML = "Mail";
    		document.querySelector("#mail").style.borderColor = 'green';
    		chgt_p_mail.innerHTML = "Format correct";
    		var sVar2 = encodeURIComponent(mailSaisie);	
    		mailOK = true;
    		
    	}else{
    		chgt_p_mail.innerHTML = "Veuillez saisir une adresse mail valide.";
    		document.querySelector("#mail").style.borderColor = 'red';
    	}
    }
//*********************************
	if (contactSaisie!=""){
		var messageOK=false;
    	if(/^[a-zA-Z0-9-()!?@.,;:{}"']+$/.test(contactSaisie)){
    		//chgtContact.innerHTML = "Laissez nous un message";
    		document.querySelector("#contact").style.borderColor = 'green';	
    		chgt_p_contact.innerHTML = "Format correct";
    		var sVar3 = encodeURIComponent(contactSaisie);
    		messageOK = true;
    		
    	}else{
    		chgt_p_contact.innerHTML = "Caractère spécial non autorisé";
    		document.querySelector("#contact").style.borderColor = 'red';
    	}
	}


    if(nomOK && mailOK && messageOK){

        data = new FormData();
        data.append('action', 'traitementFormulaire');
        data.append('nom', sVar1);
        data.append('mail', sVar2);
        data.append('message', sVar3);
       
        fetch(ajaxurl, {method: 'POST', body: data})//admin-url ajaxurl 
        .then( function(response){
            response.text()
        })
        .then( function(response){
            console.log("Votre mail a bien été envoyé");
        })

    }//if non OK
}//traitement
	
//*****************************************************
function check(){
	var inputs = document.querySelectorAll(".vide");
	var i;
	var error = false;
	for (i=0; i<inputs.length; i++){
		if (inputs[i].value==""){	
			var champs=inputs[i];
			champs.style.borderColor = 'red';
			var label_id = "#label_" + champs.id;
			var monLabel=document.querySelector(label_id);
			var texteDeMonLabel = monLabel.innerHTML;
			//monLabel.innerHTML= texteDeMonLabel + "*";
			error = true;	
  		}

	}//for
	if (error === false){
		traitement();

	}else{
		alert("Tous les renseignements sont obligatoires!\nVérifiez les champs en rouges.");
	}

   
}//fonction check
//***************************************************************





    
