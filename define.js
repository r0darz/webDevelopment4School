function reloadPage(id) {
  if (id == "home-id") {
    $("#loadable-content").load("main.html");
    var link = document.querySelector("link[rel~='icon']");
    if (!link) {
      link = document.createElement("link");
      link.rel = "icon";
      document.getElementsByTagName("head")[0].appendChild(link);
    }
    link.href = "img/home-image.svg";
    document.title = "Home Page";
    window.history.pushState("page2", "Title", "home");
  } else if (id == "links-id") {
    $("#loadable-content").load("links.php");
    var link = document.querySelector("link[rel~='icon']");
    if (!link) {
      link = document.createElement("link");
      link.rel = "icon";
      document.getElementsByTagName("head")[0].appendChild(link);
    }
    link.href = "img/links-image.svg";
    document.title = "All Project Links are here";
    window.history.pushState("page2", "Title", "links");
  } else if (id == "message-id") {
    $("#loadable-content").load("message.php");
    var link = document.querySelector("link[rel~='icon']");
    if (!link) {
      link = document.createElement("link");
      link.rel = "icon";
      document.getElementsByTagName("head")[0].appendChild(link);
    }
    link.href = "img/chat-image.svg";
    document.title = "Contact me!";
    window.history.pushState("page2", "Title", "contact");
  } else if (id == "photos-id") {
    $("#loadable-content").load("photos.html");
    var link = document.querySelector("link[rel~='icon']");
    if (!link) {
      link = document.createElement("link");
      link.rel = "icon";
      document.getElementsByTagName("head")[0].appendChild(link);
    }
    link.href = "img/photos-image.svg";
    document.title = "All Used Photos are here";
    window.history.pushState("page2", "Title", "photos");
  } else if (id == "socials-id") {
    $("#loadable-content").load("socials.php");
    var link = document.querySelector("link[rel~='icon']");
    if (!link) {
      link = document.createElement("link");
      link.rel = "icon";
      document.getElementsByTagName("head")[0].appendChild(link);
    }
    link.href = "img/socials-image.svg";
    document.title = "Socials Page";
    window.history.pushState("page2", "Title", "socials");
  }
}

function LoadFunc() {
  $("#loadable-content").load("main.html");
  $("#nav-loadable-content").load("Navigation.html");
}

function redir() {
  window.location.href = "http://localhost/";
}
