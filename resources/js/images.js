//Script to Create.blade.php -- Upload Image on Gallery

document.addEventListener("DOMContentLoaded", function() {

  const inputFile = document.querySelector('#imageFile');
  const image = document.querySelector('#newImage');

  
  inputFile.addEventListener("change", ()=>{
    const file = inputFile.files[0];
  
    if(file){
      const reader = new FileReader;
  
      reader.addEventListener("load", ()=>{
        console.log(this);
        image.setAttribute("src", reader.result);
        image.parentElement.classList.add('forms__box--create');

    

      });
  
      reader.readAsDataURL(file);
     
    }
  });
  
});
