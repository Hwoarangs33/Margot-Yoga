const burgerBtn = document.querySelector(".toggle-burger");
const burgerMenuList = document.querySelectorAll("#burger-menu ul");

function initBurger() {

    burgerBtn.addEventListener("click", () =>
      document.body.classList.toggle("burger-open")
    );

  // OPEN
  const burgerMenuItemsWithChildren = document.querySelectorAll(
    "#burger-menu .menu-item-has-children"
  );
  burgerMenuItemsWithChildren.forEach((item) => {
    item.addEventListener("click", (e) => {
      e.stopPropagation();

      if (!item.classList.contains("child-active")) {
        item.parentElement.classList.add("child-active");
        item.querySelectorAll('.item-active').forEach((elem) => {
          elem.classList.remove('item-active');
        })
        item.classList.toggle("item-active");
      }
    });
  });

  // CLOSE
  const subMenuClose = document.querySelectorAll(".burgerMenuItemsWithChildren");
  subMenuClose.forEach((item) => {
    item.addEventListener("click", () => {
      item.parentElement.classList.toggle("child-active");
      item.parentElement
        .querySelector(".item-active")
        .classList.toggle("item-active");
    });
  });
}



let subMenuParent = document.querySelectorAll('.menu-item-has-children');
let subMenu = document.querySelectorAll('.menu-link');

subMenuParent.forEach((elem) => {
  elem.addEventListener('click', (e) => {
    e.stopPropagation();
    document.querySelectorAll('.sub-menu .sub-menu.toggled').forEach(t => {
      t.classList.toggle('toggled')
    })
    elem.querySelector('.sub-menu').classList.toggle('toggled');
    elem.querySelector('ul').classList.add('toggleafter');
  })
})

let menuItemListtoggled = document.querySelectorAll('#main-nav ul.menu .sub-menu li')

menuItemListtoggled.forEach((element) => {
  element.addEventListener('click', () => {
    console.log(document.querySelector('#menu-header .menu-item .toggled'));
    document.querySelector('#menu-header .menu-item .toggled').classList.remove('toggleafter');
  })
})

// remove toggle class on click outside of dropdown submenu
document.addEventListener('click', (e) => {
  if(e.target !== subMenuParent){
    subMenuParent.forEach(e => {
      e.querySelectorAll('.sub-menu').forEach(elem => {
        elem.classList.remove('toggled');
      })
    })
  }
})
