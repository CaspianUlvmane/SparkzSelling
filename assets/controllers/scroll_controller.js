import { Controller } from "@hotwired/stimulus";

export default class extends Controller {
  connect() {
    console.log(this.element);
  }

  scrollevent(event) {
    let target = event.currentTarget.hash;
    target = target.substring(1);
    target = document.getElementById(target).getBoundingClientRect();
    console.log(target);

    window.scrollTo({ left: target.x, top: target.y, behavior: "smooth" });
  }
}
