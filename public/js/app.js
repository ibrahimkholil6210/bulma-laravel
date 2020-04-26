document.addEventListener('DOMContentLoaded', () => {

    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {
  
      // Add a click event on each of them
      $navbarBurgers.forEach( el => {
        el.addEventListener('click', () => {
          // Get the target from the "data-target" attribute
          const target = el.dataset.target;
          const $target = document.getElementById(target);
          // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
          el.classList.toggle('is-active');
          $target.classList.toggle('is-active');
  
        });
      });
    }
  
  });




if(document.querySelector('#resume') && document.querySelector('#phone')){
  document.querySelector('#resume').addEventListener('change',(e) => {
    const fileName = e.srcElement.files[0].name;
    document.querySelector('.file--name').textContent = fileName;
  });

  document.querySelector('#phone').addEventListener('keyup', (e) => {
    if(e.target.value.length == 8 ){
      document.querySelector('#phone').value = e.target.value + '-';
    }
  });
}


document.addEventListener('DOMContentLoaded',() => {
  const notification = Array.prototype.slice.call(document.querySelectorAll('.notification .delete'));
  if(notification.length > 0){
    notification.forEach(item => {
      item.addEventListener('click', () => {
        const itemToRemove = item.parentNode;
        itemToRemove.parentNode.removeChild(itemToRemove);
      });
    })
  }
});