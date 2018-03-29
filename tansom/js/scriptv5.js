window.onload = function() {
    var e = document.getElementById("vid2"),
        n = document.getElementById("vid3"),
        d = document.getElementById("vid4"),
        a = document.getElementById("vid5"),
        t = document.getElementById("play-pause2"),
        s = document.getElementById("play-pause3"),
        l = document.getElementById("play-pause4"),
        c = document.getElementById("play-pause5");
    t.addEventListener("click", function() {
        1 == e.paused ? (e.play(), t.innerHTML = "<div class='pauseB'></div>") : (e.pause(), t.innerHTML = "<div class='playB'></div>")
    }), s.addEventListener("click", function() {
        1 == n.paused ? (n.play(), s.innerHTML = "<div class='pauseB'></div>") : (n.pause(), s.innerHTML = "<div class='playB'></div>")
    }), l.addEventListener("click", function() {
        1 == d.paused ? (d.play(), l.innerHTML = "<div class='pauseB'></div>") : (d.pause(), l.innerHTML = "<div class='playB'></div>")
    }), c.addEventListener("click", function() {
        1 == a.paused ? (a.play(), c.innerHTML = "<div class='pauseB'></div>") : (a.pause(), c.innerHTML = "<div class='playB'></div>")
    })
}
