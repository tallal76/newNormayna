"use strict";

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance"); }

function _iterableToArray(iter) { if (Symbol.iterator in Object(iter) || Object.prototype.toString.call(iter) === "[object Arguments]") return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } }

/* ========== Get Testimonials =========== */
var getTestimonials = function getTestimonials() {
  var results, data, testimonials;
  return regeneratorRuntime.async(function getTestimonials$(_context) {
    while (1) {
      switch (_context.prev = _context.next) {
        case 0:
          _context.prev = 0;
          _context.next = 3;
          return regeneratorRuntime.awrap(fetch('./data/testimonials.json'));

        case 3:
          results = _context.sent;
          _context.next = 6;
          return regeneratorRuntime.awrap(results.json());

        case 6:
          data = _context.sent;
          testimonials = data.testimonials;
          return _context.abrupt("return", testimonials);

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

var testimonialsWrapper = document.querySelector('.test-wrapper');

var cards = _toConsumableArray(document.querySelectorAll('.testimonials .card'));

window.addEventListener('DOMContentLoaded', function _callee() {
  var testimonials;
  return regeneratorRuntime.async(function _callee$(_context2) {
    while (1) {
      switch (_context2.prev = _context2.next) {
        case 0:
          _context2.next = 2;
          return regeneratorRuntime.awrap(getTestimonials());

        case 2:
          testimonials = _context2.sent;
          displayTestimonials(testimonials);
          filter();

        case 5:
        case "end":
          return _context2.stop();
      }
    }
  });
});
/* ========== Display Testimonials =========== */

var displayTestimonials = function displayTestimonials(items) {
  var testimonials = items.map(function (item) {
    return " \n                  <div class=\"testimonial\" data-id=\"".concat(item.firstName, "\">\n              <div class=\"d-flex\">\n                <div>\n                  <h4>").concat(item.name, "</h4>\n                  <span>").concat(item.position, "</span>\n                </div>\n  \n                <div class=\"rating\">\n                  <span><i class=\"bx bxs-star\"></i></span>\n                  <span><i class=\"bx bxs-star\"></i></span>\n                  <span><i class=\"bx bxs-star\"></i></span>\n                  <span><i class='bx bxs-star-half' ></i></i></span>\n                  <span><i class='bx bxs-star-half' ></i></i></span>\n                </div>\n              </div>\n  \n              <p>\n               ").concat(item.info, "\n              </p>\n            </div>\n                    ");
  });
  testimonials = testimonials.join('');
  testimonialsWrapper.innerHTML = testimonials;
};
/* ========== Filter Testimonials =========== */


function filter() {
  var testimonial = _toConsumableArray(document.querySelectorAll('.testimonial'));

  for (var i = 0; i < cards.length; i++) {
    cards[0].classList.add('active');
    testimonial[0].classList.add('active');

    cards[i].onclick = function () {
      for (var x = 0; x < cards.length; x++) {
        cards[x].classList.remove('active');
      }

      this.classList.add('active');
      var filter = this.getAttribute('data-filter');

      for (var z = 0; z < testimonial.length; z++) {
        testimonial[z].style.bottom = '-80%';
        testimonial[z].style.opacity = 0;

        if (testimonial[z].getAttribute('data-id') === filter) {
          testimonial[z].style.bottom = '0%';
          testimonial[z].style.opacity = 1;
        }
      }
    };
  }
}