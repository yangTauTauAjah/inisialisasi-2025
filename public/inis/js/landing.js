document.getElementById('enterButton').addEventListener('click', function() {
    const cameraLens = document.querySelector('.camera-lens');
    const cameraContainer = document.querySelector('.camera-container');

    cameraLens.classList.add('zoom-in');
    cameraContainer.classList.add('fade-out');

    setTimeout(function() {
        window.location.href = '/index';
    }, 1000);
});
