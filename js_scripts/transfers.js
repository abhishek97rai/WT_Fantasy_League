function Player(id, name, value, postion){
	this.id = id;
	this.name = name;
	this.value = value;
	this.position = position;
}

function hie(wot, val){
	prompt("HIEE! " + wot);
}

function hello(myArr, xD){
	prompt("HIEE! " + myArr[xD]["player_name"]);
}

//Goalies
var Neuer = new Player(1,"Neuer",31,"g");
var Cech = new Player(2,"Cech",21,"g");

//Defenders
var Lahm = new Player(3,"Philip Lahm",20,"d");
var Toure = new Player(4,"Kolo Toure",18,"d");
var Pique = new Player(5,"Gerrard Pique",24,"d");
var Ramos = new Player(6,"Sergio Ramos",22,"d");
var Cole = new Player(7,"Ashley Cole",10,"d");
var Ferdinand = new Player(8,"Rio Ferdinand",13,"d");
var Puyol = new Player(9,"Carles Puyol",22,"d");
var Alves = new Player(10,"Dani Alves",17,"d");

//Mids
var Ozil = new Player(11,"Mesut Ozil",29,"m");
var Iniesta = new Player(12,"Andres Iniesta",20,"m");
var Silva = new Player(13,"David Silva",14,"m");
var Robben = new Player(14,"Arjen Robben",28,"m");
var Xavi = new Player(15,"Xavi",25,"m");
var Modric = new Player(16,"Luka Modric",20,"m");

//Forwards
var Messi = new Player(17,"Lionel Messi",28,"f");
var Ronaldo = new Player(18,"Cristiano Ronaldo",25,"f");
var Griezmann = new Player(19,"Antoinne Griezmann",21,"f");
var Sanchez = new Player(20,"Alexis Sanchez",26,"f");
var Ibrahimovic = new Player(21,"Zlatan Ibrahimovic",20,"f");
var Costa = new Player(22,"Diego Costa",18,"f");