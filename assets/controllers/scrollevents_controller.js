import { Controller } from "@hotwired/stimulus";

export default class extends Controller {
  connect() {
    console.log(this.element);
  }

  scrollevent(event) {
    console.log(event.currentTarget.attributes.href.value);
    let href = event.currentTarget.attributes.href.value;
    let target = event.currentTarget.attributes.href.value.split("#")[1];
    try {
      document.getElementById(target).scrollIntoView({ behavior: "smooth" });
    } catch (error) {
      window.location = href;
    }
  }

  navscroll() {
    let main = document.querySelector("main");
    main = main.scrollHeight;
    let top;
    let nav = document.querySelector("nav");
    let lower = main - 300;
    let higher = main - 100;
    if (window.scrollY < lower) {
      nav.style.top = "24px";
    } else if (lower < window.scrollY < higher) {
      top = higher - window.scrollY;
      top - 88;

      if (top <= 24) nav.style.top = top + "px";
      else if (top > 24) nav.style.top = 24 + "px";
    }
  }
}
