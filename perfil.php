<?php
    // Define o título da página atual
    $pageTitle = "Meu Perfil";
    include 'header.php';
    include 'navbar.php';
?>

<main class="content">

<div class="row">
    <div class="col-lg-4">
        <div class="card mb-4">
            <div class="card-body text-center">
                <img id="perfil"
                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                    alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                <input type="file" id="fileInput" style="display:none" accept="image/*">
                <script>

                    var imagemPerfil = document.getElementById('perfil');
                    var inputArquivo = document.getElementById('fileInput');

                    imagemPerfil.addEventListener('click', function () {
                        inputArquivo.click();

                    });

                    inputArquivo.addEventListener('change', function () {
                        // Código a ser executado quando o arquivo for selecionado e enviado
                        console.log("Arquivo enviado:", inputArquivo.files[0]);

                        if (inputArquivo.files.length > 0) {
                            // Um arquivo foi selecionado
                            uploadImage()
                        } else {
                            // Nenhum arquivo foi selecionado
                            console.log("Nenhum arquivo carregado.");
                        }
                    });

                    // Função para fazer o upload da imagem
                    function uploadImage() {
                        var fileInput = document.getElementById('fileInput');
                        var file = fileInput.files[0];

                        if (file) {
                            var storageRef = firebase.storage().ref();
                            var imagesRef = storageRef.child('images/' + file.name);

                            imagesRef.put(file)
                                .then(function (snapshot) {
                                    console.log('Imagem enviada com sucesso!');

                                    // Obter a URL da imagem do Firebase Storage
                                    imagesRef.getDownloadURL()
                                        .then(function (url) {
                                            // Salvar a URL da imagem no documento Firestore
                                            var docId1 = "XuaNTvkBO9J01ueP9Hcn"; // Substitua pelo ID do documento Firestore desejado
                                            var firestore = firebase.firestore();
                                            var docRef1 = firestore.collection("usuarios").doc(docId1);

                                            docRef1.update({
                                                imagemURL: url
                                            })
                                                .then(function () {
                                                    console.log('URL da imagem salva no documento Firestore.');
                                                    location.reload();

                                                })
                                                .catch(function (error) {
                                                    console.error('Erro ao salvar a URL da imagem no Firestore:', error);
                                                });
                                        })
                                        .catch(function (error) {
                                            console.error('Erro ao obter a URL da imagem:', error);
                                        });
                                })
                                .catch(function (error) {
                                    console.error('Erro ao enviar a imagem:', error);
                                });
                        }
                    }
                </script>
                <h5 id="nome" class="my-3">John Smith</h5>
                <p class="text-muted mb-1">Full Stack Developer</p>
                <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                <div class="d-flex justify-content-center mb-2">
                    <button type="button" onclick="editar()" class="btn btn-primary">Editar</button>
                    <button type="button" onclick="openShareWindow()"
                        class="btn btn-outline-primary ms-1">Compartilhar</button>
                    <script>
                        function openShareWindow() {
                            var message = "Olá, eu estou usando a plataforma de estudo Devschool22. Acesse o link e crie sua conta: http://devschool.com.br/";

                            // Links de compartilhamento para Facebook, Instagram e WhatsApp
                            var facebookLink = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(message);
                            var instagramLink = "https://www.instagram.com/?url=" + encodeURIComponent(message);
                            var whatsappLink = "https://api.whatsapp.com/send?text=" + encodeURIComponent(message);

                            // Abrir uma nova janela com os links de compartilhamento
                            var shareWindow = window.open(
                                "about:blank",
                                "Compartilhar",
                                "width=600,height=400,resizable=yes,scrollbars=yes"
                            );
                            // Escrever os links de compartilhamento na nova janela
                            shareWindow.document.write(
                                "<h3>Compartilhar mensagem:</h3>" +
                                "<ul>" +
                                "<li><a href='" + facebookLink + "' target='_blank'><i class='fab fa-facebook'></i> Compartilhar no Facebook</a></li>" +
                                "<li><a href='" + instagramLink + "' target='_blank'><i class='fab fa-instagram'></i> Compartilhar no Instagram</a></li>" +
                                "<li><a href='" + whatsappLink + "' target='_blank'><i class='fab fa-whatsapp'></i> Compartilhar no WhatsApp</a></li>" +
                                "</ul>"
                            );
                        }
                    </script>
                </div>
            </div>
        </div>
        <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
                <ul class="list-group list-group-flush rounded-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fas fa-globe fa-lg text-warning"></i>
                        <p class="mb-0">https://mdbootstrap.com</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                        <p class="mb-0">mdbootstrap</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                        <p class="mb-0">@mdbootstrap</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                        <p class="mb-0">mdbootstrap</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                        <p class="mb-0">mdbootstrap</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Nome</p>
                    </div>
                    <div class="col-sm-9">
                        <input class="edicao" style="display: none;" id="nome2">
                        <p id="nome3" class="text-muted mb-0 fixo"></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                        <p id="email" class="text-muted mb-0 fixo"></p>
                        <p class="edicao text-muted mb-0 fixo" style="display: none;">Para alterar o
                            email, chame o
                            suporte.</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Celular</p>
                    </div>
                    <div class="col-sm-9">
                        <input class="edicao" style="display: none;" type="text" id="celular2"
                            placeholder="(__) _____-____" name="celular">
                        <p id="celular3" class="text-muted mb-0 fixo"></p>
                        <script
                            src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
                        <script>

                            $(document).ready(function () {
                                $('#celular2').mask('(99) 99999-9999');
                            });

                        </script>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Endereço</p>
                    </div>
                    <div class="col-sm-9">
                        <input class="edicao" style="display: none;" type="Address" id="endereco2"
                            name="endereco">
                        <p id="endereco3" class="text-muted mb-0 fixo">Bay Area, San Francisco, CA</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Bio</p>
                    </div>
                    <div class="col-sm-9">
                        <input class="edicao" style="display: none;" type="text" id="bio2"
                            name="biografia">
                        <p id="bio3" class="text-muted mb-0 fixo">Sou mt bom</p> <br>
                    </div>
                    <button onclick="salvarDados()" style="display: none;"
                        class="btn btn-primary edicao">salvar</button>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4 mb-md-0">
                    <div class="card-body">
                        <p class="mb-4"><span class="text-primary font-italic me-1">Basico

                                <p class="mb-1" style="font-size: .77rem;">HTML</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">CSS</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">JavaScript</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Bootstrap</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">PHP</p>
                                <div class="progress rounded mb-2" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 mb-md-0">
                    <div class="card-body">
                        <p class="mb-4"><span class="text-primary font-italic me-1">Avançado

                                <p class="mb-1" style="font-size: .77rem;">HTML</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">CSS</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">JavaScript</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Bootstrap</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">PHP</p>
                                <div class="progress rounded mb-2" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

