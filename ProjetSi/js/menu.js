function PrincipeDesCss() {
	var div=document.getElementById("Texte");
	var content='Les feuilles de style en cascade1, généralement appelées CSS de'
			+'langlais Cascading Style Sheets,'
			+'forment un langage informatique qui décrit la présentation des documents HTML et XML.'
			+'Les standards définissant CSS sont publiés par le World Wide Web Consortium (W3C).'
			+'Introduit au milieu des années 1990, CSS devient couramment utilisé dans la conception'
			+'de sites web et bien pris en charge par les navigateurs web dans les années 2000.';
	div.innerHTML=content;
}

function BalisesHtmlDeBase() {
	var div=document.getElementById("Texte");
	var content='Pour comprendre le fonctionnement du langage CSS, il est nécessaire d avoir quelques notions en HTML. Le HTML est un langage simple, fait de balises (du genre <tag>) qui ont'
		+'toutes une fonction et un sens. C est ce qu on appelle la sémantique.<br /> Respecter la sémantique, cest améliorer l accessibilité... et aussi le référencement. Cela dit, on ne perdra '
		+'jamais de vue que l humain passe avant les robots ! On fait un site pour des utilisateurs, pas pour le plaisir de se retrouver en tête de requêtes sur google.div.innerHTML=content<br />'
		+' <img align="middle"  src="images/balises.jpg"  />';
	div.innerHTML=content;
}

function FeuilleDeDtyleDeBase(){
	var div=document.getElementById("Texte");
	var content='Pourquoi parle-t on de "feuilles de style en cascade" (Cascading Style Sheets) ? La raison est très simple : on peut déclarer les styles'
				+'à différents endroits, et selon ces endroits ils seront plus ou moins prioritaires. On obtient donc une cascade de styles.'
				+'Déclaration des styles dans une feuille de style externe : c est de loin la meilleure chose à faire et la plus pratique à maintenir '
				+'(cf le schéma de la page daccueil), mais c est celle qui a le moins de poids Déclaration des styles en interne, dans len-tête de la page '
				+': à ne faire qu avec des styles particuliers à une page. Les styles déclarés auront plus de poids que ceux de la feuille de style externe '
				+'et donc l emporteront en cas de conflits. Déclaration des styles en attributs des éléments html : à faire pour des mises en forme ponctuelles.'
				+'Ces styles l emporteront sur tous les autres.... Il y a une 4ème possibilité, mais celle-ci est indépendante de la volonté du webmestre : '
				+'ce sont les styles définis par l utilisateur, s il jamais il en déclare. Ils seront interprétés en priorité, et masqueront tous les autres.';
	div.innerHTML=content;
}

function MettreEnEormeUnTexte(){
	var div=document.getElementById("Texte");
	var content='Il est très important de bien choisir le formatage des polices de caractères utilisées sur une page web. En effet, pour une majorité de sites,'
		+'le principal contenu est sous forme textuelle. Si ce texte est mal adapté, peu lisible, le message ne peut évidemment pas passer, quelque soit sa qualité.'
		+'<dt><b>Il existe 5 familles de polices de caractères dites "génériques"</b></dt><dd>Serif</dd><dd>Serif</dd><dd>Sans-serif</dd><dd>Monospace</dd><dd>Cursive...</dd>';
		+'<dt><b>Le choix des couleurs<dt/><b/><dt><b>Autres attributs<dt/><b/><dd>font-style: normal | italic : normale | italique</dd><dd>font-variant: normal | small-caps : normale | petites capitales</dd><dd>font-weight: normal | bold : normal ou gras</dd> ';
 
	div.innerHTML=content;
}

function GererLesMargesEnCSS(){
	var div=document.getElementById("Texte");
	var content='Pour affecter des marges aux différents éléments d une page web, les propriétés CSS à utiliser sont margin, pour les marges extérieures, et padding pour les marges'
		+'intérieures. Quand on a dit ça, on pourrait croire que ça suffit tant ça paraît simple.<br />Définitions des marges intérieures et extérieures:<br />'
		+'Pour chaque élément html on peut donc définir l espacement qui le séparera des autres éléments (margin) et les espacements intérieurs dont il peut bénéficier (padding).<br />'
		+' <img align="middle"  src="images/marginpadding.jpg"  />';
		
		
		
	div.innerHTML=content;
}  

function ImageDeFond(){
	var div=document.getElementById("Texte");
	var content='L image de fond se déclare en général pour la balise body (corps de page), mais on peut aussi l appliquer à un bloc (&lt;div&gt;&lt;/div&gt;), ou un titre (&lt;hx&gt;&lt;/hx&gt;), '
				+'une citation (&lt;blockquote&gt;&lt;/blockquote&gt;), etc.Pour le corps de page, la syntaxe CSS de base sera celle-ci :<br /> body {<br /> color:black;<br /> background-color:white;<br /> background-image:url(images/image_de_fond.png);<br /> }<br /> '
				+'Sans plus de renseignements, l image de fond apparaît en mosaïque et défile en même temps que le texte. Comme d habitude, cette syntaxe CSS est à mettre dans l en-tête de la page (entre les balises <head></head>) ou dans une feuille de style externe  ';
		
		div.innerHTML=content;
	}  
function AlignerImageTexte(){
	var div=document.getElementById("Texte");
	var content='A l aide du langage CSS, aligner une image et du texte est très simple grâce à la propriété CSS float qui fait "flotter" les éléments.'
		+'Tout élément flottant doit être déclaré en premier dans le flux, c est à dire dans la lecture de haut en bas du code html.'
		+'Les images déclarées dans le code html, qui n ont pas donc vocation à être des images de fond, doivent contenir l attribut alt.' 
		+'Cet attribut est le texte alternatif qui doit apparaître si l image n est pas visualisée. <br />Il a donc un rôle important pour l accessibilité, et pas pour le référencement !<br /><br />'
		+'<dd>-Si l image est purement décorative, le contenu du alt doit être vide</dd>'
		+'<dd>-Si l image est porteuse d information, le contenu du alt doit être pertinent et reprendre cette information.</dd>';
		 
		div.innerHTML=content;
	}  

function CitationsRetraits(){
	var div=document.getElementById("Texte");
	var content='Tout débutant (enfin, beaucoup...) en création de page web constate que l utilisation balise blockquote induit un retrait du texte. Déduction : la balise blockquote est faite pour mettre un texte en retrait...'
		+'Pour induire le retrait d un paragraphe, on peut lui assigner une marge gauche (margin-left) d autant de pixels que souhaités.Si l on désire répeter plusieurs fois cette mise en forme dans la page, il sera évidemment préférable dutiliser'
		+'Si on ne veut faire un retrait que sur la première ligne d un paragraphe, c est alors le text-indent qu il faut utiliser. Si on ne veut faire un retrait que sur la première ligne d un paragraphe, c est alors le text-indent qu il faut utiliser.'
		+'<br /><img align="middle"  src="images/quote.jpg"  />';
	
		div.innerHTML=content;
	}  
  