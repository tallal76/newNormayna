"use strict";

var menuItems = [{
  "dataFilter": "AllProduct",
  "name": "Voir tous nos plats",
  "url": "#",
  "color": "#",
  "submenu": []
}, {
  "dataFilter": "Entrees",
  "name": "Nos Entrées",
  "category": "Entrees",
  "color": "#",
  "url": "#",
  "submenu": []
}, {
  "dataFilter": "Plats",
  "name": "Nos plats",
  "category": "Plats",
  "color": "#",
  "url": "#",
  "submenu": []
}, {
  "dataFilter": "Supplements",
  "name": "Nos suppléments",
  "category": "Supplements",
  "color": "#",
  "url": "#",
  "submenu": []
}, {
  "dataFilter": "Desserts",
  "name": "Nos desserts",
  "category": "Desserts",
  "color": "#",
  "url": "#",
  "submenu": [{
    "dataFilter": "Patisseries",
    "name": "Nos patisseries orientales",
    "category": "Patisseries",
    "color": "#",
    "url": "#"
  }]
}, {
  "dataFilter": "Boissons",
  "name": "Nos boissons",
  "category": "Boissons",
  "color": "#",
  "url": "#",
  "submenu": []
}];
var mainMenu = "<ul>";

for (var m = 0; m < menuItems.length; m++) {
  mainMenu += "<li>";
  mainMenu += "<a href='" + menuItems[m].url + "'>" + menuItems[m].name + "</a>";

  if (menuItems[m].submenu.length > 0) {
    mainMenu += "<ul>";

    for (var n = 0; n < menuItems[m].submenu.length; n++) {
      mainMenu += "<li>";
      mainMenu += "<a href='" + menuItems[m].submenu[n].url + "'>" + menuItems[m].submenu[n].name + "</a>";
      mainMenu += "</li>";
    }

    mainMenu += "</ul>";
  }

  mainMenu += "</li>";
} //const CategorysWrapper = document.getElementById("category-wrapper");


document.getElementById("mainMenu").innerHTML = mainMenu;