/*
fetch('./process/allcategories.php')
  .then((res) => res.json())
  .then((data) => {
      if(data.length===0){
        let tito = document.querySelector('.tito');
        tito.innerHTML = "no category found. please create category";
      }else{
        let tito = document.querySelector('.tito');
         tito.innerHTML = data.length;
      }
    
  })
  .catch((error) => console.log(error))
  */

  //show sidebar
  function showsidebar(){
    let navicon = document.querySelector('.nav-icon');
    let sidebar = document.querySelector('.sidebar');
    let closesidebar = document.querySelector('#closesidebar'); 
    navicon.addEventListener('click', ()=>{
      sidebar.classList.toggle('showsidebar');
    });
    closesidebar.addEventListener('click', closesidebarfunc);
    function closesidebarfunc(){
      sidebar.classList.remove('showsidebar');
    }
  }
  showsidebar(); 

  //navbar dropdown
  function dropdowntoggle(){
    let droptoggle = document.querySelectorAll('.nav-title');
    droptoggle.forEach((doggle)=>{
      doggle.addEventListener('click', (e)=>{
        // console.log(e.target.parentElement.parentElement);
        if(e.target.classList.contains('nav-title')){
         let targetul = e.target.parentElement.children[1];
         let icon = e.target.parentElement.children[0].children[2].children[0];
         targetul.classList.toggle('ulshow');
         icon.classList.toggle('fa-arrow-down');
         icon.classList.toggle('fa-arrow-up');
         
        }
       });
    });  
  }
  dropdowntoggle();
   
 function showuseraccount(){
   let useracx = document.querySelector('.useracx');
   let useraccountbox = document.querySelector('.useraccountbox');
   useracx.addEventListener('click', ()=>{
    useraccountbox.classList.toggle('show-useraccountbox');
   });
 }
 showuseraccount(); 