
window.successSound = function() {
    const audioContext = new (window.AudioContext || window.webkitAudioContext)();

    // فك التجميد عن الصوت إذا كان المتصفح يحظره
    if (audioContext.state === 'suspended') {
        audioContext.resume();
    }

    const oscillator = audioContext.createOscillator();
    const gainNode = audioContext.createGain();

    oscillator.connect(gainNode);
    gainNode.connect(audioContext.destination);

    oscillator.type = 'sine';
    oscillator.frequency.value = 800;

    gainNode.gain.value = 0.1;

    oscillator.start();
    oscillator.stop(audioContext.currentTime + 0.15);
}
