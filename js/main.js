jQuery(document).ready(function ($) {

    //Rendering rooms list in hamburger
    /*
    const renderMenuList = (rooms) => {
        const menuListItems = rooms.map(room => `
            <li>
            <a class="menu__item" href="../room-page.html">
            <span class="menu__item-author">${room.author}</span>
            <span class="menu__item-name">${room.name}</span>
            </a>
          </li>`).join('');
        document.querySelector(".rooms-menu__box").insertAdjacentHTML('beforeend', menuListItems);
    }

    renderMenuList(rooms);
    */

    // Zoom functionality on single room
    $('#roompage-full-screen').on('click', function () {
        var currentOverlayImage = $('#roompage-overlay').attr('data-url');
        $('#roompage-overlay').zoom({ url: currentOverlayImage });

    });

    //Scroll Animation
    AOS.init();

});