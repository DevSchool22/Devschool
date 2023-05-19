
// Inicialize o SDK do Firebase
var firebaseConfig = {

  apiKey: "AIzaSyBN6ShVusuGzpGp2QL07ZzPeZLrj_1LFRo",
  authDomain: "devschool22-a29b2.firebaseapp.com",
  projectId: "devschool22-a29b2",
  storageBucket: "devschool22-a29b2.appspot.com",
  messagingSenderId: "1000163958973",
  appId: "1:1000163958973:web:616ae34bb13c2b9d7057d4"
};
const db = firebase.initializeApp(firebaseConfig);

// Recupere o ID do usuário e a chave do Firestore do localStorage
const uid = localStorage.getItem("uid");
const docId = localStorage.getItem("docId");


if (!docId || !uid) {
  // se não existem, redireciona para a página de login
  window.location.href = "Sigin.html";
}
var userData;
var usuario;

// Use essas informações para obter o documento do usuário no Firestore
firebase.firestore().collection('usuarios').doc(docId).get()
  .then(function (doc) {
    if (doc.exists) {
      userData = doc.data();
      // Defina o conteúdo do elemento HTML com os dados do usuário
      console.log('ID do usuário:', uid);
      console.log('Dados do usuário:', userData);
      usuario = userData.usuario;
      document.getElementById('usuario').innerHTML = usuario;
      if (doc.data().nome) {

      } else {
        alert("Você precisa completar seu cadastro antes.");
      }
    } else {
      console('Documento do usuário não encontrado.');
    }
  })
  .catch(function (error) {
    console.log(error.message);
  });


function sair() {
  // Deslogar o usuário
  firebase.auth().signOut()
    .then(function () {
      // Redirecionar para a página de login
      window.location = 'index.html';
      // Limpar o localStorage
      localStorage.removeItem('uid');
      localStorage.removeItem('docId');
    })
    .catch(function (error) {
      console.log(error.message);
    });
}

