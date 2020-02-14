let button = document.getElementById('game');

 //Launch the combat menu

 button.addEventListener("click",jouer);
 
function jouer() 
{
	document.getElementById("center").style.display = "none";
	var elem = document.getElementById("center_2");
	elem.style.display = 'block';
}

//Launch soundtrack button play

function myPlay(){
    var audio = new Audio("intro.mp3");
    audio.play();
}

let pokemons = document.getElementsByClassName('image_poke');
let battle = document.getElementById('battle');

for(var i = 0; i < pokemons.length; i++)
{
	let pok = pokemons[i];

	pok.addEventListener('click',choix);
	
	function choix()
	{
	    console.log(pok.dataset.name);
	}

	battle.addEventListener("click", stop_select);

	function stop_select()
	{
		pok.removeEventListener("click", choix);
	}
}

let mime = document.getElementById('mime');
let qulbutoke = document.getElementById('qulbutoke');
let player1 = document.getElementById('joueur1');
let player2 = document.getElementById('joueur2');

//pokemon selection

mime.addEventListener("click",Mime);
qulbutoke.addEventListener("click",Qulbutoke);

function Mime () 
{
    player1.style.display = 'none';
	player2.style.display = 'block';
	mime.style.opacity = 0.33;
}

function Qulbutoke () 
{
	player1.style.display = 'none';
	player2.style.display = 'block';
	qulbutoke.style.opacity = 0.33;
}

let fight = document.getElementById("fight");
let result1 = document.getElementById("result1");
let result2 = document.getElementById("result2");

//At the click of the button battle the combat takes place automatically

battle.addEventListener("click", combat);

function combat()
{
	mime.removeEventListener("click",Mime);
	qulbutoke.removeEventListener("click",Qulbutoke);
	player1.style.display = 'none';
	player2.style.display = 'none';
	fight.style.display = 'block';
	result1.style.display = 'block';
	result2.style.display = 'block';
	console.log(battle.dataset.fights);
}

















