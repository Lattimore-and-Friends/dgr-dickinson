jQuery(document).ready(function ($) {

    const modal = document.querySelector('.roompage-modal');
    const close = document.querySelector('.roompage-close');
    const zoom = document.querySelector('.roompage-artwork-icons__zoom');
    const fullScreen = document.querySelector('.roompage-full-screen');
    const imageModal = document.querySelector('.roompage-artwork-image');
    const exitFullScreenBlock = document.querySelector('.roompage-exit-full-screen');
    const exitFSButton = document.querySelector('.roompage-exit-button');
    const openedFullScreen = document.querySelector('.roompage-opened-fullscreen');
    const img = document.querySelector('.roompage-modal-content');
    const modalDesktop = document.querySelector('#roompage-modal-desktop');
    const fullscreenImage = document.querySelector('#roompage-fullscreen-img');


    if ($('.roompage-artwork-icons__zoom').length) {

        const handleZoom = () => {
            event.preventDefault();
            modal.style.display = "block";
            modal.addEventListener('click', checkCurrentTarget);
        };

        const openFullScreen = () => {
            if (openedFullScreen.requestFullScreen) {
                openedFullScreen.requestFullScreen();
            } else if (openedFullScreen.mozRequestFullScreen) {
                openedFullScreen.mozRequestFullScreen();
            } else if (openedFullScreen.webkitRequestFullScreen) {
                openedFullScreen.webkitRequestFullScreen();
            }
            handleFullScreen();
        };

        const exitFullScreen = () => {
            document.exitFullscreen();
            openedFullScreen.style.display = "none";
        };

        const closeModal = () => {
            modal.style.display = "none";
            exitHandler();
        }

        const handleFullScreen = () => {
            openedFullScreen.style.display = "block";
        };

        const checkCurrentTarget = () => {
            if (event.target !== document.getElementById("roompage-modal-image") && event.target !== document.getElementById("roompage-full-screen")) {
                closeModal();
            }
        };

        function exitHandler() {
            if (!document.fullscreenElement && !document.webkitIsFullScreen && !document.mozFullScreen && !document.msFullscreenElement) {
                openedFullScreen.style.display = "none";
            }
        }

        zoom.addEventListener('click', handleZoom);
        close.addEventListener('click', closeModal);
        fullScreen.addEventListener('click', openFullScreen);
        exitFSButton.addEventListener('click', exitFullScreen);
        document.addEventListener('webkitExitFullscreen', exitHandler);
        document.addEventListener('mozCancelFullScreen', exitHandler);
        document.addEventListener('mozfullscreenchange', exitHandler);
        document.addEventListener('msExitFullscreen', exitHandler);
    };
});
// document.addEventListener('fullscreenchange', exitHandler);
// document.addEventListener('webkitfullscreenchange', exitHandler);
// document.addEventListener('mozfullscreenchange', exitHandler);
// document.addEventListener('MSFullscreenChange', exitHandler);