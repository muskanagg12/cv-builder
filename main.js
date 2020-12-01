var firebaseConfig = {
    apiKey: "AIzaSyBi9_tXWtAhcwg89znPaku05BW1tQKxMNA",
    authDomain: "cv-builder-d2f6c.firebaseapp.com",
    databaseURL: "https://cv-builder-d2f6c.firebaseio.com",
    projectId: "cv-builder-d2f6c",
    storageBucket: "cv-builder-d2f6c.appspot.com",
    messagingSenderId: "682018495269",
    appId: "1:682018495269:web:83fbcc68d531ebf71618cc",
    measurementId: "G-SGWT4HYEHW"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  var saveref = firebase.database().ref('save');



(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Get the forms we want to add validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })
  var z;
  function validate(){

    const z = document.getElementById('ifrm').value;
    localStorage.setItem("x", z);
    
  save&confirm(Name,Phone number);
    
}
function validate2(){
  // var y = localStorage.getItem("x");
  // if (y =="123"){
    var name= document.forms["personal"]["admn"].value;
  if (name == "") {
    alert("Name must be filled out");
    return false;
  }
  return true;
  }

function save&confirm(Name,Phone number) {
  var newsaveref=saveref.push();
  newsaveref.set({
    Name:Name,
    Phone number:Phone number,
  });
  // body...
}