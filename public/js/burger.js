const burgerBtn = document.querySelector(".toggle-burger");
const burgerMenuList = document.querySelectorAll("#burger-menu ul");

function initBurger() {

    burgerBtn.addEventListener("click", () =>
      document.body.classList.toggle("burger-open")
    );

  // burgerMenuList.forEach((list, index) => {
  //   const hasChildren = list;
  //   if (hasChildren) {
  //     const el = document.createElement("div");
  //     el.classList.add("subm-open", "anim-300");
  //     el.innerText = "←";
  //     hasChildren.append(el);
  //   }
  //   list.classList.add("subm-open-" + index);
  // });

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
