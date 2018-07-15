var audioPlayers = document.querySelectorAll(`audio`),
	audioButtonsPlay = document.querySelectorAll(`[data-play]`),
	audioButtonsPause = document.querySelectorAll(`[data-pause]`),
	audioVolumeControls = document.querySelectorAll(`input[type="range"]`),
	audioVolume,
	audio,
	dataID,
	pause,
	play,
	pauseMaster = document.getElementById(`pauseMaster`),
	playMaster = document.getElementById(`playMaster`),
	increaseMaster = document.getElementById(`increaseMaster`),
	masterMute = document.getElementById(`muteMaster`);

audioPlayers.forEach(function (el) {
	el.volume = 0.5;
});

audioButtonsPlay.forEach(function (e) {
	e.addEventListener("click", function (ev) {
		dataID = e.getAttribute('data-play');
		e.classList.add('display--none');
		pause = document.querySelector(`[data-pause="${dataID}"]`);
		pause.classList.remove('display--none');
		audio = document.querySelector(`[data-audio="${dataID}"]`);
		audio.play();
	});
});

audioButtonsPause.forEach(function (e) {
	e.addEventListener("click", function (ev) {
		dataID = e.getAttribute('data-pause');
		e.classList.add('display--none');
		play = document.querySelector(`[data-play="${dataID}"]`);
		play.classList.remove('display--none');
		audio = document.querySelector(`[data-audio="${dataID}"]`);
		audio.pause();
	});
});

audioVolumeControls.forEach(function (e) {
	e.addEventListener("input", function (ev) {
		dataID = e.getAttribute('data-volume');
		audioVolume = e.value / 100;
		audio = document.querySelector(`[data-audio="${dataID}"]`);
		audio.volume = audioVolume;
	});
});

playMaster.addEventListener("click", function (e) {
	audioPlayers.forEach(function (el) {
		el.play();
	});

	playMaster.classList.add("display--none");
	pauseMaster.classList.remove("display--none");

	audioButtonsPlay.forEach(function (el) {
		el.classList.add('display--none');
	});
	audioButtonsPause.forEach(function (el) {
		el.classList.remove('display--none');
	});
});

pauseMaster.addEventListener("click", function (e) {
	audioPlayers.forEach(function (el) {
		el.pause();
	});

	pauseMaster.classList.add("display--none");
	playMaster.classList.remove("display--none");

	audioButtonsPause.forEach(function (el) {
		el.classList.add('display--none');
	});
	audioButtonsPlay.forEach(function (el) {
		el.classList.remove('display--none');
	});
});

masterMute.addEventListener("click", function (e) {
	audioPlayers.forEach(function (el) {
		if (el.muted === false) {
			el.muted = true;
		} else {
			el.muted = false;
		}
	});
});

increaseMaster.addEventListener("click", function (e) {
	audioPlayers.forEach(function (el) {
		el.volume = el.volume + 0.1;
	});
});