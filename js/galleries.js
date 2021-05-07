document.getElementById("bikes2").onclick = function(event) {
  event = event || window.event;
  var target = event.target || event.srcElement,
    link = target.src ? target.parentNode : target,
    options = { index: link, event: event },
    links = this.getElementsByTagName("a");
  blueimp.Gallery(links, options);
};

blueimp.Gallery(document.getElementById("bikes2").getElementsByTagName("a"), {
  container: "#blueimp-gallery-carousel",
  carousel: true
});

document.getElementById("tesla").onclick = function(event) {
  event = event || window.event;
  var targetT = event.targetT || event.srcElement,
    link = targetT.src ? targetT.parentNode : targetT,
    options = { index: link, event: event },
    links = this.getElementsByTagName("a");
  blueimp.Gallery(links, options);
};

blueimp.Gallery(document.getElementById("tesla").getElementsByTagName("a"), {
  container: "#blueimp-gallery-carousel",
  carousel: true
});
document.getElementById("tesla2").onclick = function(event) {
  event = event || window.event;
  var targetT = event.targetT || event.srcElement,
    link = targetT.src ? targetT.parentNode : targetT,
    options = { index: link, event: event },
    links = this.getElementsByTagName("a");
  blueimp.Gallery(links, options);
};

blueimp.Gallery(document.getElementById("tesla2").getElementsByTagName("a"), {
  container: "#blueimp-gallery-carousel",
  carousel: true
});
