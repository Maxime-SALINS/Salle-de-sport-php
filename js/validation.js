//Gestion du Regex dans le formulaire de contact par Max la Menace

//Dans un premier temps nous allons récupèrer les valeurs de chaque input du formulaire de contact

const userName = document.querySelector("#name");
const userFirstname = document.querySelector("#firstname");
const userPhonenumber = document.querySelector("#phone");
const userEmail = document.querySelector ("#email");
const userSubject = document.querySelector("#sujet");
const userMessage = document.querySelector("#message");

//Nous allons initier les variables de validation

let nameValid = false;
let firstnameValid = false;
let phonenumberValid = false;
let emailValid = false;
let subjectValid = false;
let messageValid = false;

//Nous allons mettre les expressions régulières (Regex) pour chaque champs du formulaire

const UserRegex = /^[a-zA-Z-]{3,23}$/;
const EmailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$/;
const PhoneNumberRegex = /^\+(?:\d{1,3})?\d{10}$/;
const SujetRegex = /^[^<>{}$]{3,200}$/;
const MessageRegex = /^[^<>{}$]{24,}$/;

//Nous allons faire une fonction addClass qui permet de renvoyer true ou false

function addClass(input , regex , value) {
    // console.log(arrayCompare.test(input.value));

    if (regex.test(value) === false) {
        //Si la value n'est pas conforme au regex, nous ajoutons une class "is-invalid" à notre input qui est dans le DOM
        input.classList.add("is-invalid");
        //Puis nous lui retirons la class "is-valid"
        input.classList.remove("is-valid");
    } else {
        //Dans le cas contraire, c'est-à-dire que la value est conforme au regex, nous ajoutons la class "is-valid" à notre input
        input.classList.add("is-valid");
        //Puis nous lui retirons la class "is-invalid"
        input.classList.remove("is-invalid");
    }
};

//Nous allons faire les écouteurs d'événement permettant d'écouter les événnements lorsque l'utilisateur rentre une donnée dans les inputs

userName.addEventListener("input", (e)=> {
    addClass(userName, UserRegex, e.target.value);
    if (userName.classList.contains("is-valid")) {
        nameValid = true;
    } else {
        nameValid = false;
    }
});

userFirstname.addEventListener("input", (e)=> {
    addClass(userFirstname, UserRegex, e.target.value);
    if (userFirstname.classList.contains("is-valid")) {
        firstnameValid = true;
    } else {
        firstnameValid = false;
    }
});

userPhonenumber.addEventListener("input", (e)=> {
    //Dans cette partie nous allons gérer la validation du Numéro de téléphone
    let tel= e.target.value;
    tel = tel.replace(/\s/g , '')
    tel = tel.replace(/^0/, '+33');

    //Quand le téléphone est valide on appliquer notre fonction addClass pour indiquer à l'utilisateur que c'est bon
    addClass(userPhonenumber, PhoneNumberRegex, tel);
    if (userPhonenumber.classList.contains("is-valid")) {
        phonenumberValid = true;
    } else {
        phonenumberValid = false;
    }
});

userEmail.addEventListener("input", (e)=> {
    addClass(userEmail, EmailRegex,  e.target.value);
    if (userEmail.classList.contains("is-valid")) {
        emailValid = true;
    } else {
        emailValid = false;
    }
});

userSubject.addEventListener("input", (e)=> {
    addClass(userSubject, SujetRegex, e.target.value);
    if (userSubject.classList.contains("is-valid")) {
        subjectValid = true;
    } else {
        subjectValid = false;
    }
});

userMessage.addEventListener("input", (e)=> {
    addClass(userMessage, MessageRegex, e.target.value);
    if (userMessage.classList.contains("is-valid")) {
        messageValid = true;
    } else {
        messageValid = false;
    }
});

//Maintenant nous allons gérer la soumission du formulaire, c'est-à-dire lorsque l'utilisateur clique sur le bouton envoyer

//Récupération de la balise form qui contient tout le formulaire de contact
const form = document.querySelector('form');
// console.log(form);

//On initie la fonction qui permettra d'écouter l'événement submit, lorsque l'utilisateur soumettra le formulaire
form.addEventListener("submit", (e)=>{
    //on bloque la soumission automatique du formulaire
    e.preventDefault();

    //Nous vérifions que chaque champs du formulaire soit correct, si tout est correct tu envoyer le mail
    if (nameValid && firstnameValid && phonenumberValid && emailValid && subjectValid && messageValid) {
        //Nous devons récupèrer les infos du formulaire
        let name = userName.value;
        let prenom = userFirstname.value;
        let phone = userPhonenumber.value;
        let email = userEmail.value;
        let sujet = userSubject.value;
        let discribe = userMessage.value;
        
        //Nous allons mettre ces informations dans un object appeler infoContact
        let infoContact = {
            name : name,
            prenom : prenom,
            phone : phone,
            email : email,
            sujet : sujet,
            discribe : discribe,
        };

        //Nous allons faire la gestion d'envoie de mail
        Email.send({
            SecureToken : "5b822f3e-fb7a-47fb-afdb-c7d53d47472e",
            To : "maxime.salins@gmail.com",
            From : "maxime.salins@gmail.com",
            Subject : infoContact.sujet,
            Body : "Nom: " + infoContact.name + " ,prenom: " + infoContact.prenom + " ,tel: " + infoContact.phone + " ,email: " + infoContact.email + " ,message: " + infoContact.discribe
        }).then(
            message => alert(message)
        );
    } else {
        //Sinon le programme lance une alert pour demander à l'utilisateur de rentrer correctement les champs du formulaire 
        alert ("Tout les champs ne sont pas rentrés ou ne sont pas valide, mercie de rentrer correctement les champs du formulaire");
    }
});