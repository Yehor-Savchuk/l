document.getElementById('inputPassword').oninput = checkPass;
function checkPass(){
  if (document.getElementById('inputPassword').value == '2840'){
    document.getElementById('aPass').style.display = 'block';
  }
}
