// CREATION DES VARIABLES ET ARRAY 

var levelCourant = []; //Tableau à une dimension
var dkPosX = 0;
var dkPosY = 0;
var compteur= 0; //Compteur des déplacements
var arrayCellule = []; //Tableau à une dimension
var boutonLevel1 = document.querySelector('#boutonLevel1');
var boutonLevel2 = document.querySelector('#boutonLevel2');
var boutonLevel3 = document.querySelector('#boutonLevel3');
var boutonReplay = document.querySelector('#boutonReplay');
var etat1 = false; // Variable pour savoir si le niveau est finit ou pas 
var etat2 = false;
var etat3 = false;
var levelCurent;
var levelMax = 0;

var chgtDisplayMenu = document.getElementById('blockDisplay');
var chgtDisplayTab = document.getElementById('plateau');

boutonLevel1.addEventListener('click',  function(){ 
    chgtDisplayMenu.classList.remove('db'); //On supprime la class
    chgtDisplayMenu.classList.add('dn');// On recolle une autre class
    chgtDisplayTab.classList.remove('dn'); //On supprime la class
    chgtDisplayTab.classList.add('db');// On recolle une autre class
    lectureFichier(level1);
});

boutonLevel2.addEventListener('click',  function(){
    chgtDisplayMenu.classList.remove('db'); //On supprime la class
    chgtDisplayMenu.classList.add('dn');// On recolle une autre class
    chgtDisplayTab.classList.remove('dn'); //On supprime la class
    chgtDisplayTab.classList.add('db');// On recolle une autre class
    lectureFichier(level2);
});

boutonLevel3.addEventListener('click',  function(){
    chgtDisplayMenu.classList.remove('db'); //On supprime la class
    chgtDisplayMenu.classList.add('dn');// On recolle une autre class
    chgtDisplayTab.classList.remove('dn'); //On supprime la class
    chgtDisplayTab.classList.add('db');// On recolle une autre class
    lectureFichier(level3);
});



document.onkeyup = function(e){

    deplacementDk(e);
}


function activationBouton(){
     for (i = 1; i <= levelMax; i++){
        document.getElementById('boutonLevel' + (i+1)).disabled = false;
        }
}

// FONCTIONS

function lectureFichier(_level){

    // On recupère la map externe
    levelCourant = _level; 
    compteur = 0;
    creationTab();
}

function creationTab(){

// On récupère le tableau html
    var tab = document.getElementById('tab');
    var body = document.getElementsByTagName('body')[0];//body[0] car sinon il ajoute d'autre éléments qui ne sont pas le body
    var plateau = document.getElementById('plateau');
    if(tab){ //Si il existe on le dégage

        plateau.removeChild(tab);
    }

    /*plateau = document.createElement('plateau');
    plateau.id = 'tab';
    body.appendChild(plateau);*/

    tab = document.createElement('table');
    tab.id = 'tab';
    plateau.appendChild(tab);


// On récupère chaque ligne de la map
    for(ligne = 0; ligne < levelCourant.length; ligne++){

        //On crée  la ligne en html
        var row = document.createElement('tr');
        // On récupère chaque case de ligne en cours (cellule)
        for(cellule = 0; cellule < levelCourant[ligne].length; cellule++ ){

            //On crée la cellule en HTML
            var cell = document.createElement('td');
            cell.id = 'x' + cellule + '-' + ligne; // On lui donne comme nom d'id ses coordonnées
            arrayCellule.push(cell); //On ajoute la cellule à l'array arrayCellule

            //Attribution du background selon contenu
            switch( levelCourant[ligne][cellule]){

                case 'm': 
                    cell.classList.add('mur');
                    break; 

                case 'b': 
                    cell.classList.add('banane');
                    break; 

                case 'a': 
                    cell.classList.add('arrive');
                    break; 

                case 'p': 
                    cell.classList.add('dk');
                    dkPosX = cellule;
                    dkPosY = ligne;
                    break; 

                case 'f': 
                    cell.classList.add('arriveBanane');
                    break; 

                case 'v': 
                    cell.classList.add('vide');
                    break; 
            }
            //Ici on définit row comme parent de cell 
            row.appendChild(cell);
        
        }
        //Ici on définit tab comme parent de row 
        tab.appendChild(row);
    }
    compteBanane();

}

