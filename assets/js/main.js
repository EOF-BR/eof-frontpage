function change(item) {
	author = document.getElementById("author");
	phrase = document.getElementById("phrase");
	
	author.textContent = item["author"];
	phrase.textContent = item["phrase"];
}

function sortition() {
	var size = reflection.length;

	var choose = Math.floor(Math.random() * size);

	return choose;
}

var reflection = [
	{
		"author": "Martin L. King",
		"phrase": "É nosso dever moral, e obrigação, desobedecer leis injustas"
	},
	{
		"author": "Racionais Mc's",
		"phrase": "Viver pouco como um rei, ou muito, como um Zé?"
	},
	{
		"author": "Margin L. King",
		"phrase": "A liberdade nunca é dada pelo opressor, ela deve ser conquistada pelo oprimido"
	},
	{
		"author": "Encontrada em um campo de concentração",
		"phrase": "Se existe um deus, ele terá de implorar pelo meu perdão"
	},
	{
		"author": "Autor desconhecido",
		"phrase": "Não quero que você pense como eu, só quero que pense"
	},
	{
		"author": "Gabriel O Pensador",
		"phrase": "Eles querem acabar com a violência, mas a paz é contra a lei e a lei é contra a paz"
	},
	{
		"author": "Alejandro Jodorowsky",
		"phrase": "Pássaros criados em gaiolas acreditam que voar é doença"
	},
	{
		"author": "Midnight Oil",
		"phrase": "You talk of times of peace for all, And then prepare for war"
	},
]
