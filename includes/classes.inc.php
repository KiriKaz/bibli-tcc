<?php

// $server = ['localhost', 'root', '', 'bibli'];
// $conn = new mysqli($server[0], $server[1], $server[2], $server[3]);

// $qry = $conn->prepare("SELECT * FROM classe;");
// $qry->execute();

// if(!$qry->execute()) {
//     switch($qry->errno) {
//         default:
//             $_SESSION['ERROR'] = "Unknown error (" . $qry->errno . "): " . $qry->error;
//             echo "#EXCEPTION# $qry->error";
//     }
// }

// $classes = $qry->get_result()->fetch_array(MYSQLI_ASSOC) ?? FALSE;

// if(!$classes) {

// }

// foreach ($classes as $classe) {
//     // $pwcheck = password_verify($pw, $user['password']);
//     $nome = $classe['nome'];
//     echo <<<AULA
//         <div class="classe">
//             <h1> $nome </h1>
//                 <div class="aulaslider">
//                     <ol class="sliderlist">
// AULA;
//     $qry = $conn->prepare("SELECT * FROM classe INNER JOIN aula ON aula.aulas_id = classe.aulas_id WHERE aulas_id = {$classe['aulas_id']}");
//     $qry->execute();

//     if(!$qry->execute()) {
//         switch($qry->errno) {
//             default:
//                 $_SESSION['ERROR'] = "Unknown error (" . $qry->errno . "): " . $qry->error;
//                 echo "#EXCEPTION# $qry->error";
//         }
//     }

//     $aulas = $qry->get_result()->fetch_array(MYSQLI_ASSOC) ?? FALSE;

//     foreach ($aulas as $aula) {
//         echo <<<AULS
//                         <li class="aula" aula={$aula['id']}>
//                             <img class="thumbnail" src="etc/image_assets/temp.png">
//                         </li>
//     AULS;

//     }
// }

?>


<div class="classe">
    <h1> Banco de Dados </h1>
    <div class="aulaslider">
        <ol class="sliderlist">
            <li class="aula" id="aula01">
                <img class="thumbnail" src="etc/image_assets/temp.png">
            </li>
            <li class="aula">
                <img class="thumbnail" src="etc/image_assets/temp.png">
            </li>
            <li class="aula">
                <img class="thumbnail" src="etc/image_assets/temp.png">
            </li>
            <li class="aula">
                <img class="thumbnail" src="etc/image_assets/temp.png">
            </li>
        </ol>
    </div>
</div>

<div class="aulaspopup">
    <div id="popup">
<p>Bem vindo ao Bibliotecha!<br><br>Entende-se que voc&#234; est&#225; aqui porqu&#234; busca aprender como come&#231;ar a programar. &#211;timo! Estamos aqui pra lhe ajudar. Nesta aula, gostariamos de apresentar para voc&#234; como poderemos criar um site - do ZERO - em apenas alguns minutos. Vamos l&#225;, ent&#227;o?<br><br><br>Para come&#231;ar, vamos criar uma pasta no Desktop - ou qualquer lugar que quiser - com o nome &#34;Aula&#34;. Dentro desta pasta, criaremos um arquivo, com nome: &#34;index.html&#34;. J&#225; explicaremos o significado deste nome!<br><br><br>Dentro do arquivo, colocaremos essas seguintes linhas:<br><br>&lt;html&gt;<br>    &lt;head&gt;<br>        &lt;title&gt; Meu Primeiro Site! &lt;/title&gt;<br>    &lt;/head&gt;<br>    &lt;body&gt;<br>        &lt;h1&gt; Bem Vindo A Meu Primeiro Site! &lt;/h1&gt;<br>&#9;&lt;p&gt; Lista de compras: &lt;/p&gt;<br>        &lt;ul&gt;<br>            &lt;li&gt; Leite &lt;/li&gt;<br>            &lt;li&gt; Bananas &lt;/li&gt;<br>            &lt;li&gt; Arroz &lt;/li&gt;<br>        &lt;/ul&gt;<br>    &lt;/body&gt;<br>&lt;/html&gt;<br><br>Salvamos o arquivo, e clickamos-o duas vezes para abr&#237;-lo no nosso navegador.<br><br>Opa! Temos o nosso primeiro site!<br><br>Como isso funciona?<br><br>Bem, o HTML &#233; estruturado em &#34;TAGS&#34;: o &lt;html&gt; no in&#237;cio do arquivo sendo uma delas. Cada uma delas tem a pr&#243;pria fun&#231;&#227;o. O &lt;html&gt; declara o in&#237;cio do documento HTML, como exemplo!<br><br>A tag &lt;ul&gt; declara o in&#237;cio de uma lista n&#227;o-ordenada. Commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ultrices in iaculis nunc sed augue lacus viverra vitae congue. Adipiscing commodo elit at imperdiet dui accumsan sit amet nulla. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Gravida arcu ac tortor dignissim. Quis hendrerit dolor magna eget est lorem ipsum dolor sit. Duis!</p>
    </div>
</div>