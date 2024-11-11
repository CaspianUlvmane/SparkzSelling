import { Controller } from "@hotwired/stimulus";

export default class extends Controller {
  //Navigates to specified element
  scrollevent(event) {
    let href = event.currentTarget.attributes.href.value;
    let target = event.currentTarget.attributes.href.value.split("#")[1];
    try {
      document.getElementById(target).scrollIntoView({ behavior: "smooth" });
    } catch (error) {
      //If element does not exist on page, naviagate to the page where the element exists
      window.location = href;
    }
  }

  // Handles the scroll of the navbar itself
  navscroll() {
    let main = document.querySelector("main");
    // Define max height for main content
    main = main.scrollHeight;
    let top;
    let nav = document.querySelector("nav");
    // Lower and higher end of navbar scroll, past highend the navbar should be invisable, below lower navbar should always be visible.
    let lower = main - 300;
    let higher = main - 100;
    if (window.scrollY < lower) {
      nav.style.top = "24px";
    } else if (lower < window.scrollY < higher) {
      // Calculates distance between higher end and current scroll position
      top = higher - window.scrollY;
      // Removes height of navbar + max top
      top - 88;

      // If top value is less than max top, update top value to move navbar up and out of the screen.
      if (top <= 24) nav.style.top = top + "px";
      // If top value is larger than max top, set top value to max top
      else if (top > 24) nav.style.top = 24 + "px";
    }
  }
}
