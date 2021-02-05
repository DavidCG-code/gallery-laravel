document.addEventListener("DOMContentLoaded", function() {

  const inputAvatar = document.querySelector('#register');
  const imageAvatar = document.querySelector('#registerPreview');

    
  inputAvatar.addEventListener("change", ()=>{
    const file = inputAvatar.files[0];
  
    if(file){
      const reader = new FileReader;
  
      reader.addEventListener("load", ()=>{
        console.log(this);
        imageAvatar.setAttribute("src", reader.result);
      });
  
      reader.readAsDataURL(file);
  
    }
  });
});