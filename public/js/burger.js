// Select the burger button and define the toggle functionality for the burger menu.
const burgerBtn = document.querySelector(".toggle-burger");
burgerBtn.addEventListener("click", () => document.body.classList.toggle("burger-open"));


document.querySelectorAll("#burger-menu .menu-item-has-children").forEach(item => {
    item.addEventListener("click", (e) => {
        // Prevents the click from propagating to undesired elements.
        e.stopPropagation();
        const isActive = item.classList.contains("item-active");
        item.closest("#burger-menu").querySelectorAll(".item-active").forEach(activeItem => {
            activeItem.classList.remove("item-active");
        });
        if (!isActive) {
            item.classList.add("item-active");
            item.closest("ul").classList.add("child-active");
        } else {
            item.classList.remove("item-active");
            // Check if there are other active items within the same parent; if not, remove 'child-active'.
            const hasOtherActive = item.closest("ul").querySelector(".item-active");
            if (!hasOtherActive) {
                item.closest("ul").classList.remove("child-active");
            }
        }
    });
});

// Clicking outside to close sub-menus.
document.addEventListener('click', (e) => {
    const withinMenu = e.target.closest("#burger-menu .menu-item-has-children");
    if (!withinMenu) {
        document.querySelectorAll("#burger-menu .menu-item-has-children").forEach(item => {
            item.classList.remove("item-active");
            item.closest("ul").classList.remove("child-active");
        });
    }
});
