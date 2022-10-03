"use strict";

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance"); }

function _iterableToArray(iter) { if (Symbol.iterator in Object(iter) || Object.prototype.toString.call(iter) === "[object Arguments]") return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } }

/* ========== Products Slider =========== */
var swiper = new Swiper(".mySwiper", {
  grabCursor: true,
  slidesPerView: 1,
  spaceBetween: 30,
  pagination: {
    el: ".custom-pagination",
    clickable: true
  },
  breakpoints: {
    567: {
      slidesPerView: 2
    },
    996: {
      slidesPerView: 3
    },
    1200: {
      slidesPerView: 4
    }
  }
});
/* ========== Fetch the Categories =========== */

var getCategories = function getCategories() {
  var results, data, categories;
  return regeneratorRuntime.async(function getCategories$(_context) {
    while (1) {
      switch (_context.prev = _context.next) {
        case 0:
          _context.prev = 0;
          _context.next = 3;
          return regeneratorRuntime.awrap(fetch("../data/categories.json"));

        case 3:
          results = _context.sent;
          _context.next = 6;
          return regeneratorRuntime.awrap(results.json());

        case 6:
          data = _context.sent;
          categories = data.categories;
          return _context.abrupt("return", categories);

        case 11:
          _context.prev = 11;
          _context.t0 = _context["catch"](0);
          console.log(_context.t0);

        case 14:
        case "end":
          return _context.stop();
      }
    }
  }, null, null, [[0, 11]]);
};
/* ========== Fetch the Products =========== */


var getProducts = function getProducts() {
  var results, data, products;
  return regeneratorRuntime.async(function getProducts$(_context2) {
    while (1) {
      switch (_context2.prev = _context2.next) {
        case 0:
          _context2.prev = 0;
          _context2.next = 3;
          return regeneratorRuntime.awrap(fetch("./data/products.json"));

        case 3:
          results = _context2.sent;
          _context2.next = 6;
          return regeneratorRuntime.awrap(results.json());

        case 6:
          data = _context2.sent;
          products = data.products;
          return _context2.abrupt("return", products);

        case 11:
          _context2.prev = 11;
          _context2.t0 = _context2["catch"](0);
          console.log(_context2.t0);

        case 14:
        case "end":
          return _context2.stop();
      }
    }
  }, null, null, [[0, 11]]);
};

var CategorysWrapper = document.getElementById("category-wrapper");
var ProductsWrapper = document.getElementById("products-wrapper");
window.addEventListener("DOMContentLoaded", function _callee() {
  var categories;
  return regeneratorRuntime.async(function _callee$(_context3) {
    while (1) {
      switch (_context3.prev = _context3.next) {
        case 0:
          _context3.next = 2;
          return regeneratorRuntime.awrap(getCategories());

        case 2:
          categories = _context3.sent;
          displayCategoryItems(categories);

        case 4:
        case "end":
          return _context3.stop();
      }
    }
  });
});
window.addEventListener("DOMContentLoaded", function _callee2() {
  var products;
  return regeneratorRuntime.async(function _callee2$(_context4) {
    while (1) {
      switch (_context4.prev = _context4.next) {
        case 0:
          _context4.next = 2;
          return regeneratorRuntime.awrap(getProducts());

        case 2:
          products = _context4.sent;
          displayProductItems(products);

        case 4:
        case "end":
          return _context4.stop();
      }
    }
  });
});
/* ========== Display Category =========== */

var displayCategoryItems = function displayCategoryItems(items) {
  var displayCategory = items.map(function (category) {
    return "<span data-filter='" + category.dataFilter + "'>" + category.name + "</span>";
  });
  displayCategory = displayCategory.join("");

  if (CategorysWrapper) {
    CategorysWrapper.innerHTML = displayCategory;
  }
};
/* ========== Display Products =========== */


var displayProductItems = function displayProductItems(items) {
  var displayProduct = items.map(function (product) {
    return " \n                  <div class=\"swiper-slide\">\n                  <div class=\"card d-flex\">\n                    <div class=\"image\"><img src=".concat(product.url, " alt=\"\"></div>\n                    <div class=\"rating\">\n                    <span><i class=\"bx bxs-star\"></i></span>\n                    <span><i class=\"bx bxs-star\"></i></span>\n                    <span><i class=\"bx bxs-star\"></i></span>\n                    <span><i class=\"bx bxs-star\"></i></span>\n                    <span><i class=\"bx bxs-star\"></i></span>\n                    </div>\n                    <h4>").concat(product.title, "</h4>\n                    <div class=\"price\">\n                      <span>Price</span><span class=\"color\">$").concat(product.price, "</span>\n                    </div>\n                    <div class=\"button btn\">Add To Cart+</div>\n                  </div>\n                </div>\n                    ");
  });
  displayProduct = displayProduct.join("");

  if (ProductsWrapper) {
    ProductsWrapper.innerHTML = displayProduct;
  }
};
/* ========== Filter Products =========== */


var filters = _toConsumableArray(document.querySelectorAll(".filters"));

filters.forEach(function (filter) {
  filters[0].classList.add("active");
  filter.addEventListener("click", function _callee3(e) {
    var id, target, categories, products, menuCategory, menuHautCategory;
    return regeneratorRuntime.async(function _callee3$(_context5) {
      while (1) {
        switch (_context5.prev = _context5.next) {
          case 0:
            id = e.target.getAttribute("data-filter");
            target = e.target;
            _context5.next = 4;
            return regeneratorRuntime.awrap(getCategories());

          case 4:
            categories = _context5.sent;
            _context5.next = 7;
            return regeneratorRuntime.awrap(getProducts());

          case 7:
            products = _context5.sent;
            filters.forEach(function (btn) {
              btn.classList.remove("active");
            });
            target.classList.add("active");
            menuCategory = products.filter(function (product) {
              if (product.category === id) {
                return product;
              }
            });
            menuHautCategory = categories.filter(function (category) {
              if (category.category === id) {
                return category;
              }
            });

            if (id === "AllProduct") {
              displayProductItems(products);
              displayCategoryItems(categories);
              swiper.update();
            } else {
              displayProductItems(menuCategory);
              displayCategoryItems(menuHautCategory);
              swiper.update();
            }

          case 13:
          case "end":
            return _context5.stop();
        }
      }
    });
  });
});