<?php
function addContato($document, $nome, $fone, $end){
	 //criar contato
	 $contato = $document->createElement("contato");

	 //nome
	 $nomeElm = $document->createElement("nome", $nome);

	 //fone
	 $foneElm = $document->createElement("telefone", $fone);

	 //endereco
	 $endElm = $document->createElement("endereco", $end);

	 $contato->appendChild($nomeElm);
	 $contato->appendChild($foneElm);
	 $contato->appendChild($endElm);
	 return $contato;
}

$dom = new DOMDocument("1.0", "ISO-8859-1");
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;

$root = $dom->createElement("agenda");

//utilizando a funcao para criar contatos
$Tiao = addContato($dom, "Tiao J.", "5555-4444", "R. Jau, 3");
$Joao = addContato($dom, "Joao S.", "4444-5555", "R. Itu, 4");

//adicionando no root
$root->appendChild($Tiao);
$root->appendChild($Joao);
$dom->appendChild($root);

//salvando o arquivo
$dom->save("agenda.xml");
 
//mostrar dados na tela
header("Content-Type: text/xml");
print $dom->saveXML();
?>