function deplacementDk(_event){

    var celluleCourante = document.getElementById('x' + dkPosX +'-'+ dkPosY);

    // console.log(dkPosX +'-'+ dkPosY);
    var deplacement;
    var celluleVoisine;
    var celluleVoisine2;

    switch(_event.keyCode){

        case(37): //GAUCHE

            celluleVoisine = document.getElementById('x' +(dkPosX-1) + '-' + dkPosY);
            celluleVoisine2 = document.getElementById('x' +(dkPosX-2) + '-' + dkPosY);

            // APPEL DE LA FONTION

           deplacement =  bouge(celluleCourante, celluleVoisine, celluleVoisine2);
            
            if(deplacement == true){// Sous-entend = true

                dkPosX--;
            }
        break;

        case(39): //DROITE
            celluleVoisine = document.getElementById('x' + (dkPosX+1) + '-' + dkPosY);
            celluleVoisine2 = document.getElementById('x' + (dkPosX+2) + '-' + dkPosY);

            // APPEL DE LA FONTION

           deplacement =  bouge(celluleCourante, celluleVoisine, celluleVoisine2);
            
            if(deplacement == true){

                dkPosX++;
            }
        break;

        case(38): //HAUT
            celluleVoisine = document.getElementById('x' + dkPosX + '-' + (dkPosY-1));
            celluleVoisine2 = document.getElementById('x' + dkPosX + '-' + (dkPosY-2));

            // APPEL DE LA FONTION

            deplacement =  bouge(celluleCourante, celluleVoisine, celluleVoisine2);
            
            if(deplacement == true){

                dkPosY--;
            }
        break;

        case(40): //BAS
            celluleVoisine = document.getElementById('x' + dkPosX + '-' + (dkPosY+1));
            celluleVoisine2 = document.getElementById('x' + dkPosX + '-' + (dkPosY+2));

            // APPEL DE LA FONTION

           deplacement =  bouge(celluleCourante, celluleVoisine, celluleVoisine2);
            
            if(deplacement == true){

                dkPosY++;
            }
        break;
        compteur++;
    }
    
    if(deplacement){

       compteBanane();
       
    }
}   

//FONCTION COMPTEUR DE BANANE ET DEPLACEMENT

function compteBanane(){

    var compteurBanane;
    var spanCompteur = document.getElementById('compteur');
    var spanCompteurPas = document.getElementById('compteur2');
    var victoire = document.getElementById('victoire');

    console.log(tab);
    compteurBanane = tab.getElementsByClassName('banane');
    spanCompteur.innerHTML = compteurBanane.length;
    spanCompteurPas.innerHTML = compteur;

    if(compteurBanane.length === 0){

        console.log('gg');
        victoire.innerHTML = "VICTOIRE !!";
        victoire.style.color = "red";
        //etat1 = true;
        var finiNiveau = document.getElementById('finiNiveau');
        finNiveau.classList.remove('dn'); //On supprime la class
        finNiveau.classList.add('db');// On recolle une autre class
        activationBouton();
        
        console.log('Vous avez fait ce level en ' + compteur + ' coups.');
    }
    else if(compteBanane.length === 0){

        victoire.innerHTML = "PERDU ... vous aviez droit à 20 coups";
        victoire.style.color = "red";
        levelMax = LevelCurent;
        activationBouton();

    }
}
activationBouton();


// FONCTION REMOVE CLASS PERSO

function removeClassPerso(_cellule){


    if(_cellule.classList.contains('arriveDk')){ // Si la cellule contient la classe arriveDk

        _cellule.classList.remove('arriveDk'); //On supprime le damier et le DK
        _cellule.classList.add('arrive');// On recolle la damier vide
    }
    else{

        _cellule.classList.remove('dk'); //On supprime le DK
        _cellule.classList.add('vide');// On recolle la damier vide

    }
}

function bouge(_celluleCourante, _celluleVoisine, _celluleVoisine2){

   var res = false; // Res correspond au retour de la fonction (bouge) c'est-à-dire si dk bouge ou pas 

    if(_celluleVoisine.classList.contains('vide')){ //On vérifie si la cellule voisine est vide

        removeClassPerso(_celluleCourante); 

        _celluleVoisine.classList.add('dk');
        res =true;
    }
    else if (_celluleVoisine.classList.contains('arrive')){

        removeClassPerso(_celluleCourante);

        _celluleVoisine.classList.add('arriveDk');
        res =true;
    }
    else if(_celluleVoisine.classList.contains('banane')){

        if(_celluleVoisine2.classList.contains('vide')){

            removeClassPerso(_celluleCourante);

            _celluleVoisine2.classList.remove('vide');
            _celluleVoisine.classList.remove('banane');
            _celluleVoisine2.classList.add('banane');
            _celluleVoisine.classList.add('dk');
            res =true;
        }
        else if(_celluleVoisine2.classList.contains('arrive')){

            removeClassPerso(_celluleCourante);

            _celluleVoisine2.classList.remove('arrive');
            _celluleVoisine.classList.remove('banane');
            _celluleVoisine2.classList.add('arriveBanane');
            _celluleVoisine.classList.add('dk');  
            res =true;      
        }
    }
    else if (_celluleVoisine.classList.contains('arriveBanane')){

        if(_celluleVoisine2.classList.contains('vide')){

            removeClassPerso(_celluleCourante);

            _celluleVoisine2.classList.remove('vide');
            _celluleVoisine.classList.remove('arriveBanane');
            _celluleVoisine2.classList.add('banane');
            _celluleVoisine.classList.add('arriveDk');
            res =true;
        }
        else if(_celluleVoisine2.classList.contains('arrive')){

            removeClassPerso(_celluleCourante);

            _celluleVoisine2.classList.remove('arrive');
            _celluleVoisine.classList.remove('arriveBanane');
            _celluleVoisine2.classList.add('arriveBanane');
            _celluleVoisine.classList.add('arriveDk');  
            res =true;      
        }
    }
    if(res){ // Si mouvement du DK (res=true) alors on incrémente de 1 le compteur

        compteur++;
    }
    return res;
}