</div>
</div>


<script>
// Referências para os inputs no HTML
var inputNome = document.getElementById("nome2");
var inputEndereco = document.getElementById("endereco2");
var inputCelular = document.getElementById("celular2");
var inputBio = document.getElementById("bio2");

// Função para enviar os dados para o Firebase
function enviarDadosFirebase() {
// Obtendo os valores dos inputs
var nome = inputNome.value;
var endereco = inputEndereco.value;
var celular = inputCelular.value;
var bio = inputBio.value;

// Acessando o documento existente no Firebase
var documentoRef = firebase.firestore().collection("usuarios").doc(docId);

// Atualizando os dados no documento existente
documentoRef.update({
nome: nome,
endereco: endereco,
celular: celular,
bio: bio
})
.then(function () {
    console.log("Dados atualizados com sucesso.");
    // Limpar os campos de input após a atualização bem-sucedida
    inputNome.value = "";
    inputEndereco.value = "";
    inputCelular.value = "";
    inputBio.value = "";
})
.catch(function (error) {
    console.error("Erro ao atualizar dados: ", error);
});
}



function salvarDados() {
enviarDadosFirebase();
setTimeout(function () {
location.reload();
}, 200);
}

firebase.firestore().collection('usuarios').doc(docId).get()
.then(function (doc) {
if (doc.data().nome) {
    var nome = userData.nome;
    document.getElementById('nome').innerHTML = nome;
    var nome3 = userData.nome;
    document.getElementById('nome3').innerHTML = nome3;
    var email = userData.email;
    document.getElementById('email').innerHTML = email;
    var celular3 = userData.celular;
    document.getElementById('celular3').innerHTML = celular3;
    var endereco3 = userData.endereco;
    document.getElementById('endereco3').innerHTML = endereco3;
    var bio3 = userData.bio;
    document.getElementById('bio3').innerHTML = bio3;
    var imgURL = userData.imagemURL;
    var imgPerfil = document.getElementById('perfil');
    imgPerfil.src = imgURL;
} else {
    alert("Prencha seus dados!")
    var classesFixo = document.querySelectorAll(".fixo");
    var classesEdicao = document.querySelectorAll(".edicao");

    // Alterne as propriedades de exibição dessas classes
    for (var i = 0; i < classesFixo.length; i++) {
        classesFixo[i].style.display = "none";
    }
    for (var i = 0; i < classesEdicao.length; i++) {
        classesEdicao[i].style.display = "block";
    }
}
})
.catch(function (error) {
console.log(error.message);
});


function editar() {

var classesFixo = document.querySelectorAll(".fixo");
var classesEdicao = document.querySelectorAll(".edicao");

// Alterne as propriedades de exibição dessas classes
for (var i = 0; i < classesFixo.length; i++) {
classesFixo[i].style.display = "none";
}
for (var i = 0; i < classesEdicao.length; i++) {
classesEdicao[i].style.display = "block";
}
}


</script>

</body>