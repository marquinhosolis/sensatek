/**
 * forEach implementation for Objects/NodeLists/Arrays, automatic type loops and context options
 *
 * @private
 * @author Todd Motto
 * @link https://github.com/toddmotto/foreach
 * @param {Array|Object|NodeList} collection - Collection of items to iterate, could be an Array, Object or NodeList
 * @callback requestCallback      callback   - Callback function for each iteration.
 * @param {Array|Object|NodeList} scope=null - Object/NodeList/Array that forEach is iterating over, to use as the this value when executing callback.
 * @returns {}
 */
var forEach = function (t, o, r) {
  if ("[object Object]" === Object.prototype.toString.call(t))
    for (var c in t) Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t);
  else
    for (var e = 0, l = t.length; l > e; e++) o.call(r, t[e], e, t)
};

function hambugerMenu() {
  var hamburgers = document.querySelectorAll(".hamburger");
  if (hamburgers.length > 0) {
    forEach(hamburgers, function (hamburger) {
      hamburger.addEventListener("click", function () {
        this.classList.toggle("is-active");
      }, false);
    });
  }

  $('.hamburgerIcon').click(function () {
    $('.mobileNav').toggleClass('mobileNav--visible');
    $('body').toggleClass('body--locked');
  })
}

function flexslider() {
  $('.homeTestimonials .flexslider').flexslider({
    animation: "slide",
    slideshow: false,
    controlNav: false
  });
}

function fixedMenu() {
  $(window).scroll(function () {
    var height = $(window).scrollTop();
    if (height > 300) {
      $('header').addClass('header--opacity');
    } else {
      $('header').removeClass('header--opacity');
    }
  });
}

function freeFileDownload() {
  var freeFile = $('#datasheetHiddenFileUrl').text();
  setTimeout(
    window.open(freeFile, '_blank'), 3000);
}

function hideMilestones() {
  var numMilestones = $('.milestone').length;
  if (numMilestones > 6) {
    $('.milestone:gt(6)').hide();
    $('.viewMoreMilestones').show();
  }
  $('.viewMoreMilestones a').click(function (e) {
    e.preventDefault();
    $('.milestone').show();
    $(this).hide();
  })
}

function showTeamModal() {
  $('.aboutUsTeamCardButton').click(function (e) {
    e.preventDefault();
    $(this).closest('.aboutUsTeamMate').find('.teamMemberModal').css('display', 'flex');
  })
  $('.closeModal').click(function (e) {
    e.preventDefault();
    $('.teamMemberModal').css('display', 'none');
  })
}

$(document).ready(function () {
  hambugerMenu();
  flexslider();
  fixedMenu();
  hideMilestones();
  showTeamModal();
  AOS.init();
})