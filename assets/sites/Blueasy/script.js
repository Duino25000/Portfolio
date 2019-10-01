var flag=true;


function check(){
	var inputs = document.querySelectorAll(".vide");
	var i;
	
	for (i=0; i<inputs.length; i++){
		if (inputs[i].value==""){	
			var champs=inputs[i];
			champs.style.borderColor = 'red';
			var label_id = "#label_" + champs.id;
			var monLabel=document.querySelector(label_id);
			var texteDeMonLabel = monLabel.innerHTML;
			monLabel.innerHTML= texteDeMonLabel + "*";

			while (flag){
				alert("Tous les renseignements sont obligatoires!\nVérifiez les champs en rouges.");
				flag=false;
			}//while
  		}else{
  			traitement();
  		}
	}//for
}
//*********************************************************************************************

function traitement() {
	var nomSaisie = document.querySelector("#nom").value;
	var mailSaisie = document.querySelector("#mail").value; 
	var contactSaisie = document.querySelector("#contactMess").value;

	var chgtNom = document.querySelector("#label_nom");
	var chgtMail = document.querySelector("#label_mail");
	var chgtContact = document.querySelector("#label_contact");

	var chgt_p_contact = document.querySelector("#label_p_contact");
	var chgt_p_nom = document.querySelector("#label_p_nom");
	var chgt_p_mail = document.querySelector("#label_p_mail");

	//*************************************
    if (nomSaisie!=""){	
    	if(/^[a-zA-Z- ]+$/.test(nomSaisie)){
    		chgtNom.innerHTML = "FULL NAME";
    		chgt_p_nom.innerHTML = "";
    		document.querySelector("#nom").style.borderColor = 'green';	
    	}else{
    		chgt_p_nom.innerHTML = "Seule les majuscules, minuscules et les tirets sont autorisés.";
    		chgt_p_nom.style.fontSize= 'x-small';
    		document.querySelector("#nom").style.borderColor = 'red';	
    	}
    }
	//*************************************
	if (mailSaisie!=""){
    	 if(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(mailSaisie)){
    	 	chgtMail.innerHTML = "EMAIL";
    	 	chgt_p_mail.innerHTML = "";
    		document.querySelector("#mail").style.borderColor = 'green';	
    	}else{
    		chgt_p_mail.innerHTML = "Adresse mail non valide";
    		chgt_p_mail.style.fontSize= 'x-small';
    		document.querySelector("#mail").style.borderColor = 'red';
    	}
    }
	//***************************************
	if (contactSaisie!=""){  	
	    	if(/^[a-zA-Z0-9-()!?@.,;:{}"']+$/.test(contactSaisie)){
	    		chgtContact.innerHTML = "MESSAGE";
	    		chgt_p_contact.innerHTML = "";
	    		document.querySelector("#contactMess").style.borderColor = 'green';	
	    	}else{
	    		chgt_p_contact.innerHTML = "Caractère spécial non autorisé";
	    		chgt_p_contact.style.fontSize= 'x-small';
	    		document.querySelector("#contactMess").style.borderColor = 'red';
	    	}
	}
}
//********************************************************************************************************

//document.querySelector("#focusLi1").addEventListener('click',effet1);

const panoramas = document.querySelector("#focusLi2");
const portraits = document.querySelector("#focusLi3");
const macro = document.querySelector("#focusLi4");
const journal = document.querySelector("#focusLi5");

panoramas.addEventListener('click',effet2);
portraits.addEventListener('click',effet3);
macro.addEventListener('click',effet4);
journal.addEventListener('click',effet5);

const f1 = document.querySelector("#portfolio1");
const f2 = document.querySelector("#portfolio2");
const f3 = document.querySelector("#portfolio3");
const f4 = document.querySelector("#portfolio4");
const f5 = document.querySelector("#portfolio5");
const f6 = document.querySelector("#portfolio6");
const f7 = document.querySelector("#portfolio7");
const f8 = document.querySelector("#portfolio8");


function effet2(){
	event.preventDefault();
	f3.style.display = "none";
	f5.style.display= "none";
	f2.style.display= "none";
	f7.style.display = "none";
	f4.style.display= "none";
	f1.style.display= "none";
	//reste 6 et 8
	
	f8.style.transform = "translateX(-80%)";
	f8.style.transitionDuration = "1s";
}

function effet3(){
	event.preventDefault();
	
	f3.style.transform = "translateX(350%) translateY(-140%)";
	
	f3.style.display = "none";
	f3.style.transitionDuration = "2s";


	f8.style.transform = "translateX(-350%) translateY(140%)";
	f8.style.transitionDuration = "2s";
	f8.style.display= "none";
	


	//f8.style.display= "none";
	f6.style.transform = "translateY(350%) translateX(-140%)";
	f6.style.transitionDuration = "2s";
	//f6.style.display = "none";


	f7.style.transform = "translateX(-350%) translateY(140%)";
	f7.style.transitionDuration = "1s";
	//f7.style.display= "none";


	f4.style.transform = "translateY(-350%) translateX(-140%)";
	f4.style.transitionDuration = "1s";
	//f4.style.display= "none";


	f1.style.transform = "translateX(350%) translateY(140%)";
	f1.style.transitionDuration = "1s";
	//f1.style.display="none";
	//reste 2 et 5

	f5.style.transform = "translateX(250%) translateY(-108%)";
	f5.style.transitionDuration = "1s";

	//f5.style.transform = "rotate(180deg)";
	
}

function effet4(){
	alert("krfrkl")
}

function effet5(){
	alert("krfrkl")
}