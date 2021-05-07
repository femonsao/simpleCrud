function confirmDelete(event){
  event.preventDefault();
  // console.log(event.target.parentNode.href);
  let token = document.getElementsByName('_token')[0].defaultValue;
  // console.log(token, "tk");



  if(confirm("Deseja apagar esse usuario ?")){
    console.log('Deletado');
    let ajax= new XMLHttpRequest();
    ajax.open("delete", event.target.parentNode.href );
    ajax.setRequestHeader("X-CSRF-TOKEN",token);
    ajax.onreadystatechange=function(){
      if(ajax.readyState === 4 && ajax.status === 200){
        window.location.href="";
        // console.log('Apagou');
      }
    }
    ajax.send();

  }else{
    return false;
  }

}
function getDeleteButtons() {

  if(document.querySelector('.btn-delete')){
    let btn=  document.querySelectorAll('.btn-delete');
    for(let i=0; i<btn.length; i++){
      // console.log('for');
      btn[i].addEventListener('click', confirmDelete, false);
    }
  }


}
getDeleteButtons();




