function PrincipeDesCss() {
	var div=document.getElementById("Texte");
	var content='Les feuilles de style en cascade1, g�n�ralement appel�es CSS de'
			+'langlais Cascading Style Sheets,'
			+'forment un langage informatique qui d�crit la pr�sentation des documents HTML et XML.'
			+'Les standards d�finissant CSS sont publi�s par le World Wide Web Consortium (W3C).'
			+'Introduit au milieu des ann�es 1990, CSS devient couramment utilis� dans la conception'
			+'de sites web et bien pris en charge par les navigateurs web dans les ann�es 2000.';
	div.innerHTML=content;
}

function BalisesHtmlDeBase() {
	var div=document.getElementById("Texte");
	var content='Pour comprendre le fonctionnement du langage CSS, il est n�cessaire d avoir quelques notions en HTML. Le HTML est un langage simple, fait de balises (du genre <tag>) qui ont'
		+'toutes une fonction et un sens. C est ce qu on appelle la s�mantique.<br /> Respecter la s�mantique, cest am�liorer l accessibilit�... et aussi le r�f�rencement. Cela dit, on ne perdra '
		+'jamais de vue que l humain passe avant les robots ! On fait un site pour des utilisateurs, pas pour le plaisir de se retrouver en t�te de requ�tes sur google.div.innerHTML=content<br />'
		+' <img align="middle"  src="images/balises.jpg"  />';
	div.innerHTML=content;
}

function FeuilleDeDtyleDeBase(){
	var div=document.getElementById("Texte");
	var content='Pourquoi parle-t on de "feuilles de style en cascade" (Cascading Style Sheets) ? La raison est tr�s simple : on peut d�clarer les styles'
				+'� diff�rents endroits, et selon ces endroits ils seront plus ou moins prioritaires. On obtient donc une cascade de styles.'
				+'D�claration des styles dans une feuille de style externe : c est de loin la meilleure chose � faire et la plus pratique � maintenir '
				+'(cf le sch�ma de la page daccueil), mais c est celle qui a le moins de poids D�claration des styles en interne, dans len-t�te de la page '
				+': � ne faire qu avec des styles particuliers � une page. Les styles d�clar�s auront plus de poids que ceux de la feuille de style externe '
				+'et donc l emporteront en cas de conflits. D�claration des styles en attributs des �l�ments html : � faire pour des mises en forme ponctuelles.'
				+'Ces styles l emporteront sur tous les autres.... Il y a une 4�me possibilit�, mais celle-ci est ind�pendante de la volont� du webmestre : '
				+'ce sont les styles d�finis par l utilisateur, s il jamais il en d�clare. Ils seront interpr�t�s en priorit�, et masqueront tous les autres.';
	div.innerHTML=content;
}

function MettreEnEormeUnTexte(){
	var div=document.getElementById("Texte");
	var content='Il est tr�s important de bien choisir le formatage des polices de caract�res utilis�es sur une page web. En effet, pour une majorit� de sites,'
		+'le principal contenu est sous forme textuelle. Si ce texte est mal adapt�, peu lisible, le message ne peut �videmment pas passer, quelque soit sa qualit�.'
		+'<dt><b>Il existe 5 familles de polices de caract�res dites "g�n�riques"</b></dt><dd>Serif</dd><dd>Serif</dd><dd>Sans-serif</dd><dd>Monospace</dd><dd>Cursive...</dd>';
		+'<dt><b>Le choix des couleurs<dt/><b/><dt><b>Autres attributs<dt/><b/><dd>font-style: normal | italic : normale | italique</dd><dd>font-variant: normal | small-caps : normale | petites capitales</dd><dd>font-weight: normal | bold : normal ou gras</dd> ';
 
	div.innerHTML=content;
}

function GererLesMargesEnCSS(){
	var div=document.getElementById("Texte");
	var content='Pour affecter des marges aux diff�rents �l�ments d une page web, les propri�t�s CSS � utiliser sont margin, pour les marges ext�rieures, et padding pour les marges'
		+'int�rieures. Quand on a dit �a, on pourrait croire que �a suffit tant �a para�t simple.<br />D�finitions des marges int�rieures et ext�rieures:<br />'
		+'Pour chaque �l�ment html on peut donc d�finir l espacement qui le s�parera des autres �l�ments (margin) et les espacements int�rieurs dont il peut b�n�ficier (padding).<br />'
		+' <img align="middle"  src="images/marginpadding.jpg"  />';
		
		
		
	div.innerHTML=content;
}  

function ImageDeFond(){
	var div=document.getElementById("Texte");
	var content='L image de fond se d�clare en g�n�ral pour la balise body (corps de page), mais on peut aussi l appliquer � un bloc (&lt;div&gt;&lt;/div&gt;), ou un titre (&lt;hx&gt;&lt;/hx&gt;), '
				+'une citation (&lt;blockquote&gt;&lt;/blockquote&gt;), etc.Pour le corps de page, la syntaxe CSS de base sera celle-ci :<br /> body {<br /> color:black;<br /> background-color:white;<br /> background-image:url(images/image_de_fond.png);<br /> }<br /> '
				+'Sans plus de renseignements, l image de fond appara�t en mosa�que et d�file en m�me temps que le texte. Comme d habitude, cette syntaxe CSS est � mettre dans l en-t�te de la page (entre les balises <head></head>) ou dans une feuille de style externe  ';
		
		div.innerHTML=content;
	}  
function AlignerImageTexte(){
	var div=document.getElementById("Texte");
	var content='A l aide du langage CSS, aligner une image et du texte est tr�s simple gr�ce � la propri�t� CSS float qui fait "flotter" les �l�ments.'
		+'Tout �l�ment flottant doit �tre d�clar� en premier dans le flux, c est � dire dans la lecture de haut en bas du code html.'
		+'Les images d�clar�es dans le code html, qui n ont pas donc vocation � �tre des images de fond, doivent contenir l attribut alt.' 
		+'Cet attribut est le texte alternatif qui doit appara�tre si l image n est pas visualis�e. <br />Il a donc un r�le important pour l accessibilit�, et pas pour le r�f�rencement !<br /><br />'
		+'<dd>-Si l image est purement d�corative, le contenu du alt doit �tre vide</dd>'
		+'<dd>-Si l image est porteuse d information, le contenu du alt doit �tre pertinent et reprendre cette information.</dd>';
		 
		div.innerHTML=content;
	}  

function CitationsRetraits(){
	var div=document.getElementById("Texte");
	var content='Tout d�butant (enfin, beaucoup...) en cr�ation de page web constate que l utilisation balise blockquote induit un retrait du texte. D�duction : la balise blockquote est faite pour mettre un texte en retrait...'
		+'Pour induire le retrait d un paragraphe, on peut lui assigner une marge gauche (margin-left) d autant de pixels que souhait�s.Si l on d�sire r�peter plusieurs fois cette mise en forme dans la page, il sera �videmment pr�f�rable dutiliser'
		+'Si on ne veut faire un retrait que sur la premi�re ligne d un paragraphe, c est alors le text-indent qu il faut utiliser. Si on ne veut faire un retrait que sur la premi�re ligne d un paragraphe, c est alors le text-indent qu il faut utiliser.'
		+'<br /><img align="middle"  src="images/quote.jpg"  />';
	
		div.innerHTML=content;
	}  
  